<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Startseite</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/assets/css/stylesheet.css">
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
                <a class="nav-link" href="Startseite.php">Tasks</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Boards</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="/Startseite_Spalten">Spalten</a>
            </li>
        </ul>
    </div>
    </nav>

    <div class="container mt-4">
        <div class="border rounded p-3 bg-white shadow-sm">
            <h5 class="mb-1">Tasks (container)</h5>
            <hr>

        <div class="row justify-content-center">
            <div class="col-sm-2 mb-1 mb-sm-0 mt-4">
                <div class="card w-30">
                    <div class="card-body">
                        <h5 class="card-title">Task</h5>
                        <p class="card-text">Test</p>
                        <a href="#" class="btn btn-primary">Erledigt</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-2 mt-4">
                <div class="card w-30">
                    <div class="card-body">
                        <h5 class="card-title">Task</h5>
                        <p class="card-text">Test</p>
                        <a href="#" class="btn btn-primary">Erledigt</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-2 mt-4">
                <div class="card w-30">
                    <div class="card-body">
                        <h5 class="card-title">Task</h5>
                        <p class="card-text">Test</p>
                        <a href="#" class="btn btn-primary">Erledigt</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-2 mt-4">
                <div class="card w-30">
                    <div class="card-body">
                        <h5 class="card-title">Task</h5>
                        <p class="card-text">Test</p>
                        <a href="#" class="btn btn-primary">Erledigt</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-2 mt-4">
                <div class="card w-30">
                    <div class="card-body">
                        <h5 class="card-title">Task</h5>
                        <p class="card-text">Test</p>
                        <a href="#" class="btn btn-primary">Erledigt</a>
                    </div>
                </div>
            </div>
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

<script>
    document.getElementById("alertButton").addEventListener("click", () => {
        alert("Hallo! Dies ist eine JavaScript-Aktion.");
    });
</script>

</body>
</html>
