<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>spalten</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://team03.wi1cm.uni-trier.de/public/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
            <img src="./assets/images/WeLogo.svg" width="175" height="75" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Tasks<a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Boards</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Spalten</a>
                </li>
            </ul>
        </div>
    </nav>

</head>
    <div class="container mt-5">
    <div class="border rounded p-3 bg-white shadow-sm">
    <h2 class="mb-4">Spalten</h2>
        <hr>
        <a href="/startseite-formular" class="btn btn-primary mb-3">Erstellen</a>
    <table class="table table-striped table-bordered">
        <tr>
            <th>ID</th>
            <th>Board</th>
            <th>Sortid</th>
            <th>Spalte</th>
            <th>Spaltenbeschreibung</th>
            <th>Bearbeiten</th>
        </tr>
        <tbody>
        <tr>
            <td>1</td>
            <td>Allgemeine Todos</td>
            <td>100</td>
            <td>Zu besprechen</td>
            <td>Noch zu besprechende Todos</td>
            <td>
                <a href="#" class="text-primary me-2"><i class="fas fa-edit"></i></a>
                <a href="#" class="text-primary me-2"><i class="fa-solid fa-trash"></i></a>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Allgemeine Todos</td>
            <td>200</td>
            <td>In Bearbeitung</td>
            <td>Todos die akutell bearbeitet werden</td>
            <td>
                <a href="#" class="text-primary me-2"><i class="fas fa-edit"></i></a>
                <a href="#" class="text-primary me-2"><i class="fa-solid fa-trash"></i></a>
            </td>
        </tr>
        </tbody>
    </table>
    </div>
</div>

<footer class="fixed-bottom" class="footer">
    <div class="container d-flex justify-content-between">
        <span>©Web-Entwicklung Team 03 </span>
        <span><a href="#">Impressum</a> | <a href="#">Datenschutz</a> | <a href="#">Kontakt</a></span>
    </div>
</footer>

</body>
</html>
