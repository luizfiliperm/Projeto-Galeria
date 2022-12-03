<?php
    require_once("admin/includes/config.inc.php");
    $username = $_SESSION["username"];

    $sql = "SELECT * FROM usersprofile WHERE username = '$username';";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $urlImg = $row["profilePhoto"];
    $bio = $row["bio"];
?>


<main>
    <link rel="stylesheet" href="templates/static/css/profile.css">  

    <!--Cards / albuns-->   
    <div class="cards-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="main-title"><?php echo $username;?></h3>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            
                            <img src="<?php echo $urlImg?>" class="card-img-top"alt="">
                            <div class="card-body">
                                
                                <p class="card-text">  <?php echo $bio;?> </p>



                                <a href = "admin/userProfile.php" class="profile-text">configurações do perfil</a>
                            </div>
                        </div>
                    </div>  
                    
                </div>
            </div>
        </div>


        <div id="portifolio-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="main-title"><i class="fas fa-camera"></i> Fotos Recentes</h3>
                    </div>
                        <?php                      
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
 </main>
 
   
</main>