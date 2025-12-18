<?= $this->include('templates/head') ?>

<body>
<div class="container mt-5">
    <div class="border rounded p-3 bg-white shadow-sm">
        <h3 class="mb-4">Personen-Tabelle</h3>
        <hr>
        <table class="personen">
    <thead>
    <tr>
        <th>ID</th>
        <th>Vorname</th>
        <th>Name</th>
        <th>E-Mail</th>
        <th>Passwort</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($personen as $person): ?>
        <tr>
            <td><?= esc($person['id']) ?></td>
            <td><?= esc($person['vorname']) ?></td>
            <td><?= esc($person['name']) ?></td>
            <td><?= esc($person['email']) ?></td>
            <td><?= esc($person['passwort']) ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</body>
