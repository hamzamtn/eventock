

<?php
session_start();
include "connect.php";
include  "session.php";



$email=$_SESSION['login_user'];
 $ReadSql = "SELECT * FROM `vender_signup` where email='".$email."'";

$ress = mysqli_query($connection, $ReadSql);
    
$rw = mysqli_fetch_assoc($ress);

    if($rw['user_type']=="admin"){  
    header('location: disable_users.php');
    }elseif ($rw['user_type']=="user") {
        header('location: booking_details.php');
    }   

if (isset($_REQUEST['delimage']))
{
 $a= $_REQUEST['delimage']; 
$v_id=$rw['id'];
$u_id=$_SESSION["user_id"];

 $type= $_REQUEST['type'];

$sql = "INSERT INTO `quotes` (vendor_id,user_id,cost,event_type) VALUES ('$v_id','$u_id','$a','$type')";

$res = mysqli_query($connection, $sql) or die(mysqli_error($connection));

                   if($res){
                          $_SESSION["fmsg1"] = "Successfully inserted data, Insert New data.";
                          header('location: quote.php');

                    }else{
                        $_SESSION["fmsg1"] = "Data not inserted, please try again later.";

                        header('location: quote.php');
                        
                    }




}


$ReadSql = "SELECT * FROM `booking` where vendors='".$email."'";

$res = mysqli_query($connection, $ReadSql);



                                   

?>


<!DOCTYPE html>

