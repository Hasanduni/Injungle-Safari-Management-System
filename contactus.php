<?php include_once "./includes/connect.php"?>

<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title>Contact Us</title>

        <link rel="stylesheet"  href="./css/style1.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
    
        <section class="contact">
        <?php include_once "nav.php"?>
            <!--Navigation bar
            <div class="navbar">
                <a href=""><img src="images/ijungle.jpeg" style="width: 150px; padding-top: 30px;"></a>
                <nav>
                  <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="">Packages</a></li>
                    <li><a href="">About us</a></li>
                    <li><a href="">Faq</a></li>
                    <li><a href="">Reservation</a></li>
                  </ul>
                </nav>
            </div>

            <!--Content-->
            <div class="content">
                <h2>Contact Us</h2>
                <p>InJungle safari is a tour operator which provides top wildlife trips around Sri Lanka. We have well experinced staff to serve you. Our dedicated staff is available to help you, whether you have inquiries about our safari packages, require assistance with a booking, or simply want to express your excitement about the safari. Customer satisfaction is our priority, and we value your feedback. We are delighted to hear from you!</p>
            </div>

            <div class="container">

                <!--Contact Information-->
                <div class="contactInfo">

                    <div class="box">
                        <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>InJungle Safari(pvt)Ltd,<br>Stanly Thilakarathne Mawatha,<br>Jubilie Post,<br>Nugegoda,<br>Sri Lanka.</p>
                        </div>
                    </div>

                    <div class="box">
                        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>+94 11 774 5656,<br>+94 11 774 4646,<br>+94 11 775 5555</p>
                        </div>
                    </div>

                    <div class="box">
                        <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>E-mail</h3>
                            <p>info@injunglesafari.com</p>
                        </div>
                    </div>

                </div>

                <!--Form-->
                <div class="contactForm">
                    <form action="cmttable.php" method="POST">

                        <h2>LEAVE A COMMENT</h2>

                            <div class="inputBox">
                                <input type="text" name="name" placeholder="Name" required="true">
                                <span>Full Name:</span>
                            </div>

                            <div class="inputBox">
                                <input type="text" name="email" placeholder="Email" required="true">
                                <span>E-mail:</span>
                            </div>

                            <div class="inputBox">
                                <textarea name="inquiry" required="true"></textarea>
                                <span>Write here...</span>
                            </div>

                            <div class="inputBox"> 
                                <input type="submit" name="submit1" value="Submit">
                            </div>

                     </form>
                </div>

            </div>

        </section>

        <!--Footer-->
        <section class="ffooter">
            <div class="fcontainer">
              <div class="frow">
        
                <div class="footer-col">
                  <h5>Top Destinations</h5>
                  <div>
                    <ul>
        
                      <li><a href="">Yala national park</a></li>
                      <li><a href="">Wilpaththu national park</a></li>
                      <li><a href="">Udawalawe national park</a></li>
                      <li><a href="">Bundala national park</a></li>
                      <li><a href="">Kumana national park</a></li>
        
                    </ul>
                  </div>
        
                </div>
        
                <div class="footer-col">
                  <h5>Travel information</h5>
                  <div>
                    <ul>
        
                      <li><a href="">Safari advice</a></li>
                      <li><a href="">Sri lankan weather</a></li>
                      <li><a href="">Responsible travel</a></li>
                      <li><a href="">Tips to improve your safari</a></li>
                      <li><a href="">Wild life photographs</a></li>
        
                    </ul>
                  </div>
                </div>
        
                <div class="footer-col">
                  <h5>Quick links</h5>
                  <div>
                    <ul>
        
                      <li><a href="">About us</a></li>
                      <li><a href="">Contact us</a></li>
                      <li><a href="">Faq</a></li>
        
        
                    </ul>
                  </div>
                </div>
        
                <div class="footer-col">
                  <h5>Find us on</h5>
                  <div class="link">
        
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-youtube"></i></a>
        
                  </div>
        
        
                </div>
              </div>
            </div>
        </section>

    </body>
</html>