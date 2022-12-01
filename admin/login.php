
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../templates/static/css/login.css">
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
                            <h4 class="main-title"><i class="fa fa-paw"></i> Galery Gatito</h4>
                        <form action="includes/login.inc.php" method="POST" id ="contact-form">
                            <h5 class="login"> <i class="fa fa-user"></i> Username:</h5>
                            <input type="text" class="form-control" name = "username" placeholder="username">
                            <h5 class="login"><i class="fa fa-lock"></i> Password:</h5>
                            <input type="password" class="form-control" name = "pwd" placeholder="******">
                            <button class="main-btn" id="apply-btn" name = "submit">Sign Up</button>
                        </form>
                            <a class="register" href="register.php">Sign in</a>
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