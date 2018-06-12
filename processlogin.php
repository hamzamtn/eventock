<?php
session_start();
require_once('connect.php');

//echo "methere";exit;
if(isset($_POST) & !empty($_POST)){
$id = $_POST['email'];
$password=$_POST['password'];
$password1=md5($password);
$_SESSION['id']=$_POST['email'];





$SelSql = "SELECT * FROM `vender_signup` where email='".$id."' and password='".$password1."'";

//echo $SelSql;exit;


$res = mysqli_query($connection, $SelSql);
$r = mysqli_fetch_assoc($res);
if(!empty($r) ){
	
	 $_SESSION['login_user']=$id;
	
	header('location: profile.php');
	
}else {
	
		
	$_SESSION["smsgs"] = "invalid user_name or password";
	header('location: login.php');
		exit;
}
}
?>