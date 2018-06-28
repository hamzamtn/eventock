<?php

session_start();

?>
<!DOCTYPE html>

<html lang="en">    

	<head>

        <meta charset="utf-8">

        <title>User Signup</title>

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

		

			<?php include "header.php"; ?>

			

			<section id="content">

				<div class="container">

					<div class="contact-section">

						

						

						<form name="form1"  method="post" action="user_process.php" onsubmit="return myFunction();">

							<fieldset>

								<p class="legend">User Signup <span style="color:red"><?php if(isset($_SESSION['fmsg1'])){ echo $_SESSION['fmsg1']; } unset($_SESSION['fmsg1']); ?></span></p>

								<div class="cols">

									<div class="form-col">

										<label>FIRST NAME<span style="color:red" id="demo"> </span> </label>

										<input type="text" name="fname" id="fname" />

									</div>



									<div class="form-col">

										<label>LAST NAME<span style="color:red" id="demo1"> </span> </label>

										<input type="text" name="lname" id="lname" />

									</div>




									<div class="form-col">

										<label>EMAIL ADDRESS <span style="color:red" id="demo2"> </span></label>

										<input type="text" name="email" id="email" />

									</div>




									<div class="form-col">

										<label>CONFIRM EMAIL ADDRESS <span style="color:red" id="demo3"> </span> </label>

										<input type="text" name="cemail" id="cemail" />

									</div>




									<div class="form-col">

										<label>PHONE NUMBER <span style="color:red" id="demo4"> </span></label>

										<input type="text" name="phone" id="phone" onkeypress="return validatenumerics(event)" />

									</div>


									<div class="clearfix">
										

										<input type="submit" value="continue" name="continue" id="continue" />

										
										

										
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

	var fname = document.getElementById("fname");
	var lname = document.getElementById("lname");
    var email = document.getElementById("email");
    var cemail = document.getElementById("cemail");
    var phone = document.getElementById("phone");
  
  
    var flag_submit = true;
    if (fname.value == "") {
        document.getElementById("demo").innerHTML = "Please enter first name.";
        document.form1.fname.focus();
        flag_submit = false;
    } else {
        document.getElementById("demo").innerHTML = "";
        document.form1.lname.focus();
        
    }
    if (lname.value == "") {
        document.getElementById("demo1").innerHTML = "Please enter last name.";
        
        flag_submit = false;
    } else {
        document.getElementById("demo1").innerHTML = "";
        document.form1.email.focus();
        
    }
    if (email.value == "") {
        document.getElementById("demo2").innerHTML = "Please enter email.";
        
        flag_submit = false;
    } else {
        document.getElementById("demo2").innerHTML = "";
        document.form1.cemail.focus();
        flag_submit = ValidateEmail(document.form1.email.value);
        
        
    }

       if (cemail.value == "") {
        document.getElementById("demo3").innerHTML = "Please enter confirm email.";
        

        
        flag_submit = false;
    } else {
        document.getElementById("demo3").innerHTML = "";
        if (email.value != cemail.value) {

        	document.getElementById("demo3").innerHTML = "Email not matched";
        document.form1.cemail.focus();
        }else{

        	document.form1.phone.focus();
        }
         	
    }
    
    if (phone.value == "") {
        document.getElementById("demo4").innerHTML = "Please enter phone number.";
        
        flag_submit = false;
    } else {
        document.getElementById("demo4").innerHTML = "";

        
        
    } 

	
	return flag_submit;
} 


function validatenumerics(key) {
           //getting key code of pressed key
           var keycode = (key.which) ? key.which : key.keyCode;
           //comparing pressed keycodes

           if (keycode > 31 && (keycode < 48 || keycode > 57)) {
               document.getElementById("demo4").innerHTML = "Please enter numeric number.";
               return false;
           }
           else{
           	document.getElementById("demo3").innerHTML = "";
           	return true;
           } 


       }


       function ValidateEmail(inputText) 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(inputText))
  {
    return true;
  }
 	document.getElementById("demo2").innerHTML = "Please enter valid email id.";
 	document.form1.email.focus();
    return false;
}


</script>