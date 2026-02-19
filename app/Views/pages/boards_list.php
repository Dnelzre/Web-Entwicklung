<?= $this->include('templates/head') ?>

<div class="container mt-4">
    <div class="card shadow-sm">

        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Board</h4>
            <a href="https://team03.wi1cm.uni-trier.de/public/boards/create" class="btn btn-primary btn-sm rounded-pill px-3">+ Neu erstellen</a>
        </div>

        <div class="card-body">

        <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= htmlspecialchars(session()->getFlashdata('success'), ENT_QUOTES, 'UTF-8') ?></div>
    <?php endif; ?>
    <?php if ($errs = session()->getFlashdata('errors')): ?>
        <div class="alert alert-danger">
            <ul class="mb-0">
                <?php foreach ((array)$errs as $e): ?>
                    <li><?= htmlspecialchars($e, ENT_QUOTES, 'UTF-8') ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

    <?php endif; ?>

    <?php if (!empty($boards) && is_array($boards)): ?>
                <table class="table table-bordered table-striped">
                    <thead class="table-light">
                        <tr>
                            <th style="width:10%">ID</th>
                            <th>Bezeichnung</th>
                            <th style="width:10%">Aktionen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($boards as $b): ?>
                            <tr>
                                <td><?= htmlspecialchars($b['id'] ?? $b->id, ENT_QUOTES, 'UTF-8') ?></td>
                                <td><?= htmlspecialchars($b['name'] ?? $b->name, ENT_QUOTES, 'UTF-8') ?></td>
                                <td>
                                    <a href="https://team03.wi1cm.uni-trier.de/public/boards/edit/<?= rawurlencode($b['id'] ?? $b->id) ?>" class="btn btn-sm btn-outline-secondary" title="Bearbeiten"><i class="bi bi-pencil"></i></a>
                                    <a href="https://team03.wi1cm.uni-trier.de/public/boards/delete/<?= rawurlencode($b['id'] ?? $b->id) ?>" class="btn btn-sm btn-outline-danger" title="Löschen" onclick="return confirm('Board wirklich löschen?')"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
    <?php else: ?>
        <div class="alert alert-info">Keine Boards vorhanden.</div>
    <?php endif; ?>

        </div>
    </div>
</div>
