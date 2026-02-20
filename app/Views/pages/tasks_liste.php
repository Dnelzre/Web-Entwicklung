<?= $this->include('templates/head') ?>

<div class="container mt-4">
    <div class="card shadow-sm main-board-card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0 fw-semibold">Taskboard</h4>
            <a href="https://team03.wi1cm.uni-trier.de/public/tasks/create"
               class="btn btn-primary btn-sm rounded-pill px-3">
                + Neu erstellen
            </a>
        </div>

        <div class="card-body">

            <?php if (!empty($boards) && is_array($boards)): ?>
                <form method="get" class="mb-3">
                    <div class="row g-2 align-items-center">
                        <div class="col-auto">
                            <label for="boardSelect" class="form-label small mb-0 fw-semibold">Board:</label>
                        </div>
                        <div class="col-auto">
                            <select id="boardSelect" name="board"
                                    class="form-select form-select-sm rounded-pill px-3"
                                    onchange="this.form.submit()">
                                <option value="">Alle Boards   :</option>
                                <?php foreach ($boards as $b): ?>
                                    <?php $bid = $b['id'] ?? $b->id ?? ''; ?>
                                    <option value="<?= htmlspecialchars($bid, ENT_QUOTES, 'UTF-8') ?>"
                                            <?= (isset($selectedBoard) && (string)$selectedBoard === (string)$bid) ? 'selected' : '' ?>>
                                        <?= htmlspecialchars($b['name'] ?? $b->name, ENT_QUOTES, 'UTF-8') ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </form>
            <?php endif; ?>

            <?php
            $get = function($task, $key) {
                if (is_array($task)) return $task[$key] ?? '';
                if (is_object($task)) return $task->$key ?? '';
                return '';
            };

            $tasksByColumn = [];
            if (!empty($tasks)) {
                foreach ($tasks as $t) {
                    $sid = $get($t, 'spaltenid') ?: '0';
                    $tasksByColumn[$sid][] = $t;
                }
            }

            // TASKARTEN MAP (Feature aus altem Code)
            $taskartenMap = [];
            if (!empty($taskarten) && is_array($taskarten)) {
                foreach ($taskarten as $ta) {
                    $taskartenMap[$ta['id'] ?? ''] = $ta['taskartenicon'] ?? ($ta['taskart'] ?? '');
                    $taskartenMap[$ta['taskart'] ?? ''] = $ta['taskartenicon'] ?? '';
                }
            }
            ?>

            <?php if (!empty($spalten) && is_array($spalten)): ?>
                <div class="taskboard-wrapper" style="overflow-x:auto;">
                    <div class="d-flex align-items-start" style="min-height:300px; gap:1rem;">

                        <?php foreach ($spalten as $sp): ?>
                            <?php
                            $colId = $sp['id'] ?? $sp->id ?? '0';
                            $colName = $sp['spalte'] ?? $sp->spalte ?? 'Spalte';
                            $colTasks = $tasksByColumn[$colId] ?? [];
                            ?>

                            <div class="card board-column-card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <span><?= htmlspecialchars($colName, ENT_QUOTES, 'UTF-8') ?></span>
                                    <span class="badge bg-secondary rounded-pill"><?= count($colTasks) ?></span>
                                </div>

                                <div class="card-body task-column"
                                     data-spaltenid="<?= htmlspecialchars($colId, ENT_QUOTES, 'UTF-8') ?>"
                                     style="max-height:70vh; overflow:auto;">

                                    <?php if (!empty($colTasks)): ?>
                                        <?php foreach ($colTasks as $task): ?>
                                            <?php
                                            $id = $get($task, 'id');
                                            $title = $get($task, 'tasks');
                                            $notes = $get($task, 'notizen');
                                            $person = $get($task, 'personenname') ?: trim(($get($task, 'vorname').' '.$get($task, 'nachname')));
                                            $reminderRaw = $get($task, 'erinnerungsdatum');
                                            $done = $get($task, 'erledigt');

                                            $reminderFmt = '';
                                            if (!empty($reminderRaw)) {
                                                try {
                                                    $dt = new \DateTime($reminderRaw);
                                                    $reminderFmt = $dt->format('d.m.Y');
                                                } catch (\Exception $e) {
                                                    $reminderFmt = $reminderRaw;
                                                }
                                            }

                                            // ICON FEATURE
                                            $taskType = $get($task, 'taskart') ?: $get($task, 'taskartenid');
                                            $iconHtml = '';

                                            if (!empty($taskType)) {
                                                $icon = $taskartenMap[$taskType] ?? $taskType;

                                                if (strpos($icon, '<svg') !== false) {
                                                    $iconHtml = $icon;
                                                } elseif (preg_match('/\.(svg|png|jpg|jpeg|gif)$/i', $icon)) {
                                                    $iconHtml = '<img src="' . htmlspecialchars($icon, ENT_QUOTES, 'UTF-8') . '" style="height:1rem;" />';
                                                } elseif (preg_match('/\b(bi|fa|fas|far|fab)\b|bi-|fa-/i', $icon)) {
                                                    $iconHtml = '<i class="' . htmlspecialchars($icon, ENT_QUOTES, 'UTF-8') . '"></i>';
                                                } else {
                                                    $iconHtml = '<span class="badge bg-info text-dark">' . htmlspecialchars($icon, ENT_QUOTES, 'UTF-8') . '</span>';
                                                }
                                            }
                                            ?>

                                            <div class="card task-card mb-3 task-item <?= $done ? 'task-done' : '' ?>"
                                                 data-taskid="<?= htmlspecialchars($id, ENT_QUOTES, 'UTF-8') ?>">

                                                <div class="card-body p-3">
                                                    <div class="d-flex justify-content-between align-items-start mb-2">

                                                        <div class="me-2 flex-grow-1">
                                                            <h6 class="task-title mb-1 text-truncate"
                                                                title="<?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>">
                                                                <?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>
                                                            </h6>

                                                            <?php if (!empty($iconHtml)): ?>
                                                                <small class="text-muted"><?= $iconHtml ?></small>
                                                            <?php endif; ?>
                                                        </div>

                                                        <div class="btn-group btn-group-sm task-actions">
                                                            <a href="<?= base_url("tasks/edit/".$id) ?>"
                                                               class="btn btn-outline-secondary"
                                                               title="Bearbeiten">
                                                                <i class="bi bi-pencil"></i>
                                                            </a>

                                                            <a href="<?= base_url("tasks/delete/".$id) ?>"
                                                               class="btn btn-outline-danger btn-delete"
                                                               title="Löschen"
                                                               onclick="return confirm('Möchten Sie diesen Task wirklich löschen?')">
                                                                <i class="bi bi-trash"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <?php if (!empty($notes)): ?>
                                                        <p class="task-notes small mb-2">
                                                            <?= nl2br(htmlspecialchars($notes, ENT_QUOTES, 'UTF-8')) ?>
                                                        </p>
                                                    <?php endif; ?>

                                                    <div class="task-meta d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <?php if (!empty($person)): ?>
                                                                <div><i class="bi bi-person-fill"></i> <?= htmlspecialchars($person, ENT_QUOTES, 'UTF-8') ?></div>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="text-end">
                                                            <?php if (!empty($reminderFmt)): ?>
                                                                <div><i class="bi bi-calendar-event"></i> <?= htmlspecialchars($reminderFmt, ENT_QUOTES, 'UTF-8') ?></div>
                                                            <?php endif; ?>
                                                            <div>
                                                                <i class="bi bi-check2-circle"></i>
                                                                <?= $done ? 'Erledigt' : 'Offen' ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <div class="text-muted text-center py-3">Keine Tasks</div>
                                    <?php endif; ?>

                                </div>
                            </div>

                        <?php endforeach; ?>
                    </div>
                </div>
            <?php else: ?>
                <div class="alert alert-info">Keine Spalten definiert.</div>
            <?php endif; ?>

        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {

        const columns = document.querySelectorAll('.task-column');
        if (columns.length && typeof dragula !== 'undefined') {
            const drake = dragula(Array.from(columns));

            drake.on('drop', function () {
                const updates = [];

                document.querySelectorAll('.task-column').forEach(column => {
                    const spaltenId = column.getAttribute('data-spaltenid');

                    column.querySelectorAll('.task-item').forEach(function (taskEl, index) {
                        updates.push({
                            task_id: taskEl.getAttribute('data-taskid'),
                            spaltenid: spaltenId,
                            sortid: index
                        });
                    });
                });

                fetch('<?= base_url("tasks/updateOrder") ?>', {
                    method: 'POST',
                    headers: {'Content-Type': 'application/json'},
                    body: JSON.stringify(updates)
                });
            });
        }

    });
</script>