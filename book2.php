<?php

session_start();




?>
<!DOCTYPE html>

<html lang="en">    

	<head>

        <meta charset="utf-8">

        <title>booking</title>

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

    </head>

    <body id="contactPage"> 




		<p id="skipLink"><a href="#content">Skip navigation</a></p>

		

		<div id="container" class="border-box">

		

			<?php $email=$_SESSION['login_user']; 
			if(!empty($email)){
			  include "login_header.php"; 
			}else{
				include "header.php"; 
			}
			?>

			

			<section id="content">

				<div class="container">

					<div class="contact-section">

						

						

						<form name="form1"  method="post" action="booking_process.php" onsubmit="return myFunction();">

							<fieldset>

								<p class="legend">Booking step 2 <span style="color:red"><?php if(isset($_SESSION['fmsg1'])){ echo $_SESSION['fmsg1']; } unset($_SESSION['fmsg1']); ?></span></p>

								<div class="cols">

									<div class="form-col">

										<label>EVENT VENUE <span style="color:red" id="demo"> </span></label>

										<input type="text" name="venue" id="venue" />

									</div>



									<div class="form-col">

										<label>EVENT LOCATION <span style="color:red" id="demo1"> </span></label>

										<input type="text" name="location" id="location" />

									</div>

									<div class="form-col">

										<label>NUMBER OF GUESTS<span style="color:red" id="demo2"> </span></label>

										<select name="guest" id="guest" style="width: 100%;height: 50px"  >
										      <option value="0">Please select</option>
										     
										      <option>less than 25</option>
										      <option>25-49</option>
										      <option>50-99</option>
										      <option>199-149</option>
										      <option>150-199</option>
										      <option>200-249</option>
										    </select>

									</div>

									

									<div class="form-col">

										<label>VENDOR START TIME<span style="color:red" id="demo3"> </span></label>

										<select name="time" id="time" style="width: 100%;height: 50px"  >
										      <option value="0">Please select </option>
										     
										      <option>12pm</option>
										      <option>12.30pm</option>
										      <option>1.00pm</option>
										      <option>1.30pm</option>
										      <option>2.00pm</option>
										      <option>2.30pm</option>
										    </select>

									</div>
									<div class="form-col">

										<label>VENDOR SERVICE LENGTH <span style="color:red" id="demo4"> </span></label>

										<select name="slenght" id="slenght" style="width: 100%;height: 50px"  >
										      <option value="0">Please select </option>
										     
										      <option>15min</option>
										      <option>30min</option>
										      <option>45min</option>
										      <option>1hr</option>
										      <option>1.30hr</option>
										      <option>2.00hr</option>
										    </select>

									</div>
									<div class="form-full-col">

										<label>Event details <span style="color:red" id="demo5"> </span></label>

										<textarea name="det" id="det"></textarea>

									</div>


								

									

									<div class="clearfix">
										

										<input type="submit" value="continue" name="continue" id="continue" />

										<input type="button" name="Back" value="Back" onclick="location.href='/book1.php';" style="width:150px;color: #fff;background: #004c83; margin-left: 50px"/>
										

										
									</div>

									

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

<script type="text/javascript">


function myFunction() {

    var venue = document.getElementById("venue");
    var location = document.getElementById("location");
    var guest = document.getElementById("guest");
    var time = document.getElementById("time");
    var slenght = document.getElementById("slenght");
    var det = document.getElementById("det");
   
  
    var flag_submit = true;
    
    if (venue.value == "") {
        document.getElementById("demo").innerHTML = "Please enter venue.";
        document.form1.venue.focus();
        flag_submit = false;
    } else {
        document.getElementById("demo").innerHTML = "";
        document.form1.location.focus();
        
    } 

	if (location.value == "") {
        document.getElementById("demo1").innerHTML = "Please enter location.";
        flag_submit = false;
    } else {
        document.getElementById("demo1").innerHTML = "";
        document.form1.guest.focus();
    } 
    if (guest.value == "0") {
        document.getElementById("demo2").innerHTML = "Please select guest.";
        flag_submit = false;
    } else {
        document.getElementById("demo2").innerHTML = "";
        document.form1.time.focus();
    } 
    if (time.value == "0") {
        document.getElementById("demo3").innerHTML = "Please seelct time.";
        flag_submit = false;
    } else {
        document.getElementById("demo3").innerHTML = "";
        document.form1.slenght.focus();
    } 
    if (slenght.value == "0") {
        document.getElementById("demo4").innerHTML = "Please select length.";
        flag_submit = false;
    } else {
        document.getElementById("demo4").innerHTML = "";
        document.form1.det.focus();
    } 
    if (det.value == "") {
        document.getElementById("demo5").innerHTML = "Please enter details.";
        flag_submit = false;
    } else {
        document.getElementById("demo5").innerHTML = "";
        
    } 
	return flag_submit;
} 


</script>