<html lang="en">    

    <head>

        <meta charset="utf-8">

        <title>Quotes</title>

        <meta name="description" content="Search for Houston Apartments For Rent using our extensive apartment database. View photos, floor plans, maps and prices. Find Houston apartment rentals on RentDeals and receive a $100 cash back rebate.">

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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
*, ::after, ::before { box-sizing: border-box; }.search .search-tile { background-color: rgb(255, 255, 255); border: 1px solid rgb(214, 215, 215); position: relative; cursor: pointer; }.search .search-tile .enumerator { background-color: rgb(242, 101, 34); color: rgb(255, 255, 255); position: relative; width: 42px; height: 25px; line-height: 25px; margin: 0px 0px -25px -11px; text-align: center; font-size: 11px; font-family: ProximaNova-Bold, Tahoma, Arial, sans-serif; z-index: 50; }.search .search-tile .enumerator::after { position: absolute; bottom: 100%; left: 0px; width: 0px; height: 0px; border-bottom: 5px solid rgb(200, 84, 31); border-left: 10px solid transparent; border-top-width: 5px; border-right-width: 10px; content: " "; }.container .left { width: 305px; }.search .search-tile .left { position: absolute; top: 0px; left: 0px; width: auto; }img { border: 0px; }.search .search-tile .left .rating { text-align: center; line-height: 0.94; }.stars-sprite { font-size: 16px; text-indent: -9999em; display: inline-block; background-image: url("../images/search/search-sprite.svg"); background-size: 6.6875em 14em; }.stars-sprite.stars { width: 6.3125em; height: 1em; }.stars-sprite.stars.s50 { background-position: 0px 0px; }.search .search-tile .divider { height: 1px; background-color: rgb(222, 223, 223); }.search .search-tile .left .bookings { text-align: center; color: rgb(120, 120, 121); font-family: ProximaNova-Bold, Tahoma, Arial, sans-serif; }.search .search-tile .left .bookings span { display: block; color: rgb(93, 192, 207); font-family: ProximaNova-Regular, Tahoma, Arial, sans-serif; }.search .search-tile .left .bookings .last-booking { font-family: ProximaNova-Extrabld, Tahoma, Arial, sans-serif; color: rgb(93, 192, 207); }.search .search-tile .right { position: absolute; top: 0px; right: 0px; }a { background-color: transparent; }a:active, a:hover { outline: 0px; }.search .search-tile .right .name > a { color: rgb(60, 60, 60); font-family: ProximaNova-Semibold, Tahoma, Arial, sans-serif; text-decoration: none; }.search .search-tile .right .description { font-family: ProximaNova-Regular, Tahoma, Arial, sans-serif; color: rgb(60, 60, 60); }.search .search-tile .right .description .more { font-family: ProximaNova-Bold, Tahoma, Arial, sans-serif; color: rgb(242, 101, 34); }.search .search-tile .bottom { position: absolute; right: 0px; bottom: 0px; }.search .search-tile .bottom .badges { height: 35px; padding: 5px 0px; }.search .search-tile .bottom .badges > span { width: 25px; height: 25px; margin-right: 3px; }.search .search-tile .bottom .badges > span img { max-width: 100%; max-height: 100%; }.search .search-tile .bottom .badges > span .gigpay { width: 51px; height: 27px; }.search .search-tile .bottom .location { font-family: ProximaNova-Semibold, Tahoma, Arial, sans-serif; color: rgb(60, 60, 60); margin-right: 30px; overflow: hidden; }.search .search-tile .bottom .request-quote { margin-top: 16px; }.search .search-tile .bottom .favorite-button { float: left; display: flex; align-items: center; justify-content: center; width: 30%; height: 35px; border-radius: 3px; border: 1.5px solid rgb(242, 101, 34); font-size: 16px; color: rgb(242, 101, 34); user-select: none; }.search .search-tile .bottom .favorite-button:hover { background-color: rgb(254, 239, 231); }.search .search-tile .bottom .favorite-button:active { background-color: rgb(247, 165, 126); }.search .search-tile .bottom .favorite { display: inline-block; width: 26px; height: 24px; cursor: pointer; position: static !important; background: url("../images/search/icon-heart.svg") center center no-repeat !important; }.search .search-tile .bottom .request-saved .favorite + span > span { display: none; }button, input, optgroup, select, textarea { color: inherit; font: inherit; margin: 0px; }button { overflow: visible; }button, select { text-transform: none; }.button { display: inline-block; margin: 0px; text-align: center; vertical-align: middle; cursor: pointer; white-space: nowrap; font-family: ProximaNova-Semibold, Tahoma, Arial, sans-serif; color: rgb(255, 255, 255); background-color: rgb(242, 101, 34); font-size: 15px; text-transform: uppercase; padding: 0px 45px; height: 50px; line-height: 50px; border-radius: 8px; background-clip: padding-box; border: 0px; }.button:hover { background-color: rgb(200, 84, 31); }.button:focus { outline: 0px; }.search .search-tile .bottom .request-quote .button { height: 35px; margin-left: 10px; font-family: ProximaNova-Bold, Tahoma, Arial, sans-serif; font-size: 16px; line-height: 16px; border: 1.5px solid rgb(242, 101, 34); border-radius: 3px; width: calc(68%) !important; padding: 0px 7px !important; }.search .search-tile .bottom .request-quote .button:hover { background-color: rgb(243, 118, 58); border: 1.5px solid rgb(243, 118, 58); }.search .search-tile .bottom .request-quote .button:active { background-color: rgb(212, 77, 13); border: 1.5px solid rgb(212, 77, 13); }@media (max-width: 991px){.search .search-tile { width: 307px; height: 313px; margin: auto auto 10px; }}@media (max-width: 991px){.search .search-tile.include-rfq { height: 372px; }}@media (min-width: 992px){.search .search-tile { width: 776px; height: 318px; margin-bottom: 13px; }}@media (min-width: 992px){.search .search-tile.include-rfq { height: 372px; }}@media (max-width: 991px){.search .search-tile .enumerator { top: 17px; }}@media (min-width: 992px){.search .search-tile .enumerator { top: 20px; }}@media (min-width: 1200px){.container .left { float: left; width: 370px; }}@media (max-width: 991px){.search .search-tile .left { padding: 10px; }}@media (min-width: 992px){.search .search-tile .left { width: 230px; padding: 13px 35px 13px 13px; }}@media (max-width: 991px){.search .search-tile .left .img { width: 125px; height: 125px; }}@media (min-width: 992px){.search .search-tile .left .img { width: 182px; height: 182px; }}@media (max-width: 991px){.search .search-tile .left .rating { width: 125px; margin: 8px 0px; }}@media (min-width: 992px){.search .search-tile .left .rating { width: 182px; margin: 11px 0px; }}@media (max-width: 991px){.search .search-tile .left .bookings { font-size: 11px; margin-top: 5px; }}@media (min-width: 992px){.search .search-tile .left .bookings { font-size: 13px; width: 182px; }}@media (max-width: 991px){.search .search-tile .left .bookings span { font-size: 25px; }}@media (min-width: 992px){.search .search-tile .left .bookings span { font-size: 27px; }}@media (max-width: 991px){.search .search-tile .left .bookings .last-booking { font-size: 10px; }}@media (min-width: 992px){.search .search-tile .left .bookings .last-booking { font-size: 12px; }}@media (min-width: 1200px){.container .right { float: right; width: 800px; }}@media (max-width: 991px){.search .search-tile .right { width: 160px; padding: 10px 5px 10px 0px; }}@media (min-width: 992px){.search .search-tile .right { width: 544px; padding: 13px 13px 13px 0px; }}@media (max-width: 991px){.search .search-tile .right .name { font-size: 15px; margin-top: 2px; height: 40px; overflow: hidden; }}@media (min-width: 992px){.search .search-tile .right .name { font-size: 18px; margin-top: 6px; margin-bottom: 28px; }}@media (max-width: 991px){.search .search-tile .right .description { line-height: 16px; font-size: 13px; }}@media (min-width: 992px){.search .search-tile .right .description { line-height: 21px; font-size: 14px; }}@media (max-width: 991px){.search .search-tile .right .description .text { display: block; max-height: 161px; overflow: hidden; }}@media (max-width: 991px){.search .search-tile .right .description .more { display: block; }}@media (max-width: 991px){.search .search-tile .bottom { width: 305px; padding: 0px 10px 10px; }}@media (min-width: 992px){.search .search-tile.include-rfq .bottom { height: 120px; bottom: 10px; }}@media (min-width: 992px){.search .search-tile .bottom { width: 557px; height: 76px; padding: 0px 13px 13px; }}@media (min-width: 992px){.search .search-tile .bottom .badges { height: 45px; padding: 10px 0px; }}@media (max-width: 991px){.search .search-tile .bottom .location { height: 26px; width: 255px; vertical-align: bottom; display: table-cell; font-size: 11px; line-height: 13px; }}@media (min-width: 992px){.search .search-tile .bottom .location { font-size: 12px; }}@media (min-width: 992px){.search .search-tile.include-rfq .bottom .request-quote { margin-top: 14px; }}@media (max-width: 991px){.search .search-tile .favorite-button { font-family: ProximaNova-Semibold, Tahoma, Arial, sans-serif; }}@media (min-width: 992px){.search .search-tile .favorite-button { font-family: ProximaNova-Bold, Tahoma, Arial, sans-serif; }}@media (min-width: 992px){.search .search-tile .bottom .favorite { margin-right: 5px; font-size: 16px; }}@media (max-width: 991px){.search .search-tile.include-rfq .bottom .favorite { bottom: 72px; }}@media (min-width: 992px){.search .search-tile.include-rfq .bottom .favorite { bottom: 60px; }}@media (min-width: 992px){.search .search-tile .bottom .favorite { right: 13px; bottom: 13px; }}@media (min-width: 992px){.button { font-size: 20px; }}@media (max-width: 991px){.search .search-tile .bottom .request-quote .button { font-family: ProximaNova-Semibold, Tahoma, Arial, sans-serif; width: calc(66%) !important; }}

