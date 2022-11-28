<?php

$login = $_POST['user'];
$passowrd = $_POST['password'];

if($login != "admin" && $passowrd != "password"){
    echo "<script language='javascript' type='text/javascript'>
    alert('Usuário ou senha Inválidos. Tente novamente.');
    window.location.href='login.php'";
}else{
    setcookie("login", $login);
    setcookie("password",$passowrd);
    header("../index.php");
}


?>