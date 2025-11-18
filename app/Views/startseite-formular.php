
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Formulare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://team03.wi1cm.uni-trier.de/public/assets/css/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg  navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="./assets/images/WeLogo.svg" width="175" height="75" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Tasks <span </span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Boards</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Startseite_Spalten">Spalten</a>
                </li>
            </ul>
        </div>
    </nav>

</body>

    <div class="container mt-5">
        <div class="border rounded p-3 bg-white shadow-sm">
            <h2 class="mb-4">Spalte Erstellen</h2>
            <hr>
            <form>
                <div class="mb-3">
                    <label for="spaltenbezeichnung" class="form-label">Spaltenbezeichnung</label>
                    <input type="text" class="form-control" id="spaltenbezeichnung" placeholder="Bezeichung für die Spalte"">
                </div>

                <div class="mb-3">
                    <label for="spaltenbeschreibung" class="form-label">Spaltenbeschreibung</label>
                    <textarea class="form-control" id="spaltenbeschreibung" rows="2" placeholder=""></textarea>
                </div>


                <div class="mb-3">
                    <label for="sortid" class="form-label">Sortid</label>
                    <input type="text" class="form-control" id="sortid" placeholder="">
                </div>


                <div class="mb-3">
                    <label for="board" class="form-label">Board auswählen</label>
                    <select class="form-select" id="board">
                        <option selected>Board wählen...</option>
                        <option value="1">Allgemeine Todos</option>
                        <option value="2">In Bearbeitung</option>
                    </select>
                </div>


                <button type="submit" class="btn btn-success me-2">Speichern</button>
                <button type="reset" class="btn btn-secondary">Abbrechen</button>
            </form>
        </div>

        </div>
    </div>

<main>

</main>

<footer class="fixed-bottom" class="footer">
    <div class="container d-flex justify-content-between">
        <span>©Web-Entwicklung Team 03 </span>
        <span><a href="#">Impressum</a> | <a href="#">Datenschutz</a> | <a href="#">Kontakt</a></span>
    </div>
</footer>



</body>
</html>
