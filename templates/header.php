<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="templates/static/css/header.css">
    <!--fonte-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/de140a3406.js" crossorigin="anonymous"></script>
    <!--progress bar-->
    <script src="js/progressbar.min.js"></script>
    <!--Parallax-->
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
    <title>Galery</title>
    <link rel="icon" href="templates/static/img/header/logo.png">
</head>
<body>

<header>

<!--Navbar-->
<div class="container" id="nav-container">
    <nav class="navbar navbar-expand-lg fixed-top">
        <a href="#" class="navbar-brand">
            <img id="logo" src="templates/static/img/header/logo.png" alt="logo gatito"> GG!
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="toggle navigation">
            <span class="navbar-toggler-icon">
            </span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
            <div class="navbar-nav"> <!--Sugestivel a mudança-->
                <a href="?pg=templates/mainContent" class="nav-item nav-link" id="home-menu">Home</a>
                <a href="?pg=templates/fotos" class="nav-item nav-link" id="photos-menu">Fotos</a>
                <a href="?pg=templates/album"class="nav-item nav-link" id="album-menu">Album</a>
                <a href="?pg=templates/sobreNos"class="nav-item nav-link" id="about-menu">Sobre nos</a>
                <a href="#" class="nav-item nav-link login" id="contact-menu">Minha conta</a>
            </div>
        </div>
    </nav>
</div>

</header>

