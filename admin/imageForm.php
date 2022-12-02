<?php
    session_start();
    include_once("includes/config.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../templates/static/css/imageForm.css">
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
    <link rel="icon" href="../templates/static/img/header/logo.png">

</head>

<body class="corpo">

    <div id="apply-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 apply-box" id="company-img">
                        <div class="col-md-1">    
                            <a class="icon" href="../index.php"><i class="fa fa-arrow-left"></i></a>
                        </div>
                    </div>
                        <div class="col-md-6 apply-box" id="patern-img">
                            <h5 class="main-title" id ="cont-register"><i class="fa fa-paw"></i> Cadastro de fotos</h5>
                        <form action="includes/image.inc.php" method="POST" id ="contact-form">
                            <h5 class="login"> <i class="fa fa-paperclip"></i> Url da imagem:</h5>
                            <input type="text" class="form-control" name = "url" placeholder="url">
                            <h5 class="login"><i class="fa fa-image"></i> Nome do Album:</h5>
                            <input type="text" class="form-control" name = "albumName" placeholder="Nome do Album">
                            <h5 class="login"><i class="fa fa-calendar-days"></i> Data:</h5>
                            <input type="date" class="form-control" name = "date" value="00-00-0000" min="0000-00-00" max="2022-12-31">
                            <button class="main-btn" id="apply-btn" name = "submit"><i class="fa fa-arrow-up-from-bracket" ></i> Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


 <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>