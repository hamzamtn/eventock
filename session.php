<?php

session_start();// Starting Session
require_once('connect.php');
// Storing Session
$user_check=$_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query( $connection ,"select email from `vender_signup` where email='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['email'];



if(!isset($login_session) ){
mysqli_close($connection); // Closing Connection
header('Location: login.php'); // Redirecting To Home Page
}


?>