<main>
    
    <link rel="stylesheet" href="templates/static/css/photos.css">
    <link rel="stylesheet" href="templates/static/lightbox/lightbox.min.css">
       <!--Fotinhas bonitinhas-->
        <div class="container container-fotos">
            <h1 class="main-title">Fotos</h1>
            <div class="row">
                <?php
                    // require_once("admin/includes/config.inc.php");

                    $username = $_SESSION["username"];
                    $sql = "SELECT * FROM usersimage WHERE userIMG = '$username' ORDER BY dateImg DESC;";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_array($result)){
                        echo('<div class="col-sm-12 col-md-6 col-lg-4">
                        <a href="'.$row["1"].'" data-lightbox="mygallery"><img class= "img-fluid mb-4 shadow rounded" src="'.$row["1"].'"></a>
                    </div>');
                    }                   
                ?>
            </div>
        </div>

        <div id="insert-photos">
            <div class="row">
                <div class="col-md-12">
                 <a href="admin/imageForm.php" class="main-btn" id="insert-btn">Inserir Fotos</a>
                </div>            
            </div>
        </div>
        

    </main>

<script src="templates/static/lightbox/lightbox-plus-jquery.min.js"></script>