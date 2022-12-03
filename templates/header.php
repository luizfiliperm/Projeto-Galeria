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
        <a href="?pg=templates/mainContent" class="navbar-brand">
            <img id="logo" src="templates/static/img/header/logo.png" alt="logo gatito"> GG!
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="toggle navigation">
            <span class="navbar-toggler-icon">
            </span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
            <div class="navbar-nav"> <!--Sugestivel a mudança-->
                <?php if($_SESSION["username"] == "admin"){?>
                    <a href="admin/logout.php" class="nav-item nav-link login" id="contact-menu"><i class="fa fa-user"></i> <?php echo "Bem vindos, adminisnatores!";?></a>
                    <?php }?>
                <a href="?pg=templates/mainContent" class="nav-item nav-link" id="home-menu"><i class="fa fa-house"></i></a>
                <a href="?pg=templates/photos" class="nav-item nav-link" id="photos-menu"><i class="fa fa-image"></i> Fotos</a>
                <a href="?pg=templates/albuns"class="nav-item nav-link" id="album-menu"><i class="fa fa-images"></i> Album</a>
                <a href="?pg=templates/sobreNos"class="nav-item nav-link" id="about-menu"><i class="fa fa-user-group"></i> Sobre nos</a>
                <a href="admin/logout.php" class="nav-item nav-link login" id="contact-menu"><i class="fa fa-user"></i> <?php echo $_SESSION["username"];?></a>
            </div>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Conta
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item " href="#">Alguma ação</a>
                    </div>
            </div>
        </div>
    </nav>
</div>

</header>

