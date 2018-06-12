<?php
session_start();
 require_once ('connect.php');

 if(isset($_SESSION['smsg2'])){
  echo $_SESSION['smsg2'];
  session_destroy();
  }
  unset($_SESSION['smsg2']);
  
 if(isset($_SESSION['fmsg2'])){ 
 echo $_SESSION['fmsg2'];
 }  
 unset($_SESSION['fmsg2']);

$SelSql = "SELECT * FROM `allowed_fields`";


$rSql = mysqli_query($connection, $SelSql);




$rSql = mysqli_fetch_assoc($rSql);{
 

?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<h1 >Selection of required option</h1>
</head>

<body>
<form method="post" action="requiredpro.php">
<table width="60%" border="1" cellspacing="10" cellpadding="10">
  <tr>

<?php if($rSql['fname']=="true"){ ?>
    <td>First Name:<select name="fname"  id="fname" style="width: 50%; margin-left:25px; " required>
      <option value="true">True</option>
      <option value="false">False</option>
    </select></td>
<?php } ?>
  

  
<?php if($rSql['lname']=="true"){ ?>
    <td>Last Name:<select name="lname"  id="lname" style="width: 50%; margin-left:53px;" required>
      <option value="true">True</option>
      <option value="false">False</option>
    </select></td>
 <?php } ?>

  </tr>
  <tr>
   <?php if($rSql['email']=="true"){ ?>
    <td>Email:<select name="email"  id="email" style="width: 50%; margin-left:57px;" required>
      <option value="true">True</option>
      <option value="false">False</option>
    </select></td>
<?php } ?>
   <?php if($rSql['phone']=="true"){ ?>
    <td>Phone Number:<select name="phone"  id="phone" style="width: 50%; margin-left:25px;" required>
      <option value="true">True</option>
      <option value="false">False</option>
    </select></td>
    <?php } ?>
  </tr>
  <tr>
    <?php if($rSql['password']=="true"){ ?>
    <td>Password:<select name="password"  id="password" style="width: 50%; margin-left:33px;" required>
      <option value="true">True</option>
      <option value="false">False</option>
    </select></td>
    
<?php } ?>
    <?php if($rSql['cpassword']=="true"){ ?>
    <td>Confirm Password:<select name="cpassword"  id="cpassword" style="width: 50%; margin-left:3px;" required>
      <option value="true">True</option>
      <option value="false">False</option>
    </select></td>
  <?php } ?>
  </tr>
  <tr>
 <?php if($rSql['city']=="true"){ ?>
    <td>City: <select name="city"  id="city" style="width: 50%; margin-left:62px;" required>
      <option value="true">True</option>
      <option value="false">False</option>
    </select></td>
    <?php } ?>

    <?php if($rSql['cat']=="true"){ ?>
    <td>Category:<select name="cat"  id="cat" style="width: 50%; margin-left:63px;" required>
      <option value="true">True</option>
      <option value="false">False</option>
    </select></td>
    <?php } ?>
  </tr>
   <tr>
    <?php if($rSql['promocode']=="true"){ ?>
    <td>Promocode:<select name="promo"  id="promo" style="width: 50%; margin-left:21px;" required>
      <option value="true">True</option>
      <option value="false">False</option>
    </select></td>
<?php } ?>
<?php if($rSql['sub_cat']=="true"){ ?>
    <td>Sub Category:<select name="sub_cat"  id="sub_cat" style="width: 50%; margin-left:35px;" required>
      <option value="true">True</option>
      <option value="false">False</option>
    </select></td>
   <?php } ?>
  </tr>


 <tr>
    <?php if($rSql['dob']=="true"){ ?>
    <td>Promocode:<select name="dob"  id="dob" style="width: 50%; margin-left:21px;" required>
      <option value="true">True</option>
      <option value="false">False</option>
    </select></td>
<?php } ?>
<?php if($rSql['work_desc']=="true"){ ?>
    <td>Sub Category:<select name="wd"  id="wd" style="width: 50%; margin-left:35px;" required>
      <option value="true">True</option>
      <option value="false">False</option>
    </select></td>
   <?php } ?>
  </tr>

  <tr>

    <?php if($rSql['pname']=="true"){ ?>
    <td>Profile Name:<select name="pname"  id="pname" style="width: 50%; margin-left:7px;" required>
      <option value="true">True</option>
      <option value="false">False</option>
    </select></td>
    <?php } ?>
  </tr>
  <?php } ?>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">By entering information and clicking 'Start Now', you agree to the terms of GigMasters User Agreement and Privacy Policy.</td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
    
      <input type="submit" name="Update" value="Update" style="width:50%">
    </div></td>
  </tr>
  </table>
</form>
</body>
</html>