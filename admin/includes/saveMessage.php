<?php
    include_once('config.inc.php');

    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $sql = "INSERT INTO faleconosco(Email, Assunto, Mensagem) VALUES ( '$email', '$subject','$message')";

    $insert = mysqli_query($conn, $sql);
    
    

    if(!$insert){
        echo("<script>
            window.alert('Ocorreu algum erro, por favor tente novamente!');    
            window.location.href='../index.php';
            </script>"
        );
   
    }else{
        echo("<script>
            window.alert('Mensagem Enviada com Sucesso!');
            window.location.href='../../index.php';
            </script>"
        );
    }
?>
