<?php 

require_once ('connect.php');
 $key=$_GET['key'];

 $key=substr($key,1);


$SelSql = "SELECT * FROM `vender_signup` where activation_key='".$key."'";
$Sel = mysqli_query($connection, $SelSql);
$rSel = mysqli_fetch_assoc($Sel);

$email=$rSel['email'];
if(!empty($rSel)){

 $status="T";

 $CreateSql = "UPDATE `vender_signup` SET activation_status='$status' WHERE email='".$email."'";
		     
		
		$ress = mysqli_query($connection, $CreateSql) or die(mysqli_error($connection));
		

		if($ress){

			$_SESSION["smsgs"] = "Activation Sucessfull.";



			$to=$email;

					


					$subject = 'Admin confirmation';
					$message = "Your email has been send to admin for further confirmation\r\n ";
					$message = wordwrap($message, 70, "\r\n");
					$headers = 'From: hamzashafqat@csp.com.pk' . "\r\n" .
					    'Reply-To: hamzashafqat@csp.com.pk' . "\r\n" .
					    'X-Mailer: PHP/' . phpversion();

					mail($to, $subject, $message, $headers);

					





		header('location:login.php');
		}else{
			$_SESSION["smsgs"] = "Activation Failed.";
			header('location:login.php');
		}



}else{
	$_SESSION["smsgs"] = "Activation Failed.";
			header('location:login.php');
}


?>