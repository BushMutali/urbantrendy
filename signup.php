<?php 

include_once 'header.php';

?>
    <div class="form-container">
        <div class="login-card">
            <div class="login-card-header">
                <h1>Sign Up</h1>
                <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p> Fill all the fields</p>";
            }
            elseif ($_GET["error"] == "invalidUsername") {
                echo "<p> Invalid username</p>";
            }
            elseif ($_GET["error"] == "invalidEmail") {
                echo "<p> Invalid email</p>";
            }
            elseif ($_GET["error"] == "usernametaken") {
                echo "<p> Username or email already taken</p>";
            }
            elseif ($_GET["error"] == "failed") {
                echo "<p> Something went wrong, try again</p>";
            }
            elseif ($_GET["error"] == "none") {
                echo "<p>Registration Successfull..</p>";
                header("location: login.php");
            }
        }
    ?>
            </div>
            <form class="login-card-form" action="include/userData.inc.php" method="post" autocomplete="off">
                <div class="form-item">
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Create username.." name="username" id="username" autofocus>
                </div>
                <div class="form-item">
                    <i class="fa fa-envelope"></i>
                    <input type="email" placeholder="Enter email.." name="email" id="email">
                </div>
                <div class="form-item">
                    <i class="fa fa-phone-flip"></i>
                    <input type="tel" maxlength="10" placeholder="Enter phonenumber.." name="phonenumber" id="phonenumber" onkeypress="return checkNumber(event)">
                </div>
                <div class="form-item">
                    <i class="fa fa-lock"></i>
                    <input type="password" placeholder="Create a strong password.." name="password" maxlength="8" id="pass">
                </div>
                <button type="submit" name="signup">Sign Up</button>
            </form>
            <div class="login-card-footer">
                Already have an account? <a href="login.php">Login to your account</a>
            </div>
        </div>
       
    </div>


    
    <?php 

include_once 'footer.php';

?>