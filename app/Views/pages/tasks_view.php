<?= $this->include('templates/head') ?>

<div class="container mt-4">
    <h2>Aufgabenübersicht</h2>
    <div class="row">
        <?php if (!empty($tasks) && is_array($tasks)): ?>
            <?php foreach ($tasks as $task): ?>
                <div class="col-md-4 mb-3">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title text-primary"><?= esc($task['tasks']) ?></h5>

                            <p class="card-text"><?= esc($task['notizen']) ?></p>

                            <p class="card-text">
                                <small class="text-muted">
                                    <i class="bi bi-clock"></i>
                                    Erinnerung: <?= esc($task['erinnerungsdatum']) ?>
                                </small>
                            </p>
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