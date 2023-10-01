<?php

session_start();
?>

<title>Password Recovery</title>
<link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="shortcut icon" type="x-icon" href="../img/product6.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">

<div class="form-container">
        <div class="login-card">
            <div class="login-card-header">
                <h1>Change password</h1>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "empty") {
                echo "<p> Fill all the fields</p>";
            }
            elseif ($_GET["error"] == "error") {
                echo "<p> There was an error, please try again</p>";
            }
            elseif ($_GET["error"] == "password") {
                echo "<p>Passwords didn't match</p>";
            }
        }
        ?>


            </div>
            <form class="login-card-form" action="../include/userData.inc.php" method="post">
                <div class="form-item">
                    <i class="fa fa-lock"></i>
                    <input type="password" placeholder="Enter new password" name="pass1"  autofocus>
                </div>

                <div class="form-item">
                    <i class="fa fa-lock"></i>
                    <input type="password" placeholder="Re-enter new  password" name="pass2" >
                </div>
                <button type="submit" name="update" >confirm</button>
            </form>
        </div>
    </div>