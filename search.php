<?php
session_start();

 require_once ('connect.php');

$search=$_POST['search'];
 
$select = "SELECT * FROM `add_services` where description LIKE '%$search%'";


$select = mysqli_query($connection, $select);


?>

<!DOCTYPE html>

<html lang="en">    

    <head>

        <meta charset="utf-8">

        <title>Search Page</title>

        <meta name="description" content="Search for Houston Apartments For Rent using our extensive apartment database. View photos, floor plans, maps and prices. Find Houston apartment rentals on Eventock and receive a $100 cash back rebate.">

        <meta name="Keywords" content="Houston apartments, Houston apartment, Houston apartment rental, Houston apartment rentals, Houston texas apartments, Houston apartments for rent, Houston tx apartments, apartments in houston, apartments in houston texas, apartment in houston texas, houston texas apartment, apartment in houston, houston tx apartment, apartments in houston tx" />

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

        <link rel="stylesheet" href="styles/webfonts.css">

        <link rel="stylesheet" href="styles/oocss.css">

        <link rel="stylesheet" href="styles/main.css">

        <link rel="stylesheet" href="styles/print.css" media="print">

        <link rel="stylesheet" href="styles/plugin.modifications.css">

        <link rel="stylesheet" href="styles/responsive.css">

        

        <link rel="icon" href="favicon.ico">

        <!--[if IE]>

            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

            <link rel="SHORTCUT ICON" href="favicon.ico"/>

            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

        <![endif]-->

<script src="https://use.fontawesome.com/83c749bc99.js"></script>







