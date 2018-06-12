<?php

$connection = mysqli_connect('localhost', 'eventoc1_umsuser', '{9{gj=oNQSIeONE');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$selectdb = mysqli_select_db($connection, 'eventoc1_umsdb');
if (!$selectdb){
    die("Database Selection Failed" . mysqli_error($connection));
}
?>



