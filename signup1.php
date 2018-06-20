<?php
session_start();

 require_once ('connect.php');
  


$SelSql = "SELECT * FROM `allowed_fields`";
$rSelSql = "SELECT * FROM `required_fields`";
$cSelSql = "SELECT * FROM `category`";

$ress = mysqli_query($connection, $SelSql);
$res = mysqli_query($connection, $rSelSql);
$rec = mysqli_query($connection, $cSelSql);


$rs = mysqli_fetch_assoc($res);{

$r = mysqli_fetch_assoc($ress);{

 

?>


<!DOCTYPE html>

<html lang="en">    

	<head>

        <meta charset="utf-8">

        <title>SignUp Page</title>

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

						

							

						<form name="form1" action="process1.php" method="post" onsubmit="return myFunction();">

							<fieldset>

								<p class="legend" style="color:red"> <?php if(isset($_SESSION['fmsg1'])){ echo $_SESSION['fmsg1']; } unset($_SESSION['fmsg1']); ?></p>

								<div class="cols">

									<?php if($r['fname']=="true"){ ?>

									<div class="form-col">

										<label >First Name* <span style="color:red" id="demo"> </span></label>
										

										<input type="text" name="fname" id="fname"  value="<?php if(isset($_SESSION['fname'])){ echo $_SESSION['fname'];} unset($_SESSION['fname']); ?>" />

									</div><?php } ?>

									 <?php if($r['lname']=="true"){ ?>

									<div class="form-col">

										<label >Last Name* <span style="color:red" id="demo1"> </span></label>

										<input type="text" name="lname" id="lname"  value="<?php if(isset($_SESSION['lname'])){ echo $_SESSION['lname'];} unset($_SESSION['lname']); ?>"   />

									</div><?php } ?>

									 <?php if($r['email']=="true"){ ?>

									<div class="form-col">

										<label >Your Email Address <span style="color:red" id="demo2"> </span></label>

										<input type="text" name="email" id="email"  value="<?php if(isset($_SESSION['email'])){ echo $_SESSION['email'];} unset($_SESSION['email']); ?>"  />

									</div><?php } ?>


									<?php if($r['phone']=="true"){ ?>

									<div class="form-col">

										<label >Phone <span style="color:red" id="demo3"> </span></label>

										<input type="text"name="phone" id="phone" onkeypress="return validatenumerics(event)" value="<?php if(isset($_SESSION['phone'])){ echo $_SESSION['phone'];} unset($_SESSION['phone']);?>"   />

									</div><?php } ?>

									<?php if($r['cpassword']=="true"){ ?>


									<div class="form-col">

										<label >Password <span style="color:red" id="demo4"> </span></label>

										<input type="password" type="password" name="password" id="password" />

									</div><?php } ?>

									 <?php if($r['cpassword']=="true"){ ?>


									<div class="form-col">

										<label >Confirm Password <span style="color:red" id="demo5"> </span></label>

										<input type="password"  name="cpassword" id="cpassword"   />

									</div><?php } ?>

									 <?php if($r['city']=="true"){ ?>


									<div class="form-col">

										<label >City,State <span style="color:red" id="demo6"> </span></label>

										<input type="text"  name="city" id="city" value="<?php if(isset($_SESSION['city'])){ echo $_SESSION['city'];} unset($_SESSION['city']); ?>"  />

									</div><?php } ?>


									<?php if($r['cat']=="true"){ ?>


									<div class="form-col">

										<label >Category <span style="color:red" id="demo7"> </span></label>

										<select name="cat" id="cat" style="width: 100%;height: 50px"  >
      <option value="0">Please select one category</option>
       <?php 
    while($rc = mysqli_fetch_assoc($rec)){
    ?>
      <option><?php echo $rc['cate_name']; ?></option>
      <?php } ?>
    </select>

									</div><?php } ?>

									<?php if($r['promocode']=="true"){ ?>


									<div class="form-col">

										<label>Promocode</label>

										<input type="text"  name="promo" id="promo" value="<?php if(isset($_SESSION['promo'])){ echo $_SESSION['promo'];} unset($_SESSION['promo']); ?>" />

									</div><?php } ?>
									<?php } ?>
  <?php } ?>

									

									<div class="clearfix">

										<input type="submit" name="Signup" value="Continue" />

									</div>

								</div>

							</fieldset>

						</form>

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

		<script>if (!window.jQuery) { document.write('<script src="javascript/vendor/jquery-1.11.2.min.js"><\/script>'); }</script>



		<!--[if IE]>

			<script src="javascript/vendor/jquery.placeholder.min.js"></script>

		<![endif]-->

	

		<script src="javascript/main.js"></script>



    </body>

