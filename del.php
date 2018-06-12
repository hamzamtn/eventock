
<?php
session_start();
include "connect.php";
include  "session.php";

$email=$_SESSION['login_user'];


  $a=$_GET['cat_id']; 

//echo "<script>alert($a);</script>";


if(isset($_GET) & !empty($_GET)) {
	
 

echo $sql = "UPDATE `basic_info` SET image=''  WHERE email='".$email."' ";
 $res = mysqli_query($connection, $sql) or die(mysqli_error($connection));
exit;
header('location:profile.php');

?>


 } ?>

