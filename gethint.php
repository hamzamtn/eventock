<!DOCTYPE html>
<html>
<body>

<?php
require_once ('connect.php');


  $a=$_GET['cat_id']; 

//echo "<script>alert($a);</script>";
$a=substr($a,4);

if(isset($_GET) & !empty($_GET)) {
	
	
$ReadSql = "SELECT * FROM `sub_category` where cat='$a'";
$res = mysqli_query($connection, $ReadSql);



echo "<br />";
while ($r = mysqli_fetch_array($res))
{ ?>

<select name="sub_cat" style="width:100%; height:200px; " multiple required>

  <option><?php echo $r['sub_cat_desc']; ?></option>
  
</select>

<?php } ?>

<?php } ?>

</body>
</html>