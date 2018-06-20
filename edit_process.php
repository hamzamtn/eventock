<?php
session_start();
include "connect.php";
include  "session.php";

$email=$_SESSION['login_user'];
 move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);			
$location=$_FILES["image"]["name"];
$fname=addslashes(mysqli_real_escape_string($connection,$_POST["fname"])); 
$lname=addslashes(mysqli_real_escape_string($connection,$_POST["lname"]));
$eemail=addslashes(mysqli_real_escape_string($connection,$_POST["email"]));
$phone=addslashes(mysqli_real_escape_string($connection,$_POST["phone"]));

$password=addslashes(mysqli_real_escape_string($connection,$_POST["password"]));


$city=addslashes(mysqli_real_escape_string($connection,$_POST["city"]));
$cat=addslashes(mysqli_real_escape_string($connection,$_POST["cat"]));
$sub_cat=addslashes(mysqli_real_escape_string($connection,$_POST["sub_cat"]));

$pname=addslashes(mysqli_real_escape_string($connection,$_POST["pname"]));
$promo=addslashes(mysqli_real_escape_string($connection,$_POST["promo"]));




if ($email==$eemail) {

	if($location != ""){






$CreateSql = "UPDATE `vender_signup` SET fname='$fname', lname='$lname', email='$eemail', phone='$phone', city='$city', cat='$cat' , promocode='$promo', pname='$pname', image='$location' WHERE email='".$email."'";
		     
		$_SESSION['login_user']=$eemail;
		$ress = mysqli_query($connection, $CreateSql) or die(mysqli_error($connection));
		

		if($ress){
		$_SESSION["s"] = "Successfully Submitted.";
	
		header('location:edit_profile.php');
		}else{
			$_SESSION["f"] = "Failed to Submitt.";
			header('location:edit_profile.php');
		}


}else{
	$CreateSql = "UPDATE `vender_signup` SET fname='$fname', lname='$lname', email='$eemail', phone='$phone', city='$city', cat='$cat' , promocode='$promo', pname='$pname'  WHERE email='".$email."'";
		     
		
		$ress = mysqli_query($connection, $CreateSql) or die(mysqli_error($connection));
				
$_SESSION['login_user']=$eemail;

		if($ress){
		$_SESSION["s"] = "Successfully Submitted.";
		
		header('location:edit_profile.php');
		}else{
			$_SESSION["f"] = "Failed to Submitt.";
			header('location:edit_profile.php');
		}

		}
}else{

$SelSql = "SELECT * FROM `vender_signup` where email='".$eemail."'";
$Sel = mysqli_query($connection, $SelSql);
$rSel = mysqli_fetch_assoc($Sel);


if(empty($rSel)){


if($location != ""){






$CreateSql = "UPDATE `vender_signup` SET fname='$fname', lname='$lname', email='$eemail', phone='$phone', city='$city', cat='$cat' , promocode='$promo', pname='$pname', image='$location' WHERE email='".$email."'";
		     
		$_SESSION['login_user']=$eemail;
		$ress = mysqli_query($connection, $CreateSql) or die(mysqli_error($connection));
		

		if($ress){
		$_SESSION["s"] = "Attendence Successfully Submitted.";
	
		header('location:edit_profile.php');
		}else{
			$_SESSION["f"] = "Failed to Submitt.";
			header('location:edit_profile.php');
		}


}else{
	$CreateSql = "UPDATE `vender_signup` SET fname='$fname', lname='$lname', email='$eemail', phone='$phone', city='$city', cat='$cat' , promocode='$promo', pname='$pname'  WHERE email='".$email."'";
		     
		
		$ress = mysqli_query($connection, $CreateSql) or die(mysqli_error($connection));
				
$_SESSION['login_user']=$eemail;

		if($ress){
		$_SESSION["s"] = "Successfully Submitted.";
		
		header('location:edit_profile.php');
		}else{
			$_SESSION["f"] = "Failed to Submitt.";
			header('location:edit_profile.php');
		}

		}



	}else{ 

		
		$_SESSION["f"] = "Email already exist, try another one";
	header('Location: edit_profile.php');
		exit;

	}

}
				?>