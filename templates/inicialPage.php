<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="templates/static/css/inicialPage.css">
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
    <link rel="icon" href="templates/static/img/header/logo.png">
    <title>Galery</title>
</head>
<body>

    <div class="container-fluid banner" id="nav-container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg">
                    <a href="#" class="navbar-brand">
                        <img id="logo" src="templates/static/img/header/logo.png" alt="logo gatito"> GG!
                    </a>

                    <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                        <div class="navbar-nav"> <!--Sugestivel a mudança-->
                            <a href="#" class="nav-item nav-link" id="home-menu"><i class="fa fa-house"></i>
                            </a>
                            <a href="admin/login.php" class="nav-item nav-link login" id="contact-menu"> Minha conta</a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-md-6 offset-md-3 info">
                    <h1 class="text-center main-title "><i class="fa fa-paw"></i> Galery Gatito</h1>
                    <a href="admin/login.php" class ="main-btn btn-md text-center">Entrar</a>
            </div>
        </div>
    </div>


    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

      <!-- Script -->
      <script src="js/scripts.js"></script>
    
</body>
</html>