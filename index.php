<?php

    include("admin/config.inc.php");

    $msgSucess = 0;
    
    //require_once("admin/validateCookie.inc.php");
    include_once("templates/header.php");

    if(empty($_SERVER["QUERY_STRING"])){
        $conteudo = "templates/mainContent.php";
        include_once("$conteudo");
    }else{
        $pg = $_GET["pg"];
        include_once("$pg.php");
    }

    include_once("templates/footer.php");

    if(!$msgSucess){

    }else if($msgSucess == 1){
        echo("<script>
            window.alert('Mensagem Enviada com Sucesso!');
            </script>"
    );
        
    }else if($msgSucess == 2){
        echo("<script>
            window.alert('Ocorreu algum erro, por favor tente novamente!');
            </script>"
    );
    }
?>
