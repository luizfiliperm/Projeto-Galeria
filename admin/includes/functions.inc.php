<?php

function emptyInputSignup($username, $usersPwd, $confirmPassword) {
    $result;
    if(empty($username) || empty($usersPwd) || empty($confirmPassword)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function pwdMatch($usersPwd, $confirmPassword) {
    $result;
    if($usersPwd != $confirmPassword){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function pwdShort($usersPwd) {
    $result;
    if(strlen($usersPwd) <= 5){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}


function createUser($conn, $username, $usersPwd) {
    $hashedPwd = password_hash($usersPwd, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (username, usersPwd) VALUES ('$username','$hashedPwd');";
    $stmt = $conn->prepare($sql);
    if(!$stmt){
        echo("<script>
        window.alert('Falha ao cadastrar sua conta! Favor tentar novamente!');
        window.location.href='../../index.php';
        </script>"
    );
    exit();
    }
    // mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    // header("location: ../../index.php?error=none");
    echo("<script>
            window.alert('Conta cadastrada com sucesso!');
            window.location.href='../login.php';
    </script>"
    );
    exit();

}

function emptyInputLogin($username, $usersPwd) {
    $result;
    if(empty($username) || empty($usersPwd)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
} 


function userExists($conn, $username){
    $result;
    $selectDb = mysqli_select_db("accounts", $conn);

    $sql = mysql_query("SELECT * FROM accounts WHERE username='$username';");
    if(mysql_num_rows($sql) > 0){
        $result = false;
    }else{
        $result = true;
    }
    return $result;
}

function emptyImgForm($urlImg, $albumName, $dateImg) {
    $result;
    if(empty($urlImg) || empty($albumName) || empty($dateImg)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}