<style type="text/css">
        *, ::after, ::before { box-sizing: border-box; }.service-description { padding: 75px 0px 70px; border-bottom: 1px solid rgb(214, 215, 215); }.service-container { max-width: 1210px; margin-left: auto; margin-right: auto; padding-left: 15px; padding-right: 15px; }.service-container::after, .service-container::before { content: " "; display: table; }.service-container::after { clear: both; }.service-description__left { display: none; }.service-circle { margin: 0px auto; padding: 25px; width: 140px; height: 140px; border-radius: 50%; background-color: rgb(244, 244, 244); text-align: initial; }img { border: 0px; }.service-circle__icon { display: block; position: relative; top: 50%; left: 51%; transform: translate(-50%, -50%); width: 80%; max-height: 80%; }.service-description__body { text-align: center; }.service-heading { margin: 0px; font-family: ProximaNova-Light, Tahoma, Arial, sans-serif; font-size: 6.5vw; font-weight: 400; color: rgb(60, 60, 60); letter-spacing: 0.5px; }.service-heading + p { margin-top: 20px; margin-bottom: 93px; }.service-description__copy { margin: 0px auto; max-width: 855px; font-family: ProximaNova-Regular, Tahoma, Arial, sans-serif; font-size: 16px; color: rgb(120, 120, 121); line-height: 1.8; letter-spacing: 0.5px; }@media (min-width: 768px){.service-description__left { display: table-cell; vertical-align: middle; }}@media (min-width: 425px){.service-circle { width: 200px; height: 200px; }}@media (min-width: 992px){.service-circle { width: 230px; height: 230px; }}@media (min-width: 992px){.service-circle--lg { width: 320px; height: 320px; margin-bottom: 26px; }}@media (min-width: 992px){.service-circle--lg .service-circle__icon { width: 65%; }}@media (min-width: 425px){.service-circle__icon { width: 70%; }}@media (min-width: 768px){.service-description__body { display: table-cell; vertical-align: middle; padding-left: 45px; text-align: left; }}@media (min-width: 425px){.service-heading { font-size: 32px; }}@media (min-width: 425px){.service-description__copy { font-size: 15px; }}
    </style>

    </head>

    <body id="contactPage"> 

        <p id="skipLink"><a href="#content">Skip navigation</a></p>

        

        <div id="container" class="border-box">

        

            <?php include "header.php"; ?>

            

            <section id="content">

                <div class="container">

                    <div class="contact-section">

                        

                            

                        <form action="index.php" method="post">

                            <fieldset>
                                <p class="legend">Services</p>

                                <?php 
  
                                    while($selected = mysqli_fetch_array($select)){
                                    ?>    

                                    
                            <div class="service-container">
                                <div class="service-description__left">
                                    <div class="service-circle service-circle--lg">
                                        <img class="service-circle__icon" src="services/<?php  echo $selected['image']; ?>" alt="Booking Musical Entertainment">
                                    </div>
                                </div>
                                <div class="service-description__body">
                                    <h2 class="service-heading service-heading--m0" style="text-transform: uppercase;"> <?php  echo $selected['aservice']; ?> </h2>
                                    <p class="service-description__copy"><?php  echo $selected['description']; echo $selected['email']; ?> </p>
                                </div>
                            </div>
                        
                                 <?php } ?>

                                    <div class="clearfix">

                                        <input type="submit" value="Back" />

                                    </div>

                              </fieldset>

                        </form>

                    </div>

                </div>

            </section>

        </div>  

                <?php include "footer.php"; ?>

        

        <div id="signIn-popup" class="popup">

            <div class="inner">

                <div class="close">&nbsp;</div>

                <h2>Sign In</h2>

                <ul class="tabs clearfix">

                    <li class="active opacity-trans"><a href="#tab-content1a">Renter</a></li>

                    <li class="opacity-trans"><a href="#tab-content2a">Agent</a></li>

                    <li class="opacity-trans"><a href="#tab-content3a">Manager</a></li>

                </ul>

                <div id="tab-content1a" class="tab-content first">

                    <form action="action.php" method="post">

                        <div class="form-row">

                            <input type="text" placeholder="Email / Username" />

                        </div>

                        <div class="form-row">

                            <input type="text" placeholder="Password" />

                        </div>

                        <p id="forgotPass"><a href="lost-password.html">Forgot Password?</a></p>

                        <p id="signup-switcher">Don't have an account? <a href="#!">Sign up</a></p>

                        <div class="submit-row">

                            <input type="submit" value="Sign In" />

                        </div>

                        <div class="social-section">

                            <p>Or Connect With</p>

                            <ul>

                                <li class="fb"><a href="#!"><mark class="opacity-trans"></mark><span class="opacity-trans"></span></a></li>

                                <li class="gplus"><a href="#!"><mark class="opacity-trans"></mark><span class="opacity-trans"></span></a></li>

                            </ul>

                        </div>

                    </form>

                </div>

                <div id="tab-content2a" class="tab-content">

                    <form action="action.php" method="post">

                        <div class="form-row">

                            <input type="text" placeholder="Email / Username" />

                        </div>

                        <div class="form-row">

                            <input type="text" placeholder="Password" />

                        </div>

                        <p id="forgotPass"><a href="password.html">Forgot Password?</a></p>

                        <p id="signup-switcher">Don't have an account? <a href="#!">Sign up</a></p>

                        <div class="submit-row">

                            <input type="submit" value="Sign In" />

                        </div>

                        <div class="social-section">

                            <p>Or Connect With</p>

                            <ul>

                                <li class="fb"><a href="#!"><mark class="opacity-trans"></mark><span class="opacity-trans"></span></a></li>

                                <li class="gplus"><a href="#!"><mark class="opacity-trans"></mark><span class="opacity-trans"></span></a></li>

                            </ul>

                        </div>

                    </form>

                </div>

                <div id="tab-content3a" class="tab-content">

                    <form action="action.php" method="post">

                        <div class="form-row">

                            <input type="text" placeholder="Email / Username" />

                        </div>

                        <div class="form-row">

                            <input type="text" placeholder="Password" />

                        </div>

                        <p id="forgotPass"><a href="password.html">Forgot Password?</a></p>

                        <p id="signup-switcher">Don't have an account? <a href="#!">Sign up</a></p>

                        <div class="submit-row">

                            <input type="submit" value="Sign In" />

                        </div>

                        <div class="social-section">

                            <p>Or Connect With</p>

                            <ul>

                                <li class="fb"><a href="#!"><mark class="opacity-trans"></mark><span class="opacity-trans"></span></a></li>

                                <li class="gplus"><a href="#!"><mark class="opacity-trans"></mark><span class="opacity-trans"></span></a></li>

                            </ul>

                        </div>

                    </form>

                </div>

            </div>

        </div>

        <div id="signUp-popup" class="popup">

            <div class="inner">

                <div class="close">&nbsp;</div>

                <h2>Sign Up</h2>

                <ul class="tabs clearfix">

                    <li class="active opacity-trans"><a href="#tab-content1b">Renter</a></li>

                    <li class="opacity-trans"><a href="#tab-content2b">Agent</a></li>

                    <li class="opacity-trans"><a href="#tab-content3b">Manager</a></li>

                </ul>

                <div id="tab-content1b" class="tab-content">

                    <form action="action.php" method="post">

                        <div class="form-row">

                            <input type="text" placeholder="First Name*" required="required" />

                        </div>

                        <div class="form-row">

                            <input type="text" placeholder="Last Name*" required="required" />

                        </div>

                        <div class="form-row">

                            <input type="text" placeholder="Email*" required="required" />

                        </div>

                        <div class="form-row">

                            <input type="text" placeholder="Password*" required="required" />

                        </div>

                        <p id="signin-switcher">Already a member? <a href="#!">Sign In</a></p>

                        <div class="submit-row">

                            <input type="submit" value="Sign In" class="opacity-trans" />

                        </div>

                        <p class="terms">By Registring I accept the terms of use.</p>

                        <div class="social-section">

                            <p>Or Connect With</p>

                            <ul>

                                <li class="fb"><a href="#!"><mark class="opacity-trans"></mark><span class="opacity-trans"></span></a></li>

                                <li class="gplus"><a href="#!"><mark class="opacity-trans"></mark><span class="opacity-trans"></span></a></li>

                            </ul>

                        </div>

                    </form>

                </div>

                <div id="tab-content2b" class="tab-content first">

                    <form action="action.php" method="post">

                        <div class="form-row">

                            <input type="text" placeholder="First Name*" required="required" />

                        </div>

                        <div class="form-row">

                            <input type="text" placeholder="Last Name*" required="required" />

                        </div>

                        <div class="form-row">

                            <input type="text" placeholder="Email*" required="required" />

                        </div>

                        <div class="form-row">

                            <input type="text" placeholder="Password*" required="required" />

                        </div>

                        <p id="signin-switcher">Already a member? <a href="#!">Sign In</a></p>

                        <div class="submit-row">

                            <input type="submit" value="Sign In" />

                        </div>

                        <p class="terms">By Registring I accept the terms of use.</p>

                        <div class="social-section">

                            <p>Or Connect With</p>

                            <ul>

                                <li class="fb"><a href="#!"><mark class="opacity-trans"></mark><span class="opacity-trans"></span></a></li>

                                <li class="gplus"><a href="#!"><mark class="opacity-trans"></mark><span class="opacity-trans"></span></a></li>

                            </ul>

                        </div>

                    </form>

                </div>

                <div id="tab-content3b" class="tab-content">

                    <form action="action.php" method="post">

                        <div class="form-row">

                            <input type="text" placeholder="First Name*" required="required" />

                        </div>

                        <div class="form-row">

                            <input type="text" placeholder="Last Name*" required="required" />

                        </div>

                        <div class="form-row">

                            <input type="text" placeholder="Email*" required="required" />

                        </div>

                        <div class="form-row">

                            <input type="text" placeholder="Password*" required="required" />

                        </div>

                        <p id="signin-switcher">Already a member? <a href="#!">Sign In</a></p>

                        <div class="submit-row">

                            <input type="submit" value="Sign In" class="opacity-trans" />

                        </div>

                        <p class="terms">By Registring I accept the terms of use.</p>

                        <div class="social-section">

                            <p>Or Connect With</p>

                            <ul>

                                <li class="fb"><a href="#!"><mark class="opacity-trans"></mark><span class="opacity-trans"></span></a></li>

                                <li class="gplus"><a href="#!"><mark class="opacity-trans"></mark><span class="opacity-trans"></span></a></li>

                            </ul>

                        </div>

                    </form>

                </div>

            </div>

        </div>

        <div id="overlay">&nbsp;</div>

        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

        <script>if (!window.jQuery) { document.write('<script src="javascript/vendor/jquery-1.11.2.min.js"><\/script>'); }</script>



        <!--[if IE]>

            <script src="javascript/vendor/jquery.placeholder.min.js"></script>

        <![endif]-->

    

        <script src="javascript/main.js"></script>



    </body>

</html>

