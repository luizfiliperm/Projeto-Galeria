<?php
    
    include("admin/includes/config.inc.php");

    
    //require_once("admin/includes/validateCookie.inc.php");
    
    include_once("templates/header.php");

    if(empty($_SERVER["QUERY_STRING"])){
        $conteudo = "templates/mainContent.php";
        include_once("$conteudo");
    }else{
        $pg = $_GET["pg"];
        include_once("$pg.php");
    }

    include_once("templates/footer.php");
?>
