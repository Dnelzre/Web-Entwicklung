<?= $this->include('templates/head') ?>

<div class="container mt-5 mb-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="mb-0">Personen</h3>
                <div class="d-flex">
                    <input type="search" class="form-control form-control-sm me-2" placeholder="Suche Personen..." aria-label="Suche">
                    <a href="/personen/create" class="btn btn-primary btn-sm">Neu erstellen</a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th style="width:60px">ID</th>
                            <th>Vorname</th>
                            <th>Name</th>
                            <th>E-Mail</th>
                            <th style="width:120px">Aktionen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($personen) && is_array($personen)): ?>
                            <?php foreach ($personen as $person): ?>
                                <tr>
                                    <td><?= htmlspecialchars($person['id'] ?? '', ENT_QUOTES, 'UTF-8') ?></td>
                                    <td><?= htmlspecialchars($person['vorname'] ?? '', ENT_QUOTES, 'UTF-8') ?></td>
                                    <td><?= htmlspecialchars($person['name'] ?? '', ENT_QUOTES, 'UTF-8') ?></td>
                                    <td><a href="mailto:<?= htmlspecialchars($person['email'] ?? '', ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($person['email'] ?? '', ENT_QUOTES, 'UTF-8') ?></a></td>
                                    <td>
                                        <a href="/personen/edit/<?= rawurlencode($person['id'] ?? '') ?>" class="btn btn-sm btn-outline-secondary me-1" title="Bearbeiten"><i class="bi bi-pencil"></i></a>
                                        <a href="/personen/delete/<?= rawurlencode($person['id'] ?? '') ?>" class="btn btn-sm btn-outline-danger" title="Löschen" onclick="return confirm('Möchten Sie diese Person wirklich löschen?')"><i class="bi bi-trash"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" class="text-center">Keine Personen vorhanden.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
