<?php
session_start();
include "connect.php";
include  "session.php";

$email=$_SESSION['login_user'];
 move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);			
$location=$_FILES["image"]["name"];
$fname=addslashes(mysqli_real_escape_string($connection,$_POST["fname"])); 
$lname=addslashes(mysqli_real_escape_string($connection,$_POST["lname"]));
$eemail=addslashes(mysqli_real_escape_string($connection,$_POST["id"]));
$phone=addslashes(mysqli_real_escape_string($connection,$_POST["phone"]));

$password=addslashes(mysqli_real_escape_string($connection,$_POST["password"]));


$city=addslashes(mysqli_real_escape_string($connection,$_POST["city"]));
$cat=addslashes(mysqli_real_escape_string($connection,$_POST["cat"]));
$sub_cat=addslashes(mysqli_real_escape_string($connection,$_POST["sub_cat"]));

$pname=addslashes(mysqli_real_escape_string($connection,$_POST["pname"]));
$promo=addslashes(mysqli_real_escape_string($connection,$_POST["promo"]));


	if($location != ""){


$CreateSql = "UPDATE `vender_signup` SET fname='$fname', lname='$lname',  phone='$phone', city='$city', cat='$cat' , promocode='$promo', pname='$pname', image='$location' WHERE id='".$eemail."'";
		     
		
		$ress = mysqli_query($connection, $CreateSql) or die(mysqli_error($connection));
		

		if($ress){
		$_SESSION["s"] = "Successfully Submitted.";
	
		header('location:disable_users.php');
		}else{
			$_SESSION["f"] = "Failed to Submitt.";
			header('location:disable_users.php');
		}


}else{
	$CreateSql = "UPDATE `vender_signup` SET fname='$fname', lname='$lname', phone='$phone', city='$city', cat='$cat' , promocode='$promo', pname='$pname'  WHERE id='".$eemail."'";
		     
		
		$ress = mysqli_query($connection, $CreateSql) or die(mysqli_error($connection));
				


		if($ress){
		$_SESSION["s"] = "Successfully Submitted.";
		
		header('location:disable_users.php');
		}else{
			$_SESSION["f"] = "Failed to Submitt.";
			header('location:disable_users.php');
		}

		}

				?>