<?php
session_start();
require_once ('connect.php');

if (isset($_POST) & !empty($_POST)) {

$email=$_SESSION['login_user'];
 $ReadSql = "SELECT * FROM `vender_signup` where email='".$email."'";

$ress = mysqli_query($connection, $ReadSql);
	
$rw = mysqli_fetch_assoc($ress);
	if($rw['user_type'] !="user"){	


$_SESSION["fname"]=$_POST['fname'];
$_SESSION["lname"]=$_POST['lname'];
$_SESSION["email"]=$_POST['email'];
$_SESSION["cemail"]=$_POST['cemail'];
$_SESSION["phone"]=$_POST['phone'];


$fname=addslashes(mysqli_real_escape_string($connection,$_SESSION['fname']));
$lname=addslashes(mysqli_real_escape_string($connection,$_SESSION['lname']));
$email=addslashes(mysqli_real_escape_string($connection,$_SESSION['email']));
$cemail=addslashes(mysqli_real_escape_string($connection,$_SESSION['cemail']));
$phone=addslashes(mysqli_real_escape_string($connection,$_SESSION['phone']));
$usertype="user";

$password=md5("asadasad");

$SelSql = "SELECT * FROM `vender_signup` where email='".$email."'";


$Sel = mysqli_query($connection, $SelSql);
$rSel = mysqli_fetch_assoc($Sel);


if(empty($rSel)){


if($email==$cemail ){


	if ($fname !="" and $lname !="" and $email !="" and $phone !="") {
		
		

 $sql = "INSERT INTO `vender_signup` (fname, lname, email, phone, city, cat, sub_cat, pname, password, promocode, image, activation_key, activation_status, status , user_type ) VALUES ('$fname', '$lname', '$email','$phone','','', '', '', '$password', '', '','', 'T','enable' ,'$usertype')";
$res = mysqli_query($connection, $sql) or die(mysqli_error($connection));

if($res){
	
		$_SESSION["fmsg1"] = "Successfully inserted data, Insert New data.";
		
$eemail=$_SESSION['login_user'];
if (empty($eemail)) {
	
					
$event_type=addslashes(mysqli_real_escape_string($connection,$_SESSION['event_type'])); 
$vendors=addslashes(mysqli_real_escape_string($connection,$_SESSION['vendors']));
$date=addslashes(mysqli_real_escape_string($connection,$_SESSION['date']));
$venue=addslashes(mysqli_real_escape_string($connection,$_SESSION['venue']));
$location=addslashes(mysqli_real_escape_string($connection,$_SESSION['location']));
$guest=addslashes(mysqli_real_escape_string($connection,$_SESSION['guest']));
$time=addslashes(mysqli_real_escape_string($connection,$_SESSION['time']));
$slenght=addslashes(mysqli_real_escape_string($connection,$_SESSION['slenght']));
$det=addslashes(mysqli_real_escape_string($connection,$_SESSION['det']));


 $ReadSql = "SELECT * FROM `vender_signup` where email='".$email."'";

$ress = mysqli_query($connection, $ReadSql);
	
$rw = mysqli_fetch_assoc($ress);

$user_id=$rw['id'];


 $sql = "INSERT INTO `booking` (event_type, vendors, date, venue, location, guest, time, slenght, det, user_id) VALUES ('$event_type', '$vendors', '$date','$venue','$location','$guest', '$time', '$slenght', '$det','$user_id')";
 
$res = mysqli_query($connection, $sql) or die(mysqli_error($connection));

if($res){
		$_SESSION["fmsg1"] = "Successfully inserted data.";
		

					header('location: user_signup.php');

					}else{
						$_SESSION["fmsg1"] = "Data not inserted, please try again later.";
						header('location: user_signup.php');
					}

}
					
	


					
					
					}else{

						
						$_SESSION["fmsg1"] = "Data not inserted, please try again later.";
						header('location: user_signup.php');
					}


	}else {
		
$_SESSION["fmsg1"] = "Please enter or select required fields.";
	header('Location: user_signup.php');
}

}else{

	
	$_SESSION["fmsg1"] = "Email not matched";
	header('Location: user_signup.php');
		exit;
		}
		

}else{

	
	$_SESSION["fmsg1"] = "Email already exist, try another one";
	header('Location: user_signup.php');
		exit;
		}
	}

}
?>