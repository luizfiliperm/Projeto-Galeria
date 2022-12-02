<?php

    if(isset($_POST["submit"])){
        
        $username = $_POST["username"];
        $usersPwd = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];

        require_once 'config.inc.php';
        require_once 'functions.inc.php';

        if(emptyInputSignup($username, $usersPwd, $confirmPassword) !== false){
            // header("location: ../register.php?error=emptyinput");
            echo("<script>
            window.alert('Por favor, Preencha todos os campos!');
            window.location.href='../register.php';
            </script>"
        );
            exit();
        }
        if(invalidUid($username) !== false){
            // header("location: ../register.php?error=invalidUid");
            echo("<script>
            window.alert('Usuário Inválido');
            window.location.href='../register.php';
            </script>"
        );
            exit();
        }
        if(pwdMatch($usersPwd, $confirmPassword) !== false){
            // header("location: ../register.php?error=passworddontmatch");
            echo("<script>
            window.alert('As senhas não correspondem! Por Favor, insira novamente!');
            window.location.href='../register.php';
            </script>"
        );
            exit();
        }
        if(pwdShort($usersPwd) !== false){
            // header("location: ../register.php?error=shortpassword");
            echo("<script>
            window.alert('Senha Muito Curta! Por Favor, insira outra!');
            window.location.href='../register.php';
            </script>"
        );
            exit();
        }

        createUser($conn, $username, $usersPwd);

    }else{
        header("location: register.php");
        exit();
    }

