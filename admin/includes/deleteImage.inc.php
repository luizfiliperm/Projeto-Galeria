<?php
    session_start();

    require_once("config.inc.php");
    $imageId = $_GET["id"];
    $sql = "DELETE FROM usersimage WHERE id = '$imageId';";

    $deleteResult = mysqli_query($conn, $sql);

    if($deleteResult ==  false){
        echo("<script>
        window.alert('Ocorreu Algum Erro! Tente Novamente!');
        window.location.href='../../index.php?pg=photos';
        </script>"
    );
    exit();
    }
    echo("<script>
        window.alert('Imagem Deletada com Sucesso!');
        window.location.href='../../index.php?pg=templates/photos&album=none';
        </script>"
    );
    exit();
