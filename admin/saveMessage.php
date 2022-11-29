<?php
    include_once('config.inc.php');

    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $sql = "INSERT INTO faleconosco(Email, Assunto, Mensagem) VALUES ( '$email', '$subject','$message')";

    $insert = mysqli_query($conn, $sql);
    
    

    if(!$insert){
        $msgSucess = 1; 
        header('Location: ' ."../index.php");
    }else{
        $msgSucess = 2; 
        header('Location: ' ."../index.php");
    }
?>
