<?php 

include_once 'header.php';

?>
    <div class="contactUs">
        <div class="title">
            <h2>Get in Touch</h2>
        </div>
        <div class="box">
            <div class="contact form">
                <h3>Send a message</h3>
                <form action="">
                    <div class="formBox">
                        <div class="row50">
                            <div class="inputBox">
                                <span>First Name</span>
                                <input type="text" name="" id="" placeholder="Enter your first name">
                            </div>
                            <div class="inputBox">
                                <span>Last Name</span>
                                <input type="text" name="" id="" placeholder="Enter your last name">
                            </div>
                        </div>
    
                        <div class="row50">
                            <div class="inputBox">
                                <span>Email</span>
                                <input type="email" name="" id="" placeholder="Enter your email">
                            </div>
    
                            <div class="inputBox">
                                <span>Phone Number</span>
                                <input type="tel" name="" id="" placeholder="Enter your phonenumber" maxlength="10" onkeypress="return checkNumber(event)">
                            </div>
                        </div>
                        <div class="row100">
                            <div class="inputBox">
                                <span>Message</span>
                                <textarea placeholder="Enter your message"></textarea>
                            </div>
                        </div>
    
                        <div class="row100">
                            <div class="inputBox">
                                <input type="submit" value="Send">
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        
    
            <div class="contact info">
                <h3>Contact info</h3>
                <div class="infoBox">
                    <div>
                        <span><i class="fa fa-map-marker"></i></span>
                        <p>Thika, Kenya</p>
                    </div>
                    <div>
                        <span><i class="fa fa-envelope"></i></span>
                        <a href="mailto:doobiethereal@gmail.com">Fashionhub@gmail.com</a>
                    </div>
                    <div>
                        <span><i class="fa fa-phone"></i></span>
                        <a href="tel:+254726674882">+254726674882</a>
                    </div>
                    <!--social media links-->
                    <ul class="sci">
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-snapchat"></i></a></li>
                    </ul>
                </div>
            </div>
    
    
            <div class="contact map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.154966188443!2d37.080175013870154!3d-1.0448159992378572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f4ef517d2dd15%3A0x8e7d07383daf5916!2sMount%20Kenya%20University!5e0!3m2!1sen!2ske!4v1667948313751!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    
    
    <?php 

include_once 'footer.php';

?>