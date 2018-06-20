<?php 

session_start();
require_once ('connect.php');


if (isset($_FILES) & !empty($_FILES)) {

	


move_uploaded_file($_FILES["image"]["tmp_name"],"services/" . $_FILES["image"]["name"]);			
 $location=$_FILES["image"]["name"];


  $email=addslashes(mysqli_real_escape_string($connection,$_SESSION['login_user']));



 $sql = "INSERT INTO `images` (email,image ) VALUES ('$email','$location')";
 
$res = mysqli_query($connection, $sql) or die(mysqli_error($connection));

if($res){
		$_SESSION["smsg"] = "Successfully inserted data, Insert New data.";
		header('location: show_image.php');
		
		
		}else{
			$_SESSION["fmsg"] = "Data not inserted, please try again later.";
			header('location: add_images.php');
		}

		
		}
		







 ?>