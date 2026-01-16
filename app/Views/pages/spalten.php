<?= $this->include('templates/head') ?>

<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-white">
            <h2 class="mb-1">Spalten</h2>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <!-- Button öffnet Modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#spaltenCreateModal">Erstellen</button>
            </div>

            <table class="table table-bordered table-striped">
                <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Board</th>
                    <th>Sortid</th>
                    <th>Spalte</th>
                    <th>Spaltenbeschreibung</th>
                    <th>Bearbeiten</th>
                </tr>
                </thead>

                <tbody>
                <?php if (!empty($spalten) && is_array($spalten)): ?>
                    <?php foreach ($spalten as $s): ?>
                        <tr>
                            <td><?= htmlspecialchars($s['id'] ?? '', ENT_QUOTES, 'UTF-8') ?></td>
                            <td><?= htmlspecialchars($s['boardsid'] ?? '', ENT_QUOTES, 'UTF-8') ?></td>
                            <td><?= htmlspecialchars($s['sortid'] ?? '', ENT_QUOTES, 'UTF-8') ?></td>
                            <td><?= htmlspecialchars($s['spalte'] ?? '', ENT_QUOTES, 'UTF-8') ?></td>
                            <td><?= htmlspecialchars($s['spaltenbeschreibung'] ?? '', ENT_QUOTES, 'UTF-8') ?></td>
                            <td>
                                <a href="#" class="text-primary me-2"><i class="bi bi-pencil"></i></a>
                                <a href="#" class="text-danger"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">Keine Spalten vorhanden.</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<!-- Modal für Spalten-Erstellung -->
<div class="modal fade" id="spaltenCreateModal" tabindex="-1" aria-labelledby="spaltenCreateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="spaltenCreateModalLabel">Neue Spalte erstellen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?= $this->include('pages/_spalten_form') ?>
            </div>
        </div>
    </div>
</div>
