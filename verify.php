<?php
    session_start();
?>
<title>Password Recovery</title>
<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="shortcut icon" type="x-icon" href="img/product6.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">

<div class="form-container">
        <div class="login-card">
            <div class="login-card-header">
                <h1>Email verification </h1>
                <span><?php if (isset($_SESSION["email"])) {
                    echo "Check ".$_SESSION["email"]. " for the verification code";
                }?></span>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "empty") {
                echo "<p>Verification code required</p>";
            }
            elseif ($_GET["error"] == "error") {
                echo "<p>There was an error, please try again</p>";
            }
            elseif ($_GET["error"] == "failed") {
                echo "<p>Invalid code</p>";
            }
        }
        ?>


            </div>
            <form class="login-card-form" action="include/userData.inc.php" method="post">
                <div class="form-item">
                    <i class="fa fa-envelope"></i>
                    <input type="text" placeholder="verification code" name="code"   autofocus 
                    style="text-transform: uppercase;">
                </div>
                <button type="submit" name="verify" >confirm</button>
            </form>
        </div>
    </div>