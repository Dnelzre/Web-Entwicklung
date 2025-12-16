<div class="container mt-4">
    <h1>Personen Übersicht</h1>

    <?php if (!empty($personen)): ?>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Vorname</th>
                <th>Nachname</th>
                <th>Email</th>
                <th>Telefon</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($personen as $person): ?>
                <tr>
                    <td><?= esc($person['id']) ?></td>
                    <td><?= esc($person['vorname']) ?></td>
                    <td><?= esc($person['nachname']) ?></td>
                    <td><?= esc($person['email']) ?></td>
                    <td><?= esc($person['telefon']) ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="alert alert-info">
            Keine Personen in der Datenbank gefunden.
        </div>
    <?php endif; ?>
</div>