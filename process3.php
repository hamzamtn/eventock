<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once ('connect.php');
//print_r($_REQUEST);
if (isset($_POST) & !empty($_POST)) {

//echo "Check this: ".$_SESSION['fname'];
	
 $fname=addslashes(mysqli_real_escape_string($connection,$_SESSION['fname'])); 

$lname=addslashes(mysqli_real_escape_string($connection,$_SESSION['lname']));
$email=addslashes(mysqli_real_escape_string($connection,$_SESSION['email']));
$phone=addslashes(mysqli_real_escape_string($connection,$_SESSION['phone']));

$password=addslashes(mysqli_real_escape_string($connection,$_SESSION['password']));


$city=addslashes(mysqli_real_escape_string($connection,$_SESSION['city']));
$cat=addslashes(mysqli_real_escape_string($connection,$_SESSION['cat']));
$sub_cat=addslashes(mysqli_real_escape_string($connection,$_SESSION['sub_cat']));

$pname=addslashes(mysqli_real_escape_string($connection,$_SESSION['pname']));
$promo=addslashes(mysqli_real_escape_string($connection,$_SESSION['promo']));

$key=md5($email);




 $sql = "INSERT INTO `vender_signup` (fname, lname, email, phone, city, cat, sub_cat, pname, password, promocode, image, activation_key ) VALUES ('$fname', '$lname', '$email','$phone','$city','$cat', '$sub_cat', '$pname', '$password', '$promo', '','$key')";
 "<br />";
$res = mysqli_query($connection, $sql) or die(mysqli_error($connection));

if($res){
		$_SESSION["smsg"] = "Successfully inserted data, Insert New data.";
		


					$to=$email;

					$mess=md5($to);


					$subject = 'verify email';
					$message = "please verify email \r\n eventock.com/process4.php?key='".$mess."' ";
					$message = wordwrap($message, 70, "\r\n");
					$headers = 'From: hamzashafqat@csp.com.pk' . "\r\n" .
					    'Reply-To: hamzashafqat@csp.com.pk' . "\r\n" .
					    'X-Mailer: PHP/' . phpversion();

					mail($to, $subject, $message, $headers);

					echo $message; exit;


					header('location: thankyou.php');


					session_destroy();
					
					}else{
						$_SESSION["fmsg1"] = "Data not inserted, please try again later.";
						header('location: signup3.php');
					}

		
		
		
}


?>