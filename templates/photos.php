<main>
    
    <link rel="stylesheet" href="templates/static/css/photos.css">
    <link rel="stylesheet" href="templates/static/lightbox/lightbox.min.css">
       <!--Fotinhas bonitinhas-->
        <div class="container container-fotos">

            

            <?php
                $searchAlbum = $_GET["album"];
                $username = $_SESSION["username"];

                if($searchAlbum  == "none"){
                    $sql = "SELECT * FROM usersimage WHERE userIMG = '$username' ORDER BY dateImg DESC;";
                    echo('<h1 class="main-title">Fotos</h1>');
                }else{
                    $sql = "SELECT * FROM usersimage WHERE userIMG = '$username' AND albumName = '$searchAlbum' ORDER BY dateImg DESC;";
                    echo('<h1 class="main-title">'.$searchAlbum.'</h1>');
                }
            ?>
              <div id="insert-photos">
            <div class="row">
                <div class="col-md-12">
                 <a href="admin/imageForm.php" class="main-btn" id="insert-btn">Inserir Fotos</a>
                </div>            
            </div>
        </div>
            <div class="row">


                <?php
                    // require_once("admin/includes/config.inc.php");
                    $result = mysqli_query($conn, $sql);

                    while($row = mysqli_fetch_array($result)){
                        echo('<div class="col-sm-12 col-md-6 col-lg-4">
                        <a href = ""><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href = "admin/includes/deleteImage.inc.php?id='.$row["id"].'"><i class="fa-solid fa-trash"></i></a>
                        <a href="'.$row["urlImg"].'" data-lightbox="mygallery"><img class= "img-fluid mb-4 shadow rounded" src="'.$row["urlImg"].'"></a>
                        </div>');
                    }                   
                ?>
            </div>
        </div>

        
        

    </main>

<script src="templates/static/lightbox/lightbox-plus-jquery.min.js"></script>