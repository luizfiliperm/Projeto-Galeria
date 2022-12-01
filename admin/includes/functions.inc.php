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

function userExists($conn, $username){
    $sql = "SELECT * FROM accounts WHERE username = ?;";
    $stmt = $conn->prepare($sql);

    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../login.php?error=stmtfailed");
    }

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        $result = false;
        return $result;
    }
}


function createUser($conn, $username, $usersPwd) {
    $hashedPwd = password_hash($usersPwd, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (username, usersPwd) VALUES ('$username','$hashedPwd');";
    $stmt = $conn->prepare($sql);
    if(!$stmt){
        echo("<script>
            window.alert('Falha ao cadastrar sua conta!\nFavor tentar novamente!');
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

function loginUser($conn, $username, $usersPwd){
    $usernameExists = userExists($conn, $username);

    if(usernameExists == false){
        echo("<script>
                window.alert('Este Login não existe!');
                window.location.href='../login.php';
            </script>"
        );
        exit();
    }

    $pwdHashed = $usernameExists['usersPwd'];

    $checkPwd = password_verify($pwd ,$pwdHashed);

    if($checkPwd == false){
        echo("<script>
                window.alert('Esta senha está errada!');
                window.location.href='../login.php';
            </script>"
        );
        exit();

    }else if($checkPwd == true){
        session_start();
        $_SESSION["username"] =  $usernameExists['username'];
        echo("<script>
                window.alert('Você Foi logado com sucesso!');
                window.location.href='../../index.php';
            </script>"
        );
        exit();
    }
}