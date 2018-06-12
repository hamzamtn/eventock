<?php
//session_start();
include('processlogin.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>

<!DOCTYPE html>
<html lang="en">    
	<head>
        <meta charset="utf-8">
        <title>home page</title>
        <meta name="description" content="Search for Houston Apartments For Rent using our extensive apartment database. View photos, floor plans, maps and prices. Find Houston apartment rentals on Eventock and receive a $100 cash back rebate.">
		<meta name="Keywords" content="Houston apartments, Houston apartment, Houston apartment rental, Houston apartment rentals, Houston texas apartments, Houston apartments for rent, Houston tx apartments, apartments in houston, apartments in houston texas, apartment in houston texas, houston texas apartment, apartment in houston, houston tx apartment, apartments in houston tx" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link rel="stylesheet" href="styles/webfonts.css">
		<link rel="stylesheet" href="styles/oocss.css">
		<link rel="stylesheet" href="javascript/plugins/fancySelect/fancySelect.css">
		<link rel="stylesheet" href="javascript/plugins/flexslider/flexslider.css">
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
    </head>
    <body id="homePage"> 
		<p id="skipLink"><a href="#content">Skip navigation</a></p>
		
		<div id="container" class="border-box">
		
			<header id="header" class="all-trans">
				<div class="container">
					
					<p id="navTrigger">
						<span class="bar all-trans">&nbsp;</span>
						<span class="bar all-trans">&nbsp;</span>
						<span class="bar all-trans">&nbsp;</span>
						<a href="javascript:void(0)">&nbsp;</a>
					</p>
					
					<div id="logo" class="onLeft">
						<a href="index.php" title="Eventock.com">
							<img src="images/11.png" alt="Eventock.com" />
						</a>
					</div>
					
					<div id="navigations">
						<div id="banner" class="onRight metamenu">
						
				<div class="options-list">
            <ul>
              <li>
                <a href="signup1.php" class="all-trans">signup</a>

              </li>
              
            </ul>
          </div>
							<div class="options-list">
            <ul>
              <li>
                <a href="login.php" class="all-trans">login</a>
                
              </li>
              
            </ul>
          </div>	

						</div>
						<nav class="onRight" id="navigation">
							<ul>
								<li><a href="#!">About Us</a></li>
								<li><a href="#!">Scholarship</a></li>
								<li><a href="#!">Blog</a></li>
								<li><a href="#!">Terms</a></li>
								<li><a href="#!">Privacy</a></li>
								<li><a href="#!">Contact Us</a></li>
							</ul>
						</nav>
					</div>
					
				</div>
			</header>
			<section id="banner">
				<img src="images/BANNER.png" alt="banner1"  class="bannerImg" />
				<div class="banner-content">
					<h2></h2>
					<form action="filter.php" method="post">
						<fieldset>
							<div class="form-col">
								<input type="text" placeholder="Search entertainers, photographers, party rentals..." class="cityInp" />
							</div>
							
							
							
							
							<div class="form-col search bg-trans">
								<input type="submit" value="" />
							</div>
						</fieldset>
					</form>
					<!--
					<div class="options-list">
						<ul>
							<li>
								<a href="#!" class="all-trans"><strong>Broad</strong> coverage</a>
							</li>
							<li>
								<a href="#!" class="all-trans"><strong>Customized</strong> Service</a>
							</li>
						</ul>
					</div> -->
				</div>
			</section>
			<section id="content">
					<div class="services box">
						<div class="container">
							<div class="box-head">
								<h2>What is Eventock</h2>
								<p>At Eventock.com, we strive to make relocating and searching for your next apartment  Easy, Convenient, and Enjoyable. Our mission at Eventock.com is to provide renters with an easy–to- use website, which offer users a large database of rental optionns.</p>
							</div>
							<div class="service-list-wrapper">
								<ul class="service-list clearfix slides">
									<li class="schedule">
										<figure>
											<div class="pic">
												<div class="pic-inner">
													<img src="images/schedule.png" alt="" />
												</div>
											</div>
											<figcaption class="caption">
												<p>Browse through a variety of vendors in your area. See photos, videos and verified reviews from real clients.</p>
											</figcaption>
										</figure>
									</li>
									<li class="assistance">
										<figure>
											<div class="pic">
												<div class="pic-inner">
													<img src="images/assistance.png" alt="" />
												</div>
											</div>
											<figcaption class="caption">
												<p>Select your favorites and share some details about the event. We'll send out your request to get the ball rolling.</p>
											</figcaption>
										</figure>
									</li>
									<li class="rates">
										<figure>
											<div class="pic">
												<div class="pic-inner">
													<img src="images/rates.png" alt="" />
												</div>
											</div>
											<figcaption class="caption">
												<p>Review customized quotes and evaluate your options. Then talk with the vendors right here on GigMasters.</p>
											</figcaption>
										</figure>
									</li>
								</ul>
							</div>	
							<p class="browse uppercase opacity-trans">
								<a href="#!">Browse cities</a>
							</p>
						</div>	
					</div>
					
					<div class="top-cities box">
						<div class="container">
							<h2>top cities</h2>
							<div class="top-cities-wrapper">
								<ul class="clearfix slides">
									<li>
										<figure>
											<div class="pic">
												<div class="pic-inner">
													<img src="images/temporary/houston.jpg" alt="" />
												</div>
												<div class="info">
													<div class="info-inner">
														<p class="quantity"><mark>100</mark></p>
														<p class="subject">apartments</p>
													</div>
												</div>
											</div>
											<figcaption class="caption gotham-medium">
												<p>Houston</p>
											</figcaption>
										</figure>
									</li>
									<li>
										<figure>
											<div class="pic">
												<div class="pic-inner">
													<img src="images/temporary/dallas.jpg" alt="" />
												</div>
												<div class="info">
													<div class="info-inner">										
														<p class="quantity"><mark>2500</mark></p>
														<p class="subject">apartments</p>
													</div>
												</div>
											</div>
											<figcaption class="caption gotham-medium">
												<p>Dallas</p>
											</figcaption>
										</figure>
									</li>
									<li>
										<figure>
											<div class="pic">
												<div class="pic-inner">
													<img src="images/temporary/houston.jpg" alt="" />
												</div>
												<div class="info">
													<div class="info-inner">										
														<p class="quantity"><mark>400</mark></p>
														<p class="subject">apartments</p>
													</div>
												</div>
											</div>
											<figcaption class="caption gotham-medium">
												<p>Austin</p>
											</figcaption>
										</figure>
									</li>
									<li>
										<figure>
											<div class="pic">
												<div class="pic-inner">
													<img src="images/temporary/fort-worth.jpg" alt="" />
												</div>
												<div class="info">
													<div class="info-inner">										
														<p class="quantity"><mark>500</mark></p>
														<p class="subject">apartments</p>
													</div>
												</div>
											</div>
											<figcaption class="caption gotham-medium">
												<p>Fort Worth</p>
											</figcaption>
										</figure>
									</li>
									<li>
										<figure>
											<div class="pic">
												<div class="pic-inner">
													<img src="images/temporary/dallas.jpg" alt="" />
												</div>
												<div class="info">
													<div class="info-inner">										
														<p class="quantity"><mark>200</mark></p>
														<p class="subject">apartments</p>
													</div>
												</div>
											</div>
											<figcaption class="caption gotham-medium">
												<p>San Antonio</p>
											</figcaption>
										</figure>
									</li>
									<li>
										<figure>
											<div class="pic">
												<div class="pic-inner">
													<img src="images/temporary/houston.jpg" alt="" />
												</div>
												<div class="info">
													<div class="info-inner">										
														<p class="quantity"><mark>50</mark></p>
														<p class="subject">apartments</p>
													</div>
												</div>
											</div>
											<figcaption class="caption gotham-medium">
												<p>Arlington</p>
											</figcaption>
										</figure>
									</li>
								</ul>
							</div>	
						</div>
					</div>
				
			</section>
		</div>	
		<footer id="footer">	
			<div class="container">
				<div class="footer-links">
					<ul>
						<li>
							<a href="#!">About Us</a>
						</li>                                                            
						<li>
							<a href="#!">Scholorship</a>
						</li>
						<li>
							<a href="#!">Blog</a>
						</li>
						<li>
							<a href="#!">Terms</a>
						</li>
						<li>
							<a href="#!">Privacy</a>
						</li>
						<li>
							<a href="#!">Contact Us</a>
						</li> 
					</ul>
				</div>
				<div class="social">
					<ul>
						<li class="">
							<a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i>
</a>
						</li>
						<li class=" ">
							<a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i>
</a>
						</li>
						<li class=" ">
							<a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i>
</a>
						</li>
						<li class=" ">
							<a href="#!"><i class="fa fa-youtube" aria-hidden="true"></i>
</a>
						</li>
						<li class=" ">
							<a href="#!"><i class="fa fa-instagram" aria-hidden="true"></i>
</a>
						</li>
					</ul>
				</div>
				<div class="copyright">
					<p>&copy; 2017, Eventock.com</p>
				</div>
			</div>
		</footer>
		
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
		<script src="javascript/plugins/fancySelect/fancySelect.js"></script>
		<script>if (!window.jQuery) { document.write('<script src="javascript/vendor/jquery-1.11.2.min.js"><\/script>'); }</script>
		<script src="javascript/plugins/flexslider/jquery.flexslider-min.js"></script>

		<!--[if IE]>
			<script src="javascript/vendor/jquery.placeholder.min.js"></script>
		<![endif]-->
	
		<script src="javascript/main.js"></script>

    </body>
</html>
