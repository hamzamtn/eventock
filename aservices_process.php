<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
 

require_once ('connect.php');
include  "session.php";


if (isset($_POST) & !empty($_POST)) {

	
 $aservice=addslashes(mysqli_real_escape_string($connection,$_POST['aservice'])); 

$cost=addslashes(mysqli_real_escape_string($connection,$_POST['cost']));
$desc=addslashes(mysqli_real_escape_string($connection,$_POST['desc']));
$city=addslashes(mysqli_real_escape_string($connection,$_POST['city']));
$country=addslashes(mysqli_real_escape_string($connection,$_POST['country']));
$distance=addslashes(mysqli_real_escape_string($connection,$_POST['distance']));

move_uploaded_file($_FILES["image"]["tmp_name"],"services/" . $_FILES["image"]["name"]);			
$location=$_FILES["image"]["name"];


$email=addslashes(mysqli_real_escape_string($connection,$_SESSION['login_user']));



 $sql = "INSERT INTO `add_services` (aservice, cost, description, city, distance, image, email, country) VALUES ('$aservice', '$cost', '$desc','$city','$distance','$location', '$email', '$country')";
 
$res = mysqli_query($connection, $sql) or die(mysqli_error($connection));

if($res){
		$_SESSION["smsg"] = "Successfully inserted data, Insert New data.";
		header('location: add_services.php');
		
		
		}else{
			$_SESSION["fmsg"] = "Data not inserted, please try again later.";
			header('location: add_services.php');
		}

		
		
		
}


?>