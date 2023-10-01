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
                <h1>Password recovery</h1>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p> Email address required</p>";
            }
            elseif ($_GET["error"] == "emailerror") {
                echo "<p> Please provide a correct email</p>";
            }
            elseif ($_GET["error"] == "error") {
                echo "<p>There was an error, please try again</p>";
            }
        }
        ?>


            </div>
            <form class="login-card-form" action="../include/userData.inc.php" method="post">
                <div class="form-item">
                    <i class="fa fa-user"></i>
                    <input type="email" placeholder="Enter your email address.." name="email"  autofocus>
                </div>
                <button type="submit" name="send" value="send">send code</button>
            </form>
        </div>
    </div>