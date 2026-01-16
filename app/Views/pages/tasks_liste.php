<?= $this->include('templates/head') ?>

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Aufgabenliste</h2>
        <div class="p-3 d-flex">
            <a href="<?= isset($base_url) ? $base_url . '/tasks/create' : '/tasks/create' ?>" class="btn btn-primary btn-sm me-2">+ Neu erstellen</a>
        </div>
    </div>

    <?php if (!empty($tasks) && (is_array($tasks) || is_object($tasks))): ?>
        <div class="row">
            <?php foreach ($tasks as $task): ?>
                <?php
                    $get = function($key) use ($task) {
                        if (is_array($task)) return isset($task[$key]) ? $task[$key] : '';
                        if (is_object($task)) return isset($task->$key) ? $task->$key : '';
                        return '';
                    };

                    $id = $get('id');
                    $title = $get('tasks');
                    $notes = $get('notizen');
                    $person = $get('personenname') ?: trim(($get('vorname') . ' ' . $get('nachname')));
                    $column = $get('spalte') ?: $get('spaltenid');
                    $taskType = $get('taskart') ?: $get('taskartenid');
                    $reminderRaw = $get('erinnerungsdatum');
                    $reminderFmt = '';
                    if (!empty($reminderRaw)) {
                        try {
                            $dt = new \DateTime($reminderRaw);
                            $reminderFmt = $dt->format('d.m.Y');
                        } catch (\Exception $e) {
                            $reminderFmt = $reminderRaw;
                        }
                    }
                    $done = $get('erledigt');
                ?>

                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title mb-0 text-truncate" title="<?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></h5>
                                <?php if (!empty($taskType)): ?>
                                    <span class="badge bg-info text-dark ms-2" title="Taskart"><?= htmlspecialchars($taskType, ENT_QUOTES, 'UTF-8') ?></span>
                                <?php endif; ?>
                            </div>

                            <?php if (!empty($notes)): ?>
                                <p class="card-text text-muted small mb-2" style="white-space:pre-wrap"><?= nl2br(htmlspecialchars($notes, ENT_QUOTES, 'UTF-8')) ?></p>
                            <?php else: ?>
                                <p class="card-text text-muted small mb-2">&nbsp;</p>
                            <?php endif; ?>

                            <div class="mt-auto">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-muted small">
                                        <?php if (!empty($person)): ?>
                                            <div><i class="bi bi-person-fill"></i> <?= htmlspecialchars($person, ENT_QUOTES, 'UTF-8') ?></div>
                                        <?php endif; ?>
                                        <?php if (!empty($column)): ?>
                                            <div><i class="bi bi-columns-gap"></i> <?= htmlspecialchars($column, ENT_QUOTES, 'UTF-8') ?></div>
                                        <?php endif; ?>
                                        <?php if (!empty($reminderFmt)): ?>
                                            <div><i class="bi bi-calendar-event"></i> <?= htmlspecialchars($reminderFmt, ENT_QUOTES, 'UTF-8') ?></div>
                                        <?php endif; ?>
                                        <div><i class="bi bi-check2-circle"></i> <?= $done ? 'Erledigt' : 'Offen' ?></div>
                                    </div>

                                    <div class="btn-group btn-group-sm" role="group" aria-label="Aktionen">
                                        <a href="<?= isset($base_url) ? $base_url . '/tasks/edit/' . rawurlencode($id) : '/tasks/edit/' . rawurlencode($id) ?>" class="btn btn-outline-secondary" title="Bearbeiten"><i class="bi bi-pencil"></i></a>
                                        <a href="<?= isset($base_url) ? $base_url . '/tasks/delete/' . rawurlencode($id) : '/tasks/delete/' . rawurlencode($id) ?>" class="btn btn-outline-danger" title="Löschen" onclick="return confirm('Möchten Sie diesen Task wirklich löschen?')"><i class="bi bi-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div class="alert alert-info">Keine Tasks in der Datenbank gefunden.</div>
    <?php endif; ?>

</div>
