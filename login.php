<?php 

include_once 'header.php';

?>
    <div class="form-container">
        <div class="login-card">
            <div class="login-card-header">
                <?php  
                // $t = date("H");
                // if ($t < 12) {
                //     echo "Good Morning";
                // }elseif ($t < 17) {
                //     echo "God Afternoon";
                // }else{
                //     echo "Good Evening";
                // }
                ?>
                <h1>Login</h1>
                <span><?php  
                if (isset($_GET["success"])) {
                   if ($_GET["success"] == "passwordchanged") {
                    echo "Password changed successfully, you can now login";
                   }
                }
                ?>
                <?php  
                if (isset($_GET["success"])) {
                   if ($_GET["success"] == "complete") {
                    echo "Registration successfull, you can now login";
                   }
                }
                ?></span>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p> Fill all the fields</p>";
            }
            elseif ($_GET["error"] == "loginerror") {
                echo "<p> Incorrect details</p>";
            }
            elseif ($_GET["error"] == "wronglogin") {
                echo "<p>Incorrect password</p>";
            }
        }
        ?>
            </div>
            <form class="login-card-form" action="include/userData.inc.php" method="post">
                <div class="form-item">
                    <i class="fa fa-user"></i>
                    <input type="email" placeholder="Enter email.." name="email" id="username"  autofocus>
                </div>
                <div class="form-item">
                    <i class="fa fa-lock"></i>
                    <input type="password" placeholder="Enter password.." name="password" maxlength="8" id="pass" >
                </div>
                <div class="form-item-other">
                    <!--<div class="checkbox">
                        <input type="checkbox" id="RememberMeCheckbox">
                        <label for="RememberMeCheckbox">Remember Me</label>
                    </div>-->
                    <a href="password/1_recovery.php">I forgot my password</a>
                </div>
                <button type="submit" name="login" value="login">Login</button>
            </form>
            <div class="login-card-footer">
                Don't have an account? <a href="signup.php">Create a free account</a><br>
                <a href="index.php">Continue without loging in</a>
            </div>
        </div>
    </div>
    

    
    <?php 

include_once 'footer.php';

?>