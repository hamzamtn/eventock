<?php
session_start();
require_once ('connect.php');

if ($_POST['Signup'] != "") {


$_SESSION["fname"]=$_POST['fname'];
$fname=$_SESSION["fname"];

$_SESSION["lname"]=$_POST['lname'];
$lname=$_SESSION["lname"];

$password=$_POST['password'];

$password=md5($password);
$_SESSION["password"]=$password;

$cpassword=$_POST['cpassword'];
$cpassword=md5($cpassword);


$_SESSION["cpassword"]=$cpassword;

$_SESSION["phone"]=$_POST['phone'];
$phone=$_SESSION["phone"];
$_SESSION["city"]=$_POST['city'];
$city=$_SESSION["city"];
$_SESSION["cat"]=$_POST['cat'];
$cat=$_SESSION["cat"];




 $_SESSION["promo"]=$_POST['promo'];
$promo=$_SESSION["promo"];


$_SESSION["email"]=$_POST['email'];
$email=$_SESSION["email"];


$SelSql = "SELECT * FROM `vender_signup` where email='".$email."'";

//echo $SelSql;exit;

$Sel = mysqli_query($connection, $SelSql);
$rSel = mysqli_fetch_assoc($Sel);


if(empty($rSel)){


	
	


if($password==$cpassword ){

	if ($fname !=" " or $lname !=" " or $email !=" " or $phone !=" " or $password !=" " or $cpassword !=" " or $city !=" ") {
		header('Location: signup2.php');
	}else {
$_SESSION["fmsg1"] = "Please enter or select required fields.";
	header('Location: signup1.php');
}


if ($cat !="0") {
		header('Location: signup2.php');
	}else {
$_SESSION["fmsg1"] = "Please select category.";
	header('Location: signup1.php');
}

	
}else {
$_SESSION["fmsg1"] = "Password & Confirm Password not matched.";
	header('Location: signup1.php');
}

}else{
	$_SESSION["fmsg1"] = "Email already exist, try another one";
	header('Location: signup1.php');
		exit;
		}
		

}


?>