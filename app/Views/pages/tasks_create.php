<?= $this->include('templates/head') ?>
<?php
$session = session();
$errors = $session->getFlashdata('errors') ?? [];
$old = $session->getFlashdata('_ci_old_input') ?? [];
?>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="mb-0"><?php echo isset($task) ? 'Task bearbeiten' : 'Neuen Task anlegen'; ?></h4>
                        <small class="text-muted">Pflichtfelder sind mit <span class="text-danger">*</span> gekennzeichnet</small>
                    </div>

                    <?php if (!empty($errors)): ?>
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                <?php foreach ($errors as $err): ?>
                                    <li><?= htmlspecialchars($err, ENT_QUOTES, 'UTF-8') ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <form action="<?= isset($base_url) ? $base_url . '/tasks/submit' : '/tasks/submit' ?>" method="post">

                        <input type="hidden" name="task_id" value="<?= htmlspecialchars($old['task_id'] ?? ($task['id'] ?? ''), ENT_QUOTES, 'UTF-8') ?>">

                        <div class="mb-3 form-floating">
                            <input type="text" name="tasks" id="tasks" class="form-control" placeholder="Taskbezeichnung" required autofocus value="<?= htmlspecialchars($old['tasks'] ?? ($task['tasks'] ?? ''), ENT_QUOTES, 'UTF-8') ?>">
                            <label for="tasks">Taskbezeichnung <span class="text-danger">*</span></label>
                            <?php if (isset($errors['tasks'])): ?><div class="form-text text-danger"><?= htmlspecialchars($errors['tasks'], ENT_QUOTES, 'UTF-8') ?></div><?php endif; ?>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Taskart <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-tag"></i></span>
                                    <select name="taskartenid" class="form-select" required>
                                        <option value="">--- bitte auswählen ---</option>
                                        <?php $selTaskart = $old['taskartenid'] ?? ($task['taskartenid'] ?? ''); ?>
                                        <?php if (!empty($taskarten) && is_array($taskarten)): ?>
                                            <?php foreach ($taskarten as $ta): ?>
                                                <option value="<?= htmlspecialchars($ta['id'], ENT_QUOTES, 'UTF-8') ?>" <?= ($selTaskart == $ta['id']) ? 'selected' : '' ?>><?= htmlspecialchars($ta['taskart'], ENT_QUOTES, 'UTF-8') ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <?php if (isset($errors['taskartenid'])): ?><small class="text-danger"><?= htmlspecialchars($errors['taskartenid'], ENT_QUOTES, 'UTF-8') ?></small><?php endif; ?>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Person <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                    <select name="personenid" class="form-select" required>
                                        <option value="">--- bitte auswählen ---</option>
                                        <?php $selPerson = $old['personenid'] ?? ($task['personenid'] ?? ''); ?>
                                        <?php if (!empty($personen) && is_array($personen)): ?>
                                            <?php foreach ($personen as $p): ?>
                                                <option value="<?= htmlspecialchars($p['id'], ENT_QUOTES, 'UTF-8') ?>" <?= ($selPerson == $p['id']) ? 'selected' : '' ?>><?= htmlspecialchars(($p['vorname'] . ' ' . $p['name']), ENT_QUOTES, 'UTF-8') ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <?php if (isset($errors['personenid'])): ?><small class="text-danger"><?= htmlspecialchars($errors['personenid'], ENT_QUOTES, 'UTF-8') ?></small><?php endif; ?>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Spalte <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-columns-gap"></i></span>
                                    <select name="spaltenid" class="form-select" required>
                                        <option value="">--- bitte auswählen ---</option>
                                        <?php $selSpalte = $old['spaltenid'] ?? ($task['spaltenid'] ?? ''); ?>
                                        <?php if (!empty($spalten) && is_array($spalten)): ?>
                                            <?php foreach ($spalten as $s): ?>
                                                <option value="<?= htmlspecialchars($s['id'], ENT_QUOTES, 'UTF-8') ?>" <?= ($selSpalte == $s['id']) ? 'selected' : '' ?>><?= htmlspecialchars($s['spalte'], ENT_QUOTES, 'UTF-8') ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <?php if (isset($errors['spaltenid'])): ?><small class="text-danger"><?= htmlspecialchars($errors['spaltenid'], ENT_QUOTES, 'UTF-8') ?></small><?php endif; ?>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Erinnerungsdatum</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-calendar-event"></i></span>
                                    <input type="date" name="erinnerungsdatum" class="form-control" value="<?= htmlspecialchars($old['erinnerungsdatum'] ?? ($task['erinnerungsdatum'] ?? ''), ENT_QUOTES, 'UTF-8') ?>">
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 mt-3">
                            <label class="form-label">Notizen</label>
                            <textarea name="notizen" class="form-control" rows="4" placeholder="Notizen zum Task..."><?= htmlspecialchars($old['notizen'] ?? ($task['notizen'] ?? ''), ENT_QUOTES, 'UTF-8') ?></textarea>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div class="form-check form-switch">
                                <?php $selDone = isset($old['erledigt']) ? ($old['erledigt'] == '1') : (!empty($task['erledigt']) && $task['erledigt']); ?>
                                <input class="form-check-input" type="checkbox" id="erledigt" name="erledigt" value="1" <?= $selDone ? 'checked' : '' ?>>
                                <label class="form-check-label" for="erledigt">Erledigt</label>
                            </div>

                            <div>
                                <a href="<?= isset($base_url) ? $base_url . '/tasks' : '/tasks' ?>" class="btn btn-secondary me-2">Abbrechen</a>
                                <button type="submit" class="btn btn-success"><?php echo isset($task) ? 'Aktualisieren' : 'Speichern'; ?></button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
