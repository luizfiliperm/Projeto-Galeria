<?php
    require_once("config.inc.php");

    if(isset($_POST['submit'])){

        $username = $_POST["username"];
        $usersPwd = $_POST["pwd"];

        require_once 'config.inc.php';
        require_once 'functions.inc.php';

        if(emptyInputLogin($username, $usersPwd) !== false){
            echo("<script>
                window.alert('Por favor, Preencha todos os campos!');
                window.location.href='../login.php';
            </script>"
        );
        exit();
        }
          
        $sql = "SELECT * FROM users WHERE username='$username';";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if($count <= 0){
            echo("<script>
                    window.alert('Username errado!');
                    window.location.href='../login.php';
                </script>"
            );
            exit();
        }
        $row = mysqli_fetch_array($result);
        $pwdHashed = $row['usersPwd'];

        $checkPwd = password_verify($usersPwd, $pwdHashed);

        if($checkPwd == false){
            echo("<script>
                    window.alert('Esta senha está errada!');
                    window.location.href='../login.php';
                </script>"
                );
            exit();
        }else if($checkPwd == true){

            session_start();
            $_SESSION["username"] =  $row['username'];
            echo("<script>
                    window.alert('Você Foi logado com sucesso!');
                </script>"
            );
            header("location: ../../index.php");
        }
    }
    else{
        header("location: ../login.php");
        exit();
    }
    
