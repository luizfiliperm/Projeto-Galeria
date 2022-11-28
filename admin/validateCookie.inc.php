<?php
    if(isset($_COOKIE['login'])){
        $login = $_COOKIE['login'];
    }

    if(isset($_COOKIE['password'])){
        $password = $_COOKIE['senha'];
    }

    if(empty($login) or empty($password)){
        setcookie("login");
        setcookie("password");
        echo("Login não efetuado!");
        echo "<a href='admin/login.php'>";
    }

?>