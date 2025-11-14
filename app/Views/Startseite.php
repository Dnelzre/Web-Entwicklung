<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap Beispielseite</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

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
    <h1 class="display-4 fw-bold">Willkommen auf meiner Bootstrap Seite</h1>
    <p class="lead">Eine einfache Beispielseite mit HTML, CSS und JavaScript</p>
    <button class="btn btn-light btn-lg" id="alertButton">Klick mich</button>
</header>

<main class="container py-5">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Feature 1</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Feature 2</h5>
                    <p class="card-text">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Feature 3</h5>
                    <p class="card-text">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
                </div>
            </div>
        </div>
    </div>
</main>

<footer class="text-center py-4 text-muted">
    <p>&copy; 2025 Beispielseite</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.getElementById("alertButton").addEventListener("click", () => {
        alert("Hallo! Dies ist eine JavaScript-Aktion.");
    });
</script>
</body>
</html>
