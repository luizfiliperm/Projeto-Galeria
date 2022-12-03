<main >
    <link rel="stylesheet" href="templates/static/css/mainContent.css">
       <!--slider-->
            <div id="mainSlider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#mainSlider" data-slide-to="1"></li>
                    <li data-target="#mainSlider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <?php
                        require_once("admin/includes/config.inc.php");
                        $username = $_SESSION["username"];
                        $sql = "SELECT * FROM usersimage WHERE userImg = '$username' ORDER BY dateImg DESC LIMIT 3;";
                        $result = mysqli_query($conn, $sql);
                        $count = 0;
                            while($row = mysqli_fetch_array($result)){
                                $url = $row["urlImg"];
                                if($count == 0){
                                    echo'<div class="carousel-item active">';
                                }else{
                                    echo'<div class="carousel-item">';
                                }
                                echo'
                                    <img src="'.$url.'" class="d-block w-100"alt="">
                                </div>';
                                $count++;
                            }
                    ?>
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

        <!--Cards-->   
            <div class="cards-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title"><i class="fa fa-images"></i> Albuns</h3>
                        </div>
                        <?php
                            $username = $_SESSION["username"];
                            $sql = "SELECT DISTINCT albumName FROM usersimage WHERE userIMG = '$username' ORDER BY dateImg DESC LIMIT 4;";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_array($result)){
                                $albumName = $row['albumName'];
                                $url = "SELECT * FROM usersimage WHERE userIMG = '$username' AND albumname = '$albumName' ORDER BY dateImg DESC;";
                                $resultURL = mysqli_fetch_array(mysqli_query($conn, $url));
                                    echo '
                                        <div class="col-md-3">
                                            <div class="card">
                                                <img src="'.$resultURL["urlImg"].'" class="card-img-top"alt="">
                                                <div class="card-body">
                                                    <a href="?pg=templates/photos&album='.$row["albumName"].'" class="main-btn2"><h5 class="card-title"> '.$row["albumName"].'</h5></a>
                                                </div>
                                            </div>
                                        </div>  
                                    ';
                            }    
                        ?>
                        <!-- <div class="col-md-3">
                            <div class="card">
                                <img src="templates/static/img/cards/dog.png" class="card-img-top"alt="">
                                <div class="card-body">
                                    <a href="#" class="main-btn2"><h5 class="card-title"> Cachorros</h5></a>
                                </div>
                            </div>
                        </div>   -->
                        <!-- <div class="col-md-3">    
                            <div class="card">
                                <img src="templates/static/img/cards/gatoo.png"alt="">
                                <div class="card-body">
                                    <a href="#" class="main-btn2"><h5 class="card-title"> Gatos</h5></a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">    
                            <div class="card">
                                <img src="templates/static/img/sobreNos/nylon.png" class="card-img-top"alt="">
                                <div class="card-body">
                                    <a href="#" class="main-btn2"><h5 class="card-title"> Nylons</h5></a>
                                    
                                </div>
                            </div>
                        </div>   
                           -->
                    </div>
                </div>
            </div>

        <!--filtro de fotos -->
            <div id="portifolio-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="main-title"><i class="fas fa-camera"></i> Fotos Recentes</h3>
                        </div>
                        <?php 
                            $username = $_SESSION["username"];                       
                            $sql = "SELECT * FROM usersimage WHERE userIMG = '$username' ORDER BY dateImg DESC LIMIT 6;";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_array($result)){
                                echo('<div class="col-md-4 project-box dev">
                                        <img src="'.$row["urlImg"].'" class="img-fluid" alt="">
                                    </div>');
                            }       

                        ?>
                        </div>
                    </div>
                </div>
            </div>

        <!--Trabalhe conosco-->
        <div id="apply-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 apply-box" id="company-img"></div>
                    <div class="col-md-6 apply-box" id="patern-img">
                        <h4> <i class="fa fa-paw"></i> GATITOS GALERY!</h4>
                        <P>Galeria feita para pessoas que amam guardar recordações</P>
                        <P>o melhor jeito de armazenar sua fotos sem perder <br>qualidade e sem risco de suas fotos sumirem do nada</P>
                        <P>e o melhor! aqui tem gatinhos</P>
                    </div>
                </div>
            </div>
        </div>

    </main>
<!-- <span><a href="?pg=admin/logout">Sair</a></span> -->