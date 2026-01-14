<?= $this->include('templates/head') ?>

<div class="container mt-4">
    <h2>Aufgabenübersicht</h2>
    <div class="row">
        <?php if (!empty($tasks) && is_array($tasks)): ?>
            <?php foreach ($tasks as $task): ?>
                <div class="col-md-4 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><?= esc($task['tasks']) ?></h5>

                            <p class="card-text">
                                <small class="text-muted">
                                    Erinnerung: <?= esc($task['erinnerungsdatum'] ?? 'Kein Datum') ?>
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Keine Tasks gefunden.</p>
        <?php endif; ?>

    </div>
</div>