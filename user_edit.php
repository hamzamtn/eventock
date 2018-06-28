<?php
session_start();

 require_once ('connect.php');
  include  "session.php";

$email=$_SESSION['login_user'];


 $ReadSql = "SELECT * FROM `vender_signup` where email='".$email."'";

$rses = mysqli_query($connection, $ReadSql);
	
$rsa = mysqli_fetch_assoc($rses);
	if($rsa['user_type'] !="admin"){	
	header('location: profile.php');
	}elseif ($rw['user_type']=="user") {
		header('location: booking_details.php');
	}
 

if (isset($_REQUEST['delimage']))
{
  $del_sql = "UPDATE `vender_signup` SET image=''  WHERE email='".$email."' ";
  mysqli_query($connection, $del_sql);
  //exit();
  header('location:edit_profile.php');
}



 $a= $_GET['en']; 

  


$select = "SELECT * FROM `vender_signup` where id='".$a."'";
$SelSql = "SELECT * FROM `allowed_fields`";
$rSelSql = "SELECT * FROM `required_fields`";
$cSelSql = "SELECT * FROM `category`";
$select = mysqli_query($connection, $select);


$ress = mysqli_query($connection, $SelSql);
$res = mysqli_query($connection, $rSelSql);
$rec = mysqli_query($connection, $cSelSql);

$select = mysqli_fetch_assoc($select);{
$rs = mysqli_fetch_assoc($res);{

$r = mysqli_fetch_assoc($ress);{

 

?>


<!DOCTYPE html>

<html lang="en">    

	<head>

        <meta charset="utf-8">

        <title>Edit User Profile</title>

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

						

							

						<form name="form1" action="user_edit_process.php" method="post" enctype="multipart/form-data">

							<fieldset>
								<p class="legend">Edit Profile </p>

								<?php if($select['image'] !=""){ ?>

								<div class="cols">

									<div class="form-col">

										<label>Profile Image</label>
										<img  src="uploads/<?php  echo $select['image'];  ?>">

										<input type="button" value="Delete Image" id="del" style="width:150px;color: #fff;background: #004c83;" onclick="location.href='/edit_profile.php?delimage=true';" />

									</div><?php } ?>

								

									<?php if($r['fname']=="true"){ ?>

									<div class="form-col">

										<label>First Name</label>

										<input type="text"  name="fname" id="fname" placeholder="First Name"  value="<?php echo $select['fname']; ?>" />

									</div> <?php } ?>

									<?php if($r['lname']=="true"){ ?>

									<div class="form-col">

										<label>Last Name</label>

										<input type="text" name="lname" id="lname" placeholder="Last Name"  value="<?php  echo $select['lname'];  ?>" />

									</div><?php } ?>

									

									 <?php if($r['email']=="true"){ ?>
									<div class="form-col">

										<label>Email</label>

										<input type="text"  name="email" id="email" readonly placeholder="Email" value="<?php  echo $select['email'];  ?>" />

									</div><?php } ?>



									

										<input type="hidden"  name="id" id="id" readonly placeholder="Email" value="<?php  echo $select['id'];  ?>" />

									





									<?php if($r['phone']=="true"){ ?>
									<div class="form-col">

										<label>Phone number</label>

										<input type="text"  name="phone" id="phone" onkeypress="return validatenumerics(event)" placeholder="Phone" value="<?php  echo $select['phone']; ?>" />

									</div><?php } ?>


									<?php if($r['city']=="true"){ ?>
									<div class="form-col">

										<label>City</label>

										<input type="text"  name="city" id="city" placeholder="State,city" value="<?php  echo $select['city'];  ?>" />

									</div><?php } ?>


									<?php if($r['cat']=="true"){ ?>
									<div class="form-col">

										<label>Category </label>

										<input type="text"  name="cat" id="cat" placeholder="Category" value="<?php  echo $select['cat'];  ?>" />

									</div><?php } ?>


									<?php if($r['promocode']=="true"){ ?>
									<div class="form-col">

										<label>Profile Name </label>

										<input type="text" name="pname" id="pname" placeholder="Profile Name" value="<?php  echo $select['pname'];  ?>" />

									</div><?php } ?>



									<div class="form-col">

										<label>Select Image</label>

										<input type="file" name="image" />

									</div>
									 <?php } ?>
  									 <?php } ?>
  									 <?php } ?>
  									 

									<div class="clearfix">

										<input type="submit" />
										<input type="button" name="Back" value="Back" onclick="location.href='/disable_users.php';" style="width:150px;color: #fff;background: #004c83; margin-left: 50px"/>

									</div>
									<!--

									<div class="clearfix">

										<input type="button" name="Back" value="Back" onclick="location.href='/profile.php';" style="width:200px;color: #fff;background: #004c83;">

									</div>-->

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
