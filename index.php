<?php 

include_once 'header.php';

?>
<?php
if (!isset($_SESSION["username"])) {
    echo "<section>
    <div class='pop' id='pop'>
         <div class='alert' >
             <span id='close-alert' onclick='hideAlertBox();'>&times;</span>
             <div class='icon'>
                 <i class='fa fa-thumbs-up'></i>
             </div>
             <div class='alert-info'>
                 <h2>Sign up today</h2>
                 <h3>and get 30% off</h3>
                 <h4>on your first purchase</h4>
             </div>
             <div class='alert-footer'>
             Click <a href='signup.php'>here</a> to sign up.<br>
             Already have an account? <a href='login.php'>Login</a>
             </div>
</section>";
}


?>

    <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons..</p>
        <button onclick="redirect()">Shop Now</button>
        <!---<img src="img/tshirt.png" alt="tshirt" style="width: 400px;">-->
    </section>

    
<section id="product1" class="section-p1">
        <h2 >Featured Products</h2>
        <p>November Black Friday Deals</p>
        <div class="pro-container">
            <div class="pro">
                <img class="shopping-item-image" src="img/product1.jpg" alt="">
                <div class="des">
                    <span>adiddas</span>
                    <h5 class="shopping-item-title">Adiddas T-Shirt Black</h5>
                    <div class="star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h4 class="shopping-item-price">Ksh. 1500</h4>
                </div>
                <a id="add-to-cart" class="btn-add"><i class="fa fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img class="shopping-item-image" src="img/product2.jpg" alt="">
                <div class="des">
                    <span>adiddas</span>
                    <h5 class="shopping-item-title">Adiddas Air Pods</h5>
                    <div class="star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-stroke"></i>

                    </div>
                    <h4 class="shopping-item-price">Ksh. 1700</h4>
                </div>
                <a id="add-to-cart" class="btn-add"><i class="fa fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img class="shopping-item-image" src="img/product3.jpg" alt="">
                <div class="des">
                    <span>adiddas</span>
                    <h5 class="shopping-item-title">Adiddas T-Shirt Black 2</h5>
                    <div class="star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h4 class="shopping-item-price">Ksh. 1500</h4>
                </div>
                <a id="add-to-cart" class="btn-add"><i class="fa fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img class="shopping-item-image" src="img/product4.jpg" alt="">
                <div class="des">
                    <span>adiddas</span>
                    <h5 class="shopping-item-title">Adiddas Water Bottle</h5>
                    <div class="star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-stroke"></i>
                    </div>
                    <h4 class="shopping-item-price">Ksh. 500</h4>
                </div>
                <a id="add-to-cart" class="btn-add"><i class="fa fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img class="shopping-item-image" src="img/product5.jpg" alt="">
                <div class="des">
                    <span>urban trendy</span>
                    <h5 class="shopping-item-title">Sun glasses</h5>
                    <div class="star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h4 class="shopping-item-price">Ksh. 300</h4>
                </div>
                <a id="add-to-cart" class="btn-add"><i class="fa fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img class="shopping-item-image" src="img/product6.jpg" alt="">
                <div class="des">
                    <span>adiddas</span>
                    <h5 class="shopping-item-title">Adiddas Cap</h5>
                    <div class="star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-stroke"></i>
                    </div>
                    <h4 class="shopping-item-price">Ksh. 350</h4>
                </div>
                <a id="add-to-cart" class="btn-add"><i class="fa fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img class="shopping-item-image" src="img/product7.jpg" alt="">
                <div class="des">
                    <span>adiddas</span>
                    <h5 class="shopping-item-title">Adiddas Bag</h5>
                    <div class="star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h4 class="shopping-item-price">Ksh. 1200</h4>
                </div>
                <a id="add-to-cart" class="btn-add"><i class="fa fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img class="shopping-item-image" src="img/j5.jpg" alt="">
                <div class="des">
                    <span>jordan</span>
                    <h5 class="shopping-item-title">Jordan 5</h5>
                    <div class="star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-stroke"></i>
                    </div>
                    <h4 class="shopping-item-price">Ksh. 4500</h4>
                </div>
                <a id="add-to-cart" class="btn-add"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
        </div>
        <button id="explore" onclick="redirect()">Explore &#8594;</button>
    </section>

    <section id="product1" class="section-p1">
        <h2 >New Arrivals</h2>
        <p>Phones and other accessories</p>
        <div class="pro-container">
            <div class="pro">
                <img class="shopping-item-image" src="img/XiaomiRedmiNote11Pro.jpg" alt="phone">
                <div class="des">
                    <span>redmi</span>
                    <h5 class="shopping-item-title">Redmi Note 11 Pro</h5>
                    <div class="star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h4 class="shopping-item-price" >Ksh. 34000</h4>
                    <span>8GB RAM, 128GB ROM</span>
                </div>
                <a id="add-to-cart" class="btn-add"><i class="fa fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img class="shopping-item-image" src="img/Nokia-G20.jpg" alt="phone">
                <div class="des">
                    <span>nokia</span>
                    <h5 class="shopping-item-title">Nokia G20</h5>
                    <div class="star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-stroke"></i>

                    </div>
                    <h4 class="shopping-item-price">Ksh. 17000</h4>
                    <span>4GB RAM, 64GB ROM</span>
                </div>
                <a id="add-to-cart" class="btn-add"><i class="fa fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img class="shopping-item-image" src="img/Samsung-Galaxy-S21-5G-.jpg" alt="phone">
                <div class="des">
                    <span>samsung</span>
                    <h5 class="shopping-item-title">Samsung Galaxy S21</h5>
                    <div class="star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h4 class="shopping-item-price">Ksh. 76000</h4>
                    <span>6GB RAM, 128GB ROM</span>
                </div>
                <a id="add-to-cart" class="btn-add"><i class="fa fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img class="shopping-item-image" src="img/camon 19.jpg" alt="phone">
                <div class="des">
                    <span>tecno</span>
                    <h5 class="shopping-item-title">Tecno Camon 19</h5>
                    <div class="star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-stroke"></i>
                    </div>
                    <h4 class="shopping-item-price">Ksh. 22000</h4>
                    <span>4GB RAM, 128GB ROM</span>
                </div>
                <a id="add-to-cart" class="btn-add"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
        </div>
        <button id="explore" onclick="redirect()">Explore &#8594;</button>
    </section>

<section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>Crazy Deals</h4>
            <h2>Buy one get one free</h2>
            <button class="white">Learn More</button>
        </div>

        <div class="banner-box banner-box2">
            <h4>Mega Collection</h4>
            <h2>Upcoming deals</h2>
            <button class="white" onclick="redirect()">Collection</button>
        </div>
    </section>
</section>

<?php 

include_once 'footer.php';

?>

    