<?php

    if(isset($_POST['submit'])){

        $username = $_POST["username"];
        $usersPwd = $_POST["pwd"];

        require_once 'config.inc.php';
        require_once 'functions.inc.php';

        if(emptyInputLogin($username, $usersPwd) !== false){
            // header("location: ../register.php?error=emptyinput");
            echo("<script>
                window.alert('Por favor, Preencha todos os campos!');
                window.location.href='../login.php';
            </script>"
        );
        exit();
        }
        loginUser($conn, $username, $usersPwd);

    }else{
        header("location: ../login.php");
        exit();
    }
    
