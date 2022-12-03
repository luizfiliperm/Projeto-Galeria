<main>
    <link rel="stylesheet" href="templates/static/css/albuns.css">        
    <!--Cards-->   
        <div class="cards-area">
            <div class="container">
                <div class="col-12">
                    <h3 class="main-title">Meus Albuns</h3>
                </div>
                <?php 
                        $username = $_SESSION["username"];
                        $sql = "SELECT DISTINCT albumName FROM usersimage WHERE userIMG = '$username' ORDER BY dateImg DESC;";
                        $result = mysqli_query($conn, $sql);
                        $count = 0;
                        echo '<div class="row">';
                        while($row = mysqli_fetch_array($result)){
                            if($count == 4){
                                echo '<div class="row">';
                                $count = 0;
                            }
                            $albumName = $row['albumName'];
                            $url = "SELECT * FROM usersimage WHERE userIMG = '$username' AND albumname = '$albumName' ORDER BY dateImg DESC;";
                            $resultURL = mysqli_fetch_array(mysqli_query($conn, $url));
                                echo '
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="'.$resultURL["urlImg"].'" class="card-img-top"alt="">
                                            <div class="card-body">
                                                <a href="#" class="main-btn2"><h5 class="card-title"> '.$row["albumName"].'</h5></a>
                                                <p class="card-text"> '.$row["albumName"].' </p>
                                            </div>
                                        </div>
                                    </div>
                                ';
                            $count++;
                            if($count == 4){
                                echo '</div>';
                            }    
                        }                
                    ?>
                    
                <!--segunda linha-->
                <!-- <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <img src="templates/static/img/cards/quatro.jpg" class="card-img-top"alt="">
                            <div class="card-body">
                                <a href="#" class="main-btn2"><h5 class="card-title"> nahme</h5></a>
                                <p class="card-text"> nhame nhame </p>
                            
                            </div>
                        </div>
                    </div>  
                    <div class="col-md-3">    
                        <div class="card">
                            <img src="templates/static/img/cards/cinco.jpg" class="card-img-top"alt="">
                            <div class="card-body">
                                <a href="#" class="main-btn2"><h5 class="card-title"> nahme</h5></a>
                                <p class="card-text"> nhame nhame </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">    
                        <div class="card">
                            <img src="templates/static/img/cards/duas.jpg" class="card-img-top"alt="">
                            <div class="card-body">
                                <a href="#" class="main-btn2"><h5 class="card-title"> nahme</h5></a>
                                <p class="card-text"> nhame nhame </p>
                            </div>
                        </div>
                    </div>   
                    <div class="col-md-3"> 
                        <div class="card">
                            <img src="templates/static/img/cards/tres.jpg" class="card-img-top"alt="">
                            <div class="card-body">
                                <a href="#" class="main-btn2"><h5 class="card-title"> nahme</h5></a>
                                <p class="card-text"> nhame nhame </p>
                            </div>
                        </div>
                    </div>     
                </div> -->
            </div>
        </div>

       
    </main>
