<?php
    session_start();
    unset($_SESSION['username']);
    session_destroy();
    header("location: ../index.php");

    // setcookie("login");
    // header(login.php);
