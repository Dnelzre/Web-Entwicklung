<?= $this->include('templates/head') ?>

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Aufgabenübersicht</h2>
        <div class="p-3 d-flex">
            <a href="<?=('https://team03.wi1cm.uni-trier.de/public/tasks_form') ?>" class="btn btn-primary btn-sm me-2">
                + Neu erstellen</a>
        </div>
    </div>

    <div class="row">
        <?php if (!empty($tasks) && is_array($tasks)): ?>
            <?php foreach ($tasks as $task): ?>
                <div class="col-md-4 mb-3">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title text-primary"><?= esc($task['tasks']) ?></h5>

                            <p class="card-text"><?= esc($task['notizen']) ?></p>

                            <p class="card-text mb-4">
                                <small class="text-muted">
                                    <i class="bi bi-clock"></i>
                                    Erinnerung: <?= esc($task['erinnerungsdatum']) ?>
                                </small>
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-top-0 d-flex justify-content-between">
                            <a href="<?=('https://team03.wi1cm.uni-trier.de/public/task/edit/' . $task['id']) ?>" class="btn btn-outline-secondary btn-sm">
                                <i class="bi bi-pencil"></i> Bearbeiten
                            </a>
                            <a href="<?=('https://team03.wi1cm.uni-trier.de/public/task/delete/' . $task['id']) ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Möchten Sie diesen Task wirklich löschen?')">
                                <i class="bi bi-trash"></i> Löschen
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-12">
                <p class="alert alert-info">Keine Tasks in der Datenbank gefunden.</p>
            </div>
        <?php endif; ?>
    </div>
</div>