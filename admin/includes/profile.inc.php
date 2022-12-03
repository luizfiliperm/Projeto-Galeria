<?php

    session_start();
    require_once("config.inc.php");
    require_once("functions.inc.php");
    $servername = $_SESSION["username"];

    if(isset($_POST['submit'])){
        
        $profilePhoto = $_POST["profilePhoto"];
        $bio = $_POST["bio"];
        $username = $_POST["username"];

        if(emptyProfile($username, $profilePhoto, $bio) !== false){
            echo("<script>
                    window.alert('Por favor, Preencha todos os campos!');
                    window.location.href='../userProfile.php';
                </script>"
            );
            exit();
        }

        
        
        
        $sql = "UPDATE users SET username='$username' WHERE username='$servername';";
        $conn->query($sql); 
        $sql = "UPDATE usersimage SET userImg='$username' WHERE userImg='$servername';";
        $conn->query($sql);

        $sql = "SELECT * FROM usersprofile WHERE username = '$servername';";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

            if($count <= 0){
                $sql = "INSERT INTO usersprofile (profilePhoto, bio, username) VALUES ('$profilePhoto','$bio', '$username');";
                $stmt = $conn->prepare($sql);
                if(!$stmt){
                //     echo("<script>
                //         window.alert('Falha ao alterar/criar seu perfil! Favor tentar novamente!');
                //         window.location.href='/../userProfile.php';
                //     </script>"
                // );
                // exit();
                }
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);
    
            }else{
                $sql = "UPDATE usersprofile SET profilePhoto='$profilePhoto', bio='$bio' WHERE username='$username';";
                $conn->query($sql);  
            }
        $_SESSION["username"] = $username;    
        echo("<script>
            window.alert('Perfil Criado/Alterado com sucesso!');
            window.location.href='../userProfile.php';
            </script>"
            );
            exit();
    }
