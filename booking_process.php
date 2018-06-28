<?php


session_start();
require_once ('connect.php');
//print_r($_REQUEST);
if (isset($_POST) & !empty($_POST)) {

$_SESSION["venue"]=$_POST['venue'];
$_SESSION["location"]=$_POST['location'];
$_SESSION["guest"]=$_POST['guest'];
$_SESSION["time"]=$_POST['time'];
$_SESSION["slenght"]=$_POST['slenght'];
$_SESSION["det"]=$_POST['det'];

	
 $event_type=addslashes(mysqli_real_escape_string($connection,$_SESSION['event_type'])); 

$vendors=addslashes(mysqli_real_escape_string($connection,$_SESSION['vendors']));
$date=addslashes(mysqli_real_escape_string($connection,$_SESSION['date']));
$venue=addslashes(mysqli_real_escape_string($connection,$_SESSION['venue']));
$location=addslashes(mysqli_real_escape_string($connection,$_SESSION['location']));
$guest=addslashes(mysqli_real_escape_string($connection,$_SESSION['guest']));
$time=addslashes(mysqli_real_escape_string($connection,$_SESSION['time']));
$slenght=addslashes(mysqli_real_escape_string($connection,$_SESSION['slenght']));
$det=addslashes(mysqli_real_escape_string($connection,$_SESSION['det']));




$email=$_SESSION['login_user'];
 $ReadSql = "SELECT * FROM `vender_signup` where email='".$email."'";

$ress = mysqli_query($connection, $ReadSql);
	
$rw = mysqli_fetch_assoc($ress);
	if($rw['user_type']=="user"){	
	
$user_id=$rw['id'];



 $sql = "INSERT INTO `booking` (event_type, vendors, date, venue, location, guest, time, slenght, det, user_id) VALUES ('$event_type', '$vendors', '$date','$venue','$location','$guest', '$time', '$slenght', '$det','$user_id')";
 
$res = mysqli_query($connection, $sql) or die(mysqli_error($connection));

if($res){
		$_SESSION["fmsg1"] = "Successfully inserted data, Insert New data.";
		

					header('location: book2.php');

					}else{
						$_SESSION["fmsg1"] = "Data not inserted, please try again later.";
						header('location: book2.php');
					}


					}elseif ($rw['user_type'] !="user") {
		header('location: user_signup.php');
	}	
		
}


?>