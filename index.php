<?php
    session_start();
    
    include_once("admin/includes/config.inc.php");

    if(isset($_SESSION["username"])){
        include_once("templates/header.php");

        if(empty($_SERVER["QUERY_STRING"])){
            $conteudo = "templates/mainContent.php";
            include_once("$conteudo");
        }else{
            $pg = $_GET["pg"];
            include_once("$pg.php");
        }
        include_once("templates/footer.php");
    }
    else{
        include_once("templates/inicialPage.php");
    }
    
    //require_once("admin/includes/validateCookie.inc.php");
    
    
?>