</html>

<script language="JavaScript" type="text/javascript">

function myFunction() {

    var inpObj = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var email = document.getElementById("email");
    var phone = document.getElementById("phone");
    var password = document.getElementById("password");
    var cpassword = document.getElementById("cpassword");
    var city = document.getElementById("city");
    var cat = document.getElementById("cat");
  
    var flag_submit = true;
    
    if (inpObj.value == "") {
        document.getElementById("demo").innerHTML = "Please enter first name.";
        document.form1.fname.focus();
        flag_submit = false;
    } else {
        document.getElementById("demo").innerHTML = "";
        document.form1.lname.focus();
        Validate();
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
        document.form1.phone.focus();
        flag_submit = ValidateEmail(document.form1.email.value);
    } 
    if (phone.value == "") {
        document.getElementById("demo3").innerHTML = "Please enter phone number.";
        flag_submit = false;
    } else {
        document.getElementById("demo3").innerHTML = "";
        document.form1.password.focus();
    } 
    if (password.value == "") {
        document.getElementById("demo4").innerHTML = "Please enter password.";
        flag_submit = false;
    } else {
        document.getElementById("demo4").innerHTML = "";
        document.form1.cpassword.focus();
       flag_submit =  ValidatemyForm(document.form1.password);
    } 
    if (cpassword.value == "") {
        document.getElementById("demo5").innerHTML = "Please enter password again.";
        flag_submit = false;
    } else {
        document.getElementById("demo5").innerHTML = "";

        if (password.value != cpassword.value) {

        	document.getElementById("demo5").innerHTML = "Password not matched";
        document.form1.cpassword.focus();
        }else{

        	document.form1.city.focus();
        }


        
    } 
    if (city.value == "") {
        document.getElementById("demo6").innerHTML = "Please enter city,state.";
        flag_submit = false;
    } else {
        document.getElementById("demo6").innerHTML = "";
        document.form1.cat.focus();
    } 
    if (cat.value =="0") {
      
        document.getElementById("demo7").innerHTML = "Please select category.";
        flag_submit = false;
      
    } else {
        document.getElementById("demo7").innerHTML = "";

    } 
	return flag_submit;
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
/*
function ValidateEmail(inputText)
{
	alert(inputText);
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(inputText.value.match(mailformat))
	{
		//document.form1.email.focus();
		return true;
	}
	else
	{
		document.form1.email.focus();
		return false;
	}
}  
*/
function Validate() 
{
    var val =  document.getElementById('fname').value;
    
    
    if (!val.match(/^[a-zA-Z\s]+$/)) 
    {
    	document.getElementById("demo").innerHTML = "Only alphabets are allowed";
        
        return false;
    }
    
    return true;
}



function validatenumerics(key) {
           //getting key code of pressed key
           var keycode = (key.which) ? key.which : key.keyCode;
           //comparing pressed keycodes

           if (keycode > 31 && (keycode < 48 || keycode > 57)) {
               document.getElementById("demo3").innerHTML = "Please enter numeric number.";
               return false;
           }
           else{
           	document.getElementById("demo3").innerHTML = "";
           	return true;
           } 


       }

function ValidatemyForm(inputText)
{
if (inputText.value.length < 8)

{
	document.getElementById("demo4").innerHTML = "Please enter at least 8 characters in this field.";
   
   form1.password.focus();
   return false;
}else{
document.getElementById("demo4").innerHTML = "";
	return true;
}

}



</script>