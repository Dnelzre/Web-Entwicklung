<h1>Personenübersicht</h1>

<table>
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
