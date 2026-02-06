<div class="container mt-4">
    <div class="card shadow-sm">

        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Personen</h4>
                <div class="d-flex">
                    <form method="get" class="d-flex me-2">
                        <input
                                type="search"
                                name="search"
                                class="form-control form-control-sm"
                                placeholder="Suche Personen..."
                                value="<?= htmlspecialchars($_GET['search'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
                        >
                        <button type="submit" class="btn btn-outline-secondary btn-sm ms-1">
                            Suchen
                        </button>
                    </form>

                    <a href="/personen/create" class="btn btn-primary btn-sm">+ Neu anlegen</a>
                </div>
        </div>

        <div class="card-body">
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
