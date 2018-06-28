<?php
session_start();
require_once('connect.php');

if(isset($_POST) & !empty($_POST)){
$id = $_POST['email'];
$password=$_POST['password'];
$password1=md5($password);
$_SESSION['id']=$_POST['email'];


$SelSql = "SELECT * FROM `vender_signup` where email='".$id."' and password='".$password1."'";


$res = mysqli_query($connection, $SelSql);
$r = mysqli_fetch_assoc($res);
if(!empty($r) and $r['status'] =="enable" ){

	if ($r['user_type']=="admin") {


		$_SESSION['login_user']=$id;
	
	header('location: disable_users.php');
		
	}else{
		
	
	header('location: login.php');
	}


	if ($r['user_type']=="user") {


		$_SESSION['login_user']=$id;
	
	header('location: booking_details.php');
		
	}else{
		
	
	header('location: login.php');
	}


	if ($r['user_type']=="vendors") {


		$_SESSION['login_user']=$id;
	
	header('location: profile.php');
		
	}else{
		
	
	header('location: login.php');
	}
	
	 
	
}else {
	
		
	$_SESSION["smsgs"] = "(Invalid user_name or password)";
	header('location: login.php');
		exit;
}
}
?>