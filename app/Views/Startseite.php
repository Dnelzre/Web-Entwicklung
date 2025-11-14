<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap Beispielseite</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background: #f7f7f7;
        }
        .hero {
            padding: 4rem 0;
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            color: #fff;
            text-align: center;
        }
        .navbar-expand-lg{
            background: #002060;
        }
    </style>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
            <img src="public/assets/images/WeLogo.svg" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>
</head>
<body>
<header class="hero">
    <h1 class="display-4 fw-bold">Willkommen</h1>
    <p class="lead">Beispielseite mit HTML, CSS und JavaScript</p>
    <button class="btn btn-light btn-lg" id="alertButton">Klicken</button>
</header>

<main
<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
</main>

<footer>
    <div class="rechts">
        <span>©Web-Entwicklung Team 03</span>
    </div>

    <div class="links">
        <span>Impressum</span>
        <span>Datenschutz</span>
        <span>Kontakt</span>
    </div>
</footer>

<script>
    document.getElementById("alertButton").addEventListener("click", () => {
        alert("Hallo! Dies ist eine JavaScript-Aktion.");
    });
</script>
</body>
</html>
