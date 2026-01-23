<?= $this->include('templates/head') ?>

<?php
$session = session();
$errors = $session->getFlashdata('errors') ?? [];
$old = $session->getFlashdata('_ci_old_input') ?? [];
$board = $board ?? null;
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="mb-0"><?= $board ? 'Board bearbeiten' : 'Neues Board anlegen' ?></h4>
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

                    <form action="<?= $board ? ('https://team03.wi1cm.uni-trier.de/public/boards/edit/' . rawurlencode($board['id'] ?? $board->id)) : 'https://team03.wi1cm.uni-trier.de/public/boards/submit' ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="mb-3 form-floating">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Bezeichnung" required value="<?= htmlspecialchars($old['name'] ?? ($board['name'] ?? ($board->name ?? '')), ENT_QUOTES, 'UTF-8') ?>">
                            <label for="name">Bezeichnung <span class="text-danger">*</span></label>
                        </div>

                        <!-- Beschreibung entfernt: DB-Table enthält nur id und name -->

                        <div class="d-flex justify-content-end">
                            <a href="https://team03.wi1cm.uni-trier.de/public/boards" class="btn btn-secondary btn-sm me-2">Abbrechen</a>
                            <button type="submit" class="btn btn-primary btn-sm"><?= $board ? 'Aktualisieren' : 'Speichern' ?></button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
