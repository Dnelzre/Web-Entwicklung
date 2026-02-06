<?= $this->include('templates/head') ?>

<div class="container mt-4">
    <div class="card shadow-sm">
         <div class="card-header d-flex justify-content-between align-items-center">
             <h4 class="mb-0">Taskboard</h4>
             <a href="https://team03.wi1cm.uni-trier.de/public/tasks/create"
                class="btn btn-primary btn-sm">
                 + Neu erstellen
             </a>
         </div>

        <div class="card-body">

    <?php // Board-Auswahl ?>
    <?php if (!empty($boards) && is_array($boards)): ?>
        <form method="get" class="mb-3">
            <div class="row g-2 align-items-center">
                <div class="col-auto">
                    <label for="boardSelect" class="form-label small mb-0">Board:</label>
                </div>
                <div class="col-auto">
                    <select id="boardSelect" name="board" class="form-select form-select-sm" onchange="this.form.submit()">
                        <option value="">Alle Boards</option>
                        <?php foreach ($boards as $b): ?>
                            <?php $bid = isset($b['id']) ? $b['id'] : (isset($b->id) ? $b->id : ''); ?>
                            <option value="<?= htmlspecialchars($bid, ENT_QUOTES, 'UTF-8') ?>" <?= (isset($selectedBoard) && (string)$selectedBoard === (string)$bid) ? 'selected' : '' ?>><?= htmlspecialchars($b['name'] ?? $b->name, ENT_QUOTES, 'UTF-8') ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </form>
    <?php endif; ?>

    <?php
    // Prepare helper to access task attributes
    $get = function($task, $key) {
        if (is_array($task)) return isset($task[$key]) ? $task[$key] : '';
        if (is_object($task)) return isset($task->$key) ? $task->$key : '';
        return '';
    };

    // Index tasks by spaltenid for easier rendering
    $tasksByColumn = [];
    if (!empty($tasks) && (is_array($tasks) || is_object($tasks))) {
        foreach ($tasks as $t) {
            $sid = $get($t, 'spaltenid') ?: '0';
            if (!isset($tasksByColumn[$sid])) $tasksByColumn[$sid] = [];
            $tasksByColumn[$sid][] = $t;
        }
    }

    // Map taskarten icons by id or name
    $taskartenMap = [];
    if (!empty($taskarten) && is_array($taskarten)) {
        foreach ($taskarten as $ta) {
            $taskartenMap[isset($ta['id']) ? $ta['id'] : ''] = isset($ta['taskartenicon']) ? $ta['taskartenicon'] : (isset($ta['taskart']) ? $ta['taskart'] : '');
            $taskartenMap[isset($ta['taskart']) ? $ta['taskart'] : ''] = isset($ta['taskartenicon']) ? $ta['taskartenicon'] : '';
        }
    }
    ?>

    <?php if (!empty($spalten) && is_array($spalten)): ?>
        <div class="taskboard-wrapper" style="overflow-x:auto;">
            <div class="d-flex align-items-start" style="min-height:300px; gap:1rem;">
                <?php foreach ($spalten as $sp): ?>
                    <?php
                    $colId = isset($sp['id']) ? $sp['id'] : (isset($sp->id) ? $sp->id : '0');
                    $colName = isset($sp['spalte']) ? $sp['spalte'] : (isset($sp->spalte) ? $sp->spalte : 'Spalte');
                    $colTasks = isset($tasksByColumn[$colId]) ? $tasksByColumn[$colId] : [];
                    ?>

                    <div class="card" style="min-width:300px; max-width:380px; flex:0 0 auto;">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <strong><?= htmlspecialchars($colName, ENT_QUOTES, 'UTF-8') ?></strong>
                            <span class="badge bg-secondary"><?= count($colTasks) ?></span>
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
                                    $person = $get($task, 'personenname') ?: trim(($get($task, 'vorname') . ' ' . $get($task, 'nachname')));
                                    $taskType = $get($task, 'taskart') ?: $get($task, 'taskartenid');
                                    $reminderRaw = $get($task, 'erinnerungsdatum');
                                    $reminderFmt = '';
                                    if (!empty($reminderRaw)) {
                                        try {
                                            $dt = new \DateTime($reminderRaw);
                                            $reminderFmt = $dt->format('d.m.Y');
                                        } catch (\Exception $e) {
                                            $reminderFmt = $reminderRaw;
                                        }
                                    }
                                    $done = $get($task, 'erledigt');

                                    // Try to resolve an icon for the taskart (could be font-awesome/bi class or image name)
                                    $iconHtml = '';
                                    if (!empty($taskType)) {
                                        $icon = isset($taskartenMap[$taskType]) ? $taskartenMap[$taskType] : $taskType;

                                        if (is_string($icon) && !empty($icon)) {
                                            $trim = trim($icon);
                                            $lower = strtolower($trim);

                                            // Inline SVG provided
                                            if (strpos($trim, '<svg') !== false) {
                                                $iconHtml = $trim; // assume safe

                                            // Image file (svg/png/jpg) - render as img
                                            } elseif (preg_match('/\.(svg|png|jpg|jpeg|gif)$/i', $lower)) {
                                                $iconHtml = '<img src="' . htmlspecialchars($trim, ENT_QUOTES, 'UTF-8') . '" alt="icon" style="height:1rem; width:auto;" />';

                                            // Font icon class (bootstrap-icons or fontawesome) - common patterns: 'bi', 'bi-...', 'fa', 'fa-...'
                                            } elseif (preg_match('/\b(bi|fa|fas|far|fal|fab)\b|bi-|fa-/i', $trim)) {
                                                $iconHtml = '<i class="' . htmlspecialchars($trim, ENT_QUOTES, 'UTF-8') . '"></i>';

                                            // fallback: show as text in a badge
                                            } else {
                                                $iconHtml = '<span class="badge bg-info text-dark">' . htmlspecialchars($trim, ENT_QUOTES, 'UTF-8') . '</span>';
                                            }
                                        }
                                    }
                                    ?>
                                <div class="card mb-3 shadow-sm task-item"
                                     data-taskid="<?= htmlspecialchars($id, ENT_QUOTES, 'UTF-8') ?>">

                                        <div class="card-body p-2">
                                            <div class="d-flex justify-content-between align-items-start mb-1">
                                                <div class="me-2">
                                                    <h6 class="mb-0 text-truncate" title="<?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></h6>
                                                    <small class="text-muted d-block"><?= $iconHtml ?></small>
                                                </div>


                                                <div class="btn-group btn-group-sm" role="group" aria-label="Aktionen">
                                                    <a href="https://team03.wi1cm.uni-trier.de/public/tasks/edit/<?= rawurlencode($id) ?>" class="btn btn-outline-secondary" title="Bearbeiten"><i class="bi bi-pencil"></i></a>
                                                    <a href="https://team03.wi1cm.uni-trier.de/public/tasks/delete/<?= rawurlencode($id) ?>" class="btn btn-outline-danger" title="Löschen" onclick="return confirm('Möchten Sie diesen Task wirklich löschen?')"><i class="bi bi-trash"></i></a>
                                                </div>
                                            </div>

                                            <?php if (!empty($notes)): ?>
                                                <p class="card-text small text-muted" style="white-space:pre-wrap"><?= nl2br(htmlspecialchars($notes, ENT_QUOTES, 'UTF-8')) ?></p>
                                            <?php endif; ?>

                                            <div class="d-flex justify-content-between align-items-center mt-2 small text-muted">
                                                <div>
                                                    <?php if (!empty($person)): ?><div><i class="bi bi-person-fill"></i> <?= htmlspecialchars($person, ENT_QUOTES, 'UTF-8') ?></div><?php endif; ?>
                                                </div>
                                                <div>
                                                    <?php if (!empty($reminderFmt)): ?><div><i class="bi bi-calendar-event"></i> <?= htmlspecialchars($reminderFmt, ENT_QUOTES, 'UTF-8') ?></div><?php endif; ?>
                                                    <div><i class="bi bi-check2-circle"></i> <?= $done ? 'Erledigt' : 'Offen' ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php endforeach; ?>
                            <?php else: ?>
                                <div class="text-muted">Keine Tasks</div>
                            <?php endif; ?>

                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
    <?php else: ?>
        <div class="alert alert-info">Keine Spalten definiert. Bitte legen Sie zuerst Spalten an.</div>
    <?php endif; ?>

        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {

        const columns = document.querySelectorAll('.task-column');

        if (!columns.length) return;

        const drake = dragula(Array.from(columns));

        drake.on('drop', function () {

            const updates = [];

            // alle Spalten + Reihenfolgen neu berechnen
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

            console.log("Sende Updates:", updates); // DEBUG

            fetch('<?= base_url("tasks/updateOrder") ?>', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(updates)
            })
                .then(response => response.json())
                .then(data => {
                    console.log("Server Antwort:", data);
                })
                .catch(error => {
                    console.error(error);
                    alert('Speichern fehlgeschlagen');
                });

        });

    });
</script>
