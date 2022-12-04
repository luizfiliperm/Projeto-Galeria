<?php
    session_start();
    include_once("includes/config.inc.php");
    $user = $_SESSION["username"];
    $sql = "SELECT * FROM usersprofile WHERE username = '$user';";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if($count > 0){
        $row = mysqli_fetch_array($result);
        $bio = $row["bio"];
        $profilePhoto = $row["profilePhoto"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../templates/static/css/formProfile.css">
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
                            <h4 class="main-title"><i class="fa fa-paw"></i> Perfil</h4>
                        <form action="includes/profile.inc.php" method="POST" id ="contact-form">
                            <h5 class="login"><i class="fa fa-lock"></i> Username:</h5>
                            <input type="text" class="form-control" rows="3" placeholder="username" name="username" value = "<?php echo $user; ?>"></input>
                            <h5 class="login"> <i class="fa fa-user"></i> Foto de Perfil(url):</h5>
                            <input type="text" class="form-control" name = "profilePhoto" placeholder="url" value = "<?php if(isset($row)){
                                echo $profilePhoto;
                            } ?>">
                            <h5 class="login"><i class="fa fa-lock"></i> Biografia:</h5>
                            <input type="text" class="form-control" rows="3" placeholder="Bio" name="bio" value = "<?php if(isset($row)){
                                echo $bio;
                            }?>"></input>
                            <button class="main-btn" id="apply-btn" name = "submit">Confirmar</button>
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