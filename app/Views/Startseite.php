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
            background: #ffffff ;
            background: #f7f7f7;
        }
        .navbar-expand-lg{
            background: #002060;
            color: #fff;
        }
        footer{
            background:#002060;
            color: white;
            padding: 30px 0;
            font-size: 14px;
            padding-top: 50px;
        }
    </style>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
            <img src="public/assets/images/WeLogo.svg" width="40" height="40" alt="">
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
<header

</header>

<main
<div

</div>
</main>

<footer class="fixed-bottom" class="footer">
    <div class="container d-flex justify-content-between">
        <span>©Web-Entwicklung Team 03 </span>
        <span>Impressum  Datenschutz  Kontakt</span>
    </div>
</footer>

<script>
    document.getElementById("alertButton").addEventListener("click", () => {
        alert("Hallo! Dies ist eine JavaScript-Aktion.");
    });
</script>

</body>
</html>
