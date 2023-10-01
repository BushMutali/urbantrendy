<?php 
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="js/cart.js" async></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urban Trendy</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="x-icon" href="img/product6.jpg">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <section id="header">
        <a href="#"><img src="img/logo.png" alt="logo" style="width: 150px;"></a>
       
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li class="acc" onclick="Showaccount()">Account <span>+</span>
                <ul id="acc"> 
                    <?php if (isset($_SESSION["email"])) {
                        echo '<li><a href="logout.php" >Logout</a></li>';
                    }
                    else {
                        echo '<li><a href="login.php" class="login">Login</a></li>';
                        echo '<li><a href="signup.php" class="login">Sign Up</a></li>';
                    }
                    ?>
                    
                    
            
                </ul></li>
                <li ><i id="sh-bag" class="fa fa-shopping-bag"></i></li>
                <a id="close"><i class="fa fa-times"></i></a>
                
            </ul>
            
        </div>

        <div id="mobile">
            <i class="fa fa-shopping-bag bag" ><a href="cart.php"></a></i>
            <i class="fas fa-outdent" id="bar"></i>
        </div>
    </section>
                
<div class="pop-up" id="cart-page">
    <span id="close-cart" class="times">&times;</span>
        <section class="cart-section">
            <h2> Shopping Cart <i class="fa fa-shopping-cart"></i></h2>
                <div class="cart-row">
                    <span class="cart-item cart-header cart-column">ITEM</span>
                    <span class="cart-quantity cart-header cart-column">PRICE</span>
                    <span class="cart-price cart-header cart-column">QUANTITY</span>
                </div>
                <div class="shopping-cart-items">
                
                </div> 
                <div class="coupon">
                    <input type="text" placeholder="COUPON" class="coupon-input" maxlength="10">
                </div>
                <div class="cart-total">
                    <strong class="cart-total-title">Total</strong>
                    <span class="cart-total-price">Ksh. 0</span>
                </div>
                <div class="purchase">
                <button type="button" class="btn btn-primary btn-purchase"><a href="checkout.html">PURCHASE</a></button>
                </div>
        </section>
</div>