</style>
    </head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <body id="contactPage"> 

        <p id="skipLink"><a href="#content">Skip navigation</a></p>

        

        <div id="container" class="border-box">

        

            <?php include "login_header.php"; ?>

            

            <section id="content">

                <div class="container">

                    <div class="contact-section">

                        

                        <span style="color:red"><?php if(isset($_SESSION['fmsg1'])){ echo $_SESSION['fmsg1']; } unset($_SESSION['fmsg1']); ?></span>

                        

                            <fieldset>

                                 <?php 
  
                                    while($rs = mysqli_fetch_array($res)){
                                    ?>

    <!-- ngIf: 1 > 0 --><div class="enumerator  ng-scope" ng-class="{'enumerator--has-fp': (featuredListings | filter: { memberID: 12792 }).length > 0}" ng-if="1 > 0"></div><!-- end ngIf: 1 > 0 -->
    <div class="left">
            <img class="img" itemprop="image" src="//d3ew4rh7xxgmkq.cloudfront.net/performer/12792/photos/12792-33706eb4f49444d28ffb274231c8aa4a-1.jpg" alt="Birmingham Wedding Band | Z And The Party Faktory" onerror="this.src = '//dd86mil3sc3or.cloudfront.net/6.0.0.1736/Content/images/search-no-photo.png'">
                <div class="rating">
            <span class="stars-sprite stars s50"></span>
            <span itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
                <meta itemprop="ratingCount" content="38">
                <meta itemprop="ratingValue" content="5.0">
                <meta itemprop="bestRating" content="5.0">
                <meta itemprop="worstRating" content="0">
            </span>
        </div>
            <div class="divider"></div>
            <div class="bookings ">
                <span><?php $id=$rs['user_id'];

                $Read = "SELECT * FROM `vender_signup` where id='".$id."'";

$r = mysqli_query($connection, $Read);
$rq = mysqli_fetch_assoc($r);
$_SESSION["user_id"] =$rq['id'];

echo $rq['fname']." ".$rq['lname'];

                ?></span>

                <?php 
                $event_type=$rs['event_type'];

 echo " (". $event_type. " )";
                $Reads = "SELECT * FROM `add_services` where aservice='".$event_type."' and email='".$email."'";

$rz = mysqli_query($connection, $Reads);
$ro = mysqli_fetch_assoc($rz);


                 ?>
                
<input type="button" value="Send Quote" id="del" style="width:80px;color: #fff;background: #004c83;" onclick="location.href='/quote.php?delimage=<?php echo $ro['cost']; ?>&type=<?php echo $ro['aservice']; ?>';" />
                    
            </div>
           
    </div>
    <div class="right  ">
        <div class="name">
           
        </div>
        
    </div>
    <div class="bottom">
        <div class="divider"></div>
       
           
        <div class="request-quote request-saved" ng-click="$event.stopPropagation();" ng-init="rfqButtonIsLoaded()">
            <div class="favorite-button" ng-class="{ 'added': isFavorite(12792) }" ng-click="toggleFavorite(12792); $event.stopPropagation();">

                 <a itemprop="url" title="Z And The Party Faktory" href="#">
                 <span itemprop="name" style="margin-top: 100px;">
                    Event : <?php echo $rs['event_type'];  ?>
                </span>
            </a>

               

                <div class="description">
            <span class="text">Date :<?php echo $rs['date'];?>
    </span>
               
        </div>
                
                <div class="description">
            <span class="text">Venue :<?php echo $rs['venue'];?>
            
    </span>
               
        </div>
         <div class="description">
            <span class="text">Location :<?php echo $rs['location'];?>
            
    </span>
               
        </div>
         <div class="description">
            <span class="text">Guest :<?php echo $rs['guest'];?>
            
    </span>
               
        </div>
        <div class="description">
            <span class="text">Time :<?php echo $rs['time'];?>
            
    </span>
               
        </div>
        <div class="description">
            <span class="text">Service Time :<?php echo $rs['slenght'];?>
            
    </span>
               
        </div>
        <div class="description">
            <span class="text">Details :<?php echo $rs['det'];?>
            
    </span>
               
        </div>
            </div>
            
    </div>
</div>



<?php } ?>



<div class="clearfix">

                                        

                                    </div>

                            </fieldset>

                        

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

<script type="text/javascript">
    

    
    
    $("#profileImage").click(function(e) {
    $("#imageUpload").click();

});

function fasterPreview( uploader ) {
    if ( uploader.files && uploader.files[0] ){
          $('#profileImage').attr('src', 
             window.URL.createObjectURL(uploader.files[0]) );
    }
     $("#btn").click();
}

$("#imageUpload").change(function(){
    fasterPreview( this );
});
</script>