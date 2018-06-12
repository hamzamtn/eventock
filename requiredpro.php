<?php
session_start();
require_once ('connect.php');

if ($_POST['Update'] != "") {
	
	
$fname=addslashes(mysqli_real_escape_string($connection,$_POST['fname'])); 
$lname=addslashes(mysqli_real_escape_string($connection,$_POST["lname"]));
$email=addslashes(mysqli_real_escape_string($connection,$_POST["email"]));
$phone=addslashes(mysqli_real_escape_string($connection,$_POST["phone"]));

$password=addslashes(mysqli_real_escape_string($connection,$_POST["password"]));
$cpassword=addslashes(mysqli_real_escape_string($connection,$_POST["cpassword"]));


$city=addslashes(mysqli_real_escape_string($connection,$_POST["city"]));
$cat=addslashes(mysqli_real_escape_string($connection,$_POST["cat"]));
$sub_cat=addslashes(mysqli_real_escape_string($connection,$_POST["sub_cat"]));

$pname=addslashes(mysqli_real_escape_string($connection,$_POST["pname"]));
$promo=addslashes(mysqli_real_escape_string($connection,$_POST["promo"]));
$dob=addslashes(mysqli_real_escape_string($connection,$_POST["dob"]));
$wd=addslashes(mysqli_real_escape_string($connection,$_POST["wd"]));




$sql = "UPDATE `required_fields` SET fname='$fname', lname='$lname', email='$email', phone='$phone',city='$city', cat='$cat', sub_cat='$sub_cat', password='$password', cpassword='$cpassword', pname='$pname', promocode='$promo', dob='$dob', wd='$wd' WHERE id='1'";


$res = mysqli_query($connection, $sql) or die(mysqli_error($connection));

if($res){
		$_SESSION["smsg2"] = "Successfully updated";
		
		
		
		}else{
			$_SESSION["fmsg2"] = "Not updated";
			
		}

		header('Location: required.php');
		
}


?>