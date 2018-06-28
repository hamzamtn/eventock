<?php
session_start();
include "connect.php";
//include  "session.php";

//$email=$_SESSION['login_user'];
$id=$_SESSION["id"];
$event_type=addslashes(mysqli_real_escape_string($connection,$_POST["event_type"])); 
$vendors=addslashes(mysqli_real_escape_string($connection,$_POST["vendors"]));
$date=addslashes(mysqli_real_escape_string($connection,$_POST["date"]));
$venue=addslashes(mysqli_real_escape_string($connection,$_POST["venue"]));
$location=addslashes(mysqli_real_escape_string($connection,$_POST["location"]));
$guest=addslashes(mysqli_real_escape_string($connection,$_POST["guest"]));
$time=addslashes(mysqli_real_escape_string($connection,$_POST["time"]));
$slenght=addslashes(mysqli_real_escape_string($connection,$_POST["slenght"]));
$det=addslashes(mysqli_real_escape_string($connection,$_POST["det"]));


$CreateSql = "UPDATE `booking` SET event_type='$event_type', vendors='$vendors', date='$date', venue='$venue', location='$location', guest='$guest' , time='$time', slenght='$slenght', det='$det' WHERE id='".$id."'";
		     
		
		$ress = mysqli_query($connection, $CreateSql) or die(mysqli_error($connection));
		

		if($ress){
		$_SESSION["s"] = "Successfully Submitted.";
	
		header('location:event_details.php');
		}else{
			$_SESSION["f"] = "Failed to Submitt.";
			header('location:event_details.php');
		}


				?>