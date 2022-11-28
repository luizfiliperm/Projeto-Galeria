<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="templates/static/css/menu.css">
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
</head>
<body>

   <header>
    <div class="container" id="nav-container">
        <nav class="navbar navbar-expand-lg fixed-top">
            <a href="#" class="navbar-brand">
                <img id="logo" src="templates/static/img/menu/gatito.jpg" alt="logo gatito"> Galery Gatito
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="toggle navigation">
                <span class="navbar-toggler-icon">
                </span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                <div class="navbar-nav"> <!--Sugestivel a mudança-->
                    <a class="nav-item nav-link" id="home-menu">Home</a>
                    <a class="nav-item nav-link" id="photos-menu">fotos</a>
                    <a class="nav-item nav-link" id="album-menu">album</a>
                    <a class="nav-item nav-link" id="about-menu">Sobre nos</a>
                    <a class="nav-item nav-link" id="contact-menu">contato</a>
                </div>
            </div>
        </nav>
    </div>
   </header>

    <main>
        <div class="container-fluid">
            <div id="mainSlider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#mainSlider" data-slide-to="1"></li>
                    <li data-target="#mainSlider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="templates/static/img/menu/uma.jpg" class="d-block w-100"alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Fotinhas de gatos fofinhos aq!</h2>
                            <p>meow meow meow</p>
                            <a href="#" class="main-btn">gatinho</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="templates/static/img/menu/duas.jpg" class="d-block w-100"alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Bla bla bla</h2>
                            <p>meow meow meow</p>
                            <a href="#" class="main-btn">gatinho</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="templates/static/img/menu/tres.jpg" class="d-block w-100"alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Pipipipopopo</h2>
                            <p>meow meow meow</p>
                            <a href="#" class="main-btn">gatinho</a>
                        </div>
                    </div>
                </div>
                
                <a href="#mainSlider" class="carousel-control-prev" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a href="#mainSlider" class="carousel-control-next" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </main>
   



    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Script -->
    <script src="templates/static/js/scripts.js"></script>
