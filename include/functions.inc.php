<?php

function emptyInputSignup($userName, $userEmail, $userPassword, $userPhone){
    if (empty($userName) || empty($userEmail) || empty($userPassword) || empty($userPhone)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidUsername($userName){
    if (!preg_match("/^[a-zA-Z0-9]*$/", $userName)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($userEmail){
    if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function uidExists($conn, $userName, $userEmail){
    $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
     $stmt = mysqli_stmt_init($conn);
     if (!mysqli_stmt_prepare($stmt, $sql)) {
         header("location: ../signup.php?error=failed");
         exit();
     }
 
     mysqli_stmt_bind_param($stmt, "ss", $userName, $userEmail);
     mysqli_stmt_execute($stmt);
 
     $resultData = mysqli_stmt_get_result($stmt);
 
     if ($row = mysqli_fetch_assoc($resultData)) {
         return $row;
     }
     else {
         $result = false;
         return $result;
     }
 
     mysqli_stmt_close($stmt);
 }

function createUser($conn, $userName, $userEmail, $userPhone, $userPassword){
    
    //  $code = "UT".random_int(100000, 900000);

    //  $sql = "UPDATE users SET Code = '$code' WHERE email = '$userEmail'";
    //  $run_query = mysqli_query($conn, $sql);
    //  if (!$run_query) {
    //      header("location: ../signup.php?error=error");
    //      exit();
    //  }
    //  else {
    //      session_start();
    //      $_SESSION["email"] = $userEmail;
    //      header("location: ../login.php?success=complete");
    //      exit();
    //  }

    $sql = "INSERT INTO users (username, email, phone, userPassword) VALUES (?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "ssss" , $userName, $userEmail, $userPhone, $userPassword);
    mysqli_stmt_execute($stmt);

    header("location: ../login.php?success=complete");
    exit();
 }


function emptyInputLogin($userEmail, $userPassword){
    if (empty($userEmail) || empty($userPassword)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

 function loginuser($conn, $userEmail, $userPassword){
    $sql = "SELECT * FROM users WHERE email = ? AND userPassword = ?";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "ss" , $userEmail, $userPassword);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($result)){
        session_start();
        $_SESSION["username"] =  $row["email"];
        header("location: ../index.php");
        exit();
    }else{
        header("location: ../login.php?error=loginerror");
        exit();
    }
}


function emailExists($conn, $userEmail){
    $sql = "SELECT * FROM users WHERE email = ?;";
     $stmt = mysqli_stmt_init($conn);
     if (!mysqli_stmt_prepare($stmt, $sql)) {
         header("location: ../signup.php?error=failed");
         exit();
     }

     mysqli_stmt_bind_param($stmt, "s",$userEmail);
     mysqli_stmt_execute($stmt);
 
     $resultData = mysqli_stmt_get_result($stmt);
 
     if ($row = mysqli_fetch_assoc($resultData)) {
         return $row;
     }
     else {
         $result = false;
         return $result;
     }
 
     mysqli_stmt_close($stmt);
}

function generateCode($conn, $userEmail, $code){
    $sql = "UPDATE users SET Code = '$code' WHERE email = '$userEmail'";
    $run_query = mysqli_query($conn, $sql);
    if (!$run_query) {
        header("location: ../password/1_recovery.php?error=error");
        exit();
    }
    else {
        session_start();
        $_SESSION["email"] = $userEmail;
        header("location: ../password/2_recovery.php");
        exit();
    }
}
function verifyEmail($conn, $code){
    $sql = "SELECT * FROM users WHERE Code = ?;";
     $stmt = mysqli_stmt_init($conn);
     if (!mysqli_stmt_prepare($stmt, $sql)) {
         header("location: ../signup.php?error=failed");
         exit();
     }

     mysqli_stmt_bind_param($stmt, "s",$code);
     mysqli_stmt_execute($stmt);
 
     $resultData = mysqli_stmt_get_result($stmt);
 
     if ($row = mysqli_fetch_assoc($resultData)) {
        header('location: ../login.php?success=registered');
     }
     else {
        header('location: ../verify.php?error');
        exit();
     }
 
     mysqli_stmt_close($stmt);
}

function verify($conn, $code){
    $sql = "SELECT * FROM users WHERE Code = ?;";
     $stmt = mysqli_stmt_init($conn);
     if (!mysqli_stmt_prepare($stmt, $sql)) {
         header("location: ../signup.php?error=failed");
         exit();
     }

     mysqli_stmt_bind_param($stmt, "s",$code);
     mysqli_stmt_execute($stmt);
 
     $resultData = mysqli_stmt_get_result($stmt);
 
     if ($row = mysqli_fetch_assoc($resultData)) {
        header('location: ../password/3_recovery.php');
     }
     else {
        header('location: ../password/2_recovery.php?error=failed');
        exit();
     }
 
     mysqli_stmt_close($stmt);
}

function updateCode($conn, $newCode, $code, $userEmail){
    $sql = "UPDATE users SET Code = '$newCode' WHERE Code = '$code'";
    $run_query = mysqli_query($conn, $sql);
    if (!$run_query) {
        header("location: ../password/2_recovery.php?error=error");
        exit();
    }
    else {
        session_start();
        $userEmail = $_SESSION["email"];
        header("location: ../password/3_recovery.php");
        exit();
    }
}

function passwordMatch($userPassword, $pass2){
    if ($userPassword !== $pass2) {
        header("location: ../password/3_recovery.php?error=password");
        exit();
    }
}

function updatePass($conn, $userEmail, $userPassword){
    $sql = "UPDATE users SET userPassword = '$userPassword' WHERE email = '$userEmail'";
    $run_query = mysqli_query($conn, $sql);
    if (!$run_query) {
        header("location: ../password/3_recovery.php?error=error");
        exit();
    }
    else {
        session_start();
        session_unset();
        session_destroy();
        header("location: ../login.php?success=passwordchanged");
        exit();
    }
}