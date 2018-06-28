<?php
session_start();

 require_once ('connect.php');
 include  "session.php";

  $id=$_GET['id'];
$_SESSION['id']=$id;

$email=$_SESSION['login_user'];


 $ReadSql = "SELECT * FROM `vender_signup` where email='".$email."'";

$rses = mysqli_query($connection, $ReadSql);
	
$rsa = mysqli_fetch_assoc($rses);
	if($rsa['user_type']=="admin"){	
	header('location: disable_users.php');
	}elseif ($rw['user_type']=="vendors") {
		header('location: profile.php');
	}
 

if (isset($_REQUEST['delimage']))
{
 $a= $_REQUEST['delimage'];

 $del_sql = "DELETE FROM `booking`  WHERE id='".$a."' ";
  mysqli_query($connection, $del_sql);

  header('location:booking_details.php');
}



$select = "SELECT * FROM `booking` where id='".$id."'";

$select = mysqli_query($connection, $select);




$selected = mysqli_fetch_assoc($select);{


 

?>


<!DOCTYPE html>

<html lang="en">    

	<head>

        <meta charset="utf-8">

        <title>Event Details</title>

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

		

			<?php include "login_header.php"; ?>

			

			<section id="content">

				<div class="container">

					<div class="contact-section">

						

							

						<form name="form1" action="update_booking.php" method="post" >

							<fieldset>
								<p class="legend">Edit Profile <span style="color:red"> <?php if(isset($_SESSION['s'])){ echo $_SESSION['s'];}unset($_SESSION['s']);
								if(isset($_SESSION['f'])){ echo $_SESSION['f']; } unset($_SESSION['f']); ?> </span>  </p>

								

								<div class="cols">

									
								

									

									<div class="form-col">

										<label>Event Type</label>

										<input type="text"  name="event_type" id="event_type"   value="<?php echo $selected['event_type']; ?>" />

									</div>

									<div class="form-col">

										<label>Vendor</label>

										<input type="text" name="vendors" id="vendors"  value="<?php  echo $selected['vendors'];  ?>" />

									</div>

									

									
									<div class="form-col">

										<label>Date</label>

										<input type="date"  name="date" id="date" value="<?php  echo $selected['date'];  ?>" />

									</div>





									
									<div class="form-col">

										<label>Venue</label>

										<input type="text"  name="venue" id="venue"  value="<?php  echo $selected['venue']; ?>" />

									</div>


									
									<div class="form-col">

										<label>Location</label>

										<input type="text"  name="location" id="location" value="<?php  echo $selected['location'];  ?>" />

									</div>


									
									<div class="form-col">

										<label>Number of Guest </label>

										<input type="text"  name="guest" id="guest" value="<?php  echo $selected['guest'];  ?>" />

									</div>


									
									<div class="form-col">

										<label>Time </label>

										<input type="text" name="time" id="time" value="<?php  echo $selected['time'];  ?>" />

									</div>


									<div class="form-col">

										<label>Service Time</label>

										<input type="text" name="slenght" id="slenght" value="<?php  echo $selected['slenght'];  ?>" />

									</div>



									<div class="form-full-col">

										<label>Details </label>

										<textarea name="det" id="det"><?php  echo $selected['det'];?> </textarea>

										

									</div>



									
									 <?php } ?>
  									 

									<div class="clearfix">

										<input type="submit" />
<input type="button" name="cancel" value="cancel" onclick="window.location.href='/event_details.php?delimage=<?php echo $selected['id']; ?>';" style="width:150px;color: #fff;background: #004c83; margin-left: 50px;"/>



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
