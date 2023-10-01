<?php

// sign up


if (isset($_POST["signup"])) {

    $userName = $_POST["username"];
    $userEmail = $_POST["email"];
    $userPassword = $_POST["password"];
    $userPhone = $_POST["phonenumber"];

    require_once 'dbh.inc.php'; 
    require_once 'functions.inc.php';

    if (emptyInputSignup($userName, $userEmail, $userPassword, $userPhone) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUsername($userName) !== false) {
        header("location: ../signup.php?error=invalidUsername");
        exit();
    }
    if (invalidEmail($userEmail) !== false) {
        header("location: ../signup.php?error=invalidEmail");
        exit();
    }
    if (uidExists($conn, $userName, $userEmail) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $userName, $userEmail, $userPhone, $userPassword);

   

}

// login

if(isset($_POST["login"])){

    $userEmail = $_POST["email"];
    $userPassword = $_POST["password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($userEmail, $userPassword) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }
    loginuser($conn, $userEmail, $userPassword);
}

// password recovery

if(isset($_POST["send"])){
    $userEmail = $_POST["email"];

    if (empty($userEmail)) {
        header("location: ../password/1_recovery.php?error=emptyinput");
        exit();
    }

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emailExists($conn, $userEmail) === false) {
        header("location: ../password/1_recovery.php?error=emailerror");
        exit();
    }

    $code = "UT".random_int(100000, 900000);

    include 'email.php';

    generateCode($conn, $userEmail, $code);

}

//confirm verification code
if(isset($_POST["confirm"])){

    $code = $_POST["code"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';


    if (empty($code)) {
        header("location: ../password/2_recovery.php?error=empty");
        exit();
    }

    if (verify($conn, $code) === false) {
        header("location: ../password/2_recovery.php?error=wrongcode");
        exit();
    }

    updateCode($conn, $newCode, $code, $userEmail);
}

// change password

if (isset($_POST["update"])) {
    session_start();
    $userEmail = $_SESSION["email"];
    $userPassword = $_POST["pass1"];
    $pass2 = $_POST["pass2"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (empty($userPassword) || empty($pass2)) {
        header("location: ../password/3_recovery.php?error=empty");
        exit();
    }
    passwordMatch($userPassword, $pass2);

    $hashed  = password_hash($userPassword, PASSWORD_DEFAULT);


    $updatePass = "UPDATE users SET userPassword = '$hashed' WHERE email = '$userEmail'";
    $run_query = mysqli_query($conn, $updatePass);
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

// verify email address

if (isset($_POST["verify"])) {
    $code = $_POST["code"];

    if (empty($code)) {
        header("location: ../verify.php?error=empty");
        exit();
    }

include_once 'dbh.inc.php';
    $sql = "SELECT * FROM users WHERE Code = ?";
    $stmt = mysqli_stmt_init($conn);
     if (!mysqli_stmt_prepare($stmt, $sql)) {
         header("location: ../signup.php?error=failed");
         exit();
     }

     mysqli_stmt_bind_param($stmt, "s", $code);
     mysqli_stmt_execute($stmt);
 
     $resultData = mysqli_stmt_get_result($stmt);

     if ($row = mysqli_fetch_assoc($resultData)) {
        session_start();
        session_unset();
        session_destroy();
        header('location: ../login.php?success=registered');

    }
    else {

        header('location: ../verify.php?error=failed');
    }



    $sql = "UPDATE users SET Code = '$newCode' WHERE Code = '$code'";
    $run_query = mysqli_query($conn, $sql);
    if (!$run_query) {
        header("location: ../verify.php?error=error");
        exit();
    }
    else {
        session_start();
        session_unset();
        session_destroy();
        header("location: ../login.php?success=registered");
        exit();
    }
}