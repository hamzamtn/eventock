<?php

session_start();
 require_once ('connect.php');
if (isset($_POST) & !empty($_POST)) {


$_SESSION["event_type"]=$_POST['cat'];
 $_SESSION["vendors"]=$_POST['vendor'];

$_SESSION["date"]=$_POST['date'];

	header('Location: book2.php');
}

 $cSelSql = "SELECT * FROM `vender_signup`"; 
 $rec = mysqli_query($connection, $cSelSql);


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

						

						

						<form name="form1"  method="post" onsubmit="return myFunction();">

							<fieldset>

								<p class="legend">Booking step 1</p>

								<div class="cols">

									<div class="form-col">

										<label>i am planing a <span style="color:red" id="demo"> </span></label>

										<input type="text" name="cat" id="cat" />

										

									</div>

									<div class="form-col">

										<label>Date of event <span style="color:red" id="demo1"> </span></label>

										<input type="date" name="date" id="date" />

									</div>

									<div class="form-col">

										<label>vendors <span style="color:red" id="demo2"> </span></label>

										<select name="vendor" id="vendor" style="width: 100%;height: 50px"  >
										      <option value="0">Please select one category</option>
										     
										      
										       <?php 
										    while($rc = mysqli_fetch_assoc($rec)){
										    ?>

										      <option value="<?php echo $rc['email'];?>"><?php echo $rc['fname']." ".$rc['lname']." (".$rc['cat'].")"; ?></option>
										      <?php } ?>
										    </select>

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

<script language="JavaScript" type="text/javascript">


function myFunction() {

    var cat = document.getElementById("cat");
    var date = document.getElementById("date");
   var vendors = document.getElementById("vendors");
  
    var flag_submit = true;
    
    if (cat.value == "") {
        document.getElementById("demo").innerHTML = "Please enter event.";
        document.form1.cat.focus();
        flag_submit = false;
    } else {
        document.getElementById("demo").innerHTML = "";
        document.form1.date.focus();
        
    } 

	if (date.value == "") {
        document.getElementById("demo1").innerHTML = "Please enter date";
        flag_submit = false;
    } else {
        document.getElementById("demo1").innerHTML = "";
        document.form1.vendor.focus();
    } 
    if (vendor.value == "0") {
        document.getElementById("demo2").innerHTML = "Please enter vendor.";
        flag_submit = false;
    } else {
        document.getElementById("demo2").innerHTML = "";
        
    } 
	return flag_submit;
} 


</script>