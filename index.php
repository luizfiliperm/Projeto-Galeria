<?php
    include("admin/config.inc.php");

    // require_once("admin/validateCookie.inc.php");
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
