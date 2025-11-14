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
    </style>
</head>
<body>
<header class="hero">
    <h1 class="display-4 fw-bold">Willkommen</h1>
    <p class="lead">Eine einfache Beispielseite mit HTML, CSS und JavaScript</p>
    <button class="btn btn-light btn-lg" id="alertButton">Klick mich</button>
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

<footer class="text-center py-4 text-muted">
    <p>&copy; 2025 Beispielseite</p>
</footer>

<script>
    document.getElementById("alertButton").addEventListener("click", () => {
        alert("Hallo! Dies ist eine JavaScript-Aktion.");
    });
</script>
</body>
</html>
