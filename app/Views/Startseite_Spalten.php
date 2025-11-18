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
            <img src="./assets/images/WeLogo.svg" width="150" height="50" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="Startseite.php">Tasks</a>
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


<div class="container mt-5">
    <h2 class="mb-4">Meine Tabelle</h2>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
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
        <!-- zeilen -->
        <tr>
            <td>1</td>
            <td>Allgemeine Todos</td>
            <td>100</td>
            <td>Zu besprechen</td>
            <td>Noch zu besprechende Todos</td>
            <td>
                <a href="#" class="btn btn-sm btn-primary">Bearbeiten</a>
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
                <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr>
        </tbody>
    </table>
</div>

<footer class="fixed-bottom" class="footer">
    <div class="container d-flex justify-content-between">
        <span>©Web-Entwicklung Team 03 </span>
        <span><a href="#">Impressum</a> | <a href="#">Datenschutz</a> | <a href="#">Kontakt</a></span>
    </div>
</footer>

<script>
    document.getElementById("alertButton").addEventListener("click", () => {
        alert("Hallo! Dies ist eine JavaScript-Aktion.");
    });
</script>

</body>
</html>
