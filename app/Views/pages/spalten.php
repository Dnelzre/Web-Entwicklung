<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Spalten</h4>

            <button
                    type="button"
                    class="btn btn-primary btn-sm rounded-pill px-3"
                    data-bs-toggle="modal"
                    data-bs-target="#spaltenCreateModal"
            >
                + Neu erstellen
            </button>

        </div>

        <div class="card-body">
            <?php if (session()->getFlashdata('errors')): ?>
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        <?php foreach (session()->getFlashdata('errors') as $error): ?>
                            <li><?= esc($error) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <table class="table table-bordered table-striped">
                <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Board</th>
                    <th>Sortid</th>
                    <th>Spalte</th>
                    <th>Spaltenbeschreibung</th>
                    <th>Aktionen</th>
                </tr>
                </thead>
                <tbody>
                <?php if (!empty($spalten)): ?>
                    <?php foreach ($spalten as $s): ?>
                        <tr>
                            <td><?= esc($s['id']) ?></td>
                            <td><?= esc($s['boardname']) ?></td> <td><?= esc($s['sortid']) ?></td>
                            <td><?= esc($s['spalte']) ?></td>
                            <td><?= esc($s['spaltenbeschreibung']) ?></td>
                            <td>
                                <a href="<?=('https://team03.wi1cm.uni-trier.de/public/spalten/edit/'.$s['id']) ?>" class="btn btn-sm btn-outline-primary me-2">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <a href="<?= ('https://team03.wi1cm.uni-trier.de/public/spalten/delete/'.$s['id']) ?>"
                                   class="btn btn-sm btn-outline-danger"
                                   onclick="return confirm('Möchten Sie diese Spalte wirklich löschen?')">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="6" class="text-center">Keine Spalten vorhanden.</td></tr>
                <?php endif; ?>
                </tbody>
            </table>
            <div class="modal fade" id="spaltenCreateModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Neue Spalte erstellen</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <?php $data['formAction'] = ('https://team03.wi1cm.uni-trier.de/public/spalten/submit'); ?>
                            <?= view('pages/_spalten_form', $data) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>