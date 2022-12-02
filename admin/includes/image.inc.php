<?php
    
    if(isset($_POST["submit"])){
        session_start();
        $urlImg = $_POST["url"];
        $albumName = $_POST["albumName"];
        $dateImg = $_POST["date"];
        $userImg = $_SESSION["username"];
        
        require_once("config.inc.php");
        require_once("functions.inc.php");
        
        if(emptyImgForm($urlImg, $albumName, $dateImg) !== false){
            echo("<script>
                window.alert('Por favor, Preencha todos os campos!');
                window.location.href='../imageForm.php';
            </script>"
        );
        exit();
        }

        $sql = "INSERT INTO usersimage (urlImg ,albumName, dateImg, userIMG) VALUES ('$urlImg' ,'$albumName', '$dateImg', '$userImg');";

        $stmt = $stmt = $conn->prepare($sql);

        if(!$stmt){
            echo("<script>
                    window.alert('Falha ao enviar formulario. Favor tentar novamente!');
                    window.location.href='../imageForm.php';
                </script>"
        );
        exit();
        }
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        echo("<script>
                window.alert('Imagem adcionada com sucesso!');
                window.location.href='../imageForm.php';
            </script>"
    );
    exit();
    }else{
        echo ("Algo deu errado!");    
    }
       
       
       
       