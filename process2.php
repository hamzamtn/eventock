<?php

session_start();

if ($_POST['Continue'] != "") {


//echo $_POST['sub_cat'];


$val=implode(",",$_POST['sub_cat']);



$_SESSION["sub_cat"]=$val; 



$_SESSION["pname"]=$_POST['pname'];


header('Location: signup3.php');
}

?>