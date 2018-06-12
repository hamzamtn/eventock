<?php
session_start();

 require_once ('connect.php');
  
 if(isset($_SESSION['fmsg1'])){ 
 echo $_SESSION['fmsg1'];
 }  
 unset($_SESSION['fmsg1']);


if(isset($_SESSION['smsg'])){
  echo $_SESSION['smsg'];
  session_destroy();
  }
  unset($_SESSION['smsg']);
  
 if(isset($_SESSION['fmsg'])){ 
 echo $_SESSION['fmsg'];
 }  
 unset($_SESSION['fmsg']);



$SelSql = "SELECT * FROM `allowed_fields`";
$rSelSql = "SELECT * FROM `required_fields`";
$cSelSql = "SELECT * FROM `category`";

$ress = mysqli_query($connection, $SelSql);
$res = mysqli_query($connection, $rSelSql);
$rec = mysqli_query($connection, $cSelSql);


$rs = mysqli_fetch_assoc($res);{

$r = mysqli_fetch_assoc($ress);{

 

?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

        <meta charset="utf-8">

        <title>home page</title>

        <meta name="description" content="Search for Houston Apartments For Rent using our extensive apartment database. View photos, floor plans, maps and prices. Find Houston apartment rentals on Eventock and receive a $100 cash back rebate.">

    <meta name="Keywords" content="Houston apartments, Houston apartment, Houston apartment rental, Houston apartment rentals, Houston texas apartments, Houston apartments for rent, Houston tx apartments, apartments in houston, apartments in houston texas, apartment in houston texas, houston texas apartment, apartment in houston, houston tx apartment, apartments in houston tx" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

    <link rel="stylesheet" href="styles/webfonts.css">

    <link rel="stylesheet" href="styles/oocss.css">

    <link rel="stylesheet" href="javascript/plugins/fancySelect/fancySelect.css">

    <link rel="stylesheet" href="javascript/plugins/flexslider/flexslider.css">

    <link rel="stylesheet" href="styles/main.css">

    <link rel="stylesheet" href="styles/print.css" media="print">

    <link rel="stylesheet" href="styles/plugin.modifications.css">

    <link rel="stylesheet" href="styles/responsive.css">

    

    <link rel="icon" href="favicon.ico">

    <!--[if IE]>

      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

      <link rel="SHORTCUT ICON" href="favicon.ico"/>

      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

    <![endif]-->

<script src="https://use.fontawesome.com/83c749bc99.js"></script>


</head>

<body id="homePage">
  <p id="skipLink"><a href="#content">Skip navigation</a></p>

    

    <div id="container" class="border-box">
<header id="header" class="all-trans">

        <div class="container">

          

          <p id="navTrigger">

            <span class="bar all-trans">&nbsp;</span>

            <span class="bar all-trans">&nbsp;</span>

            <span class="bar all-trans">&nbsp;</span>

            <a href="javascript:void(0)">&nbsp;</a>

          </p>

          

          <div id="logo" class="onLeft">

            <a href="index.php" title="Eventock.com">

              <img src="images/11.png" alt="Eventock.com" />

            </a>

          </div>

          

          <div id="navigations">

            <div class="onRight metamenu">

             



            </div>

            <nav class="onRight" id="navigation">

              <ul>

                <li><a href="#!">About Us</a></li>

                <li><a href="#!">Scholarship</a></li>

                <li><a href="#!">Blog</a></li>

                <li><a href="#!">Terms</a></li>

                <li><a href="#!">Privacy</a></li>

                <li><a href="#!">Contact Us</a></li>

              </ul>

            </nav>

          </div>

          

        </div>

      </header>
      <section id="banner">

        <img src="images/bg.png" alt="banner1"  class="bannerImg" />

        <div class="banner-content">

     <?php     if(isset($_SESSION['smsg'])){
  echo $_SESSION['smsg'];
  session_destroy();
  }
  unset($_SESSION['smsg']);
  
 if(isset($_SESSION['fmsg'])){ 
 echo $_SESSION['fmsg'];
 }  
 unset($_SESSION['fmsg']); ?>

         <form name="form1" method="post" action="process1.php">
<table width="60%" border="1" cellspacing="10" cellpadding="10">
  <tr>
<?php if($r['fname']=="true"){ ?>

    <td><p style="color:red" id="demo"></p><input type="text" name="fname" id="fname" placeholder="First Name" onkeypress="Validate()" style="width: 100%; height: 100%;" value="<?php if(isset($_SESSION['fname'])){ echo $_SESSION['fname'];} unset($_SESSION['fname']); ?>" <?php if($rs['fname']=="true"){ echo "required";} ?> ></td>

  <?php } ?>

  <?php if($r['lname']=="true"){ ?>

    <td><p style="color:red" id="demo1"></p><input type="text" name="lname" id="lname" placeholder="Last Name" style="width: 100%; height: 100%;" value="<?php if(isset($_SESSION['lname'])){ echo $_SESSION['lname'];} unset($_SESSION['lname']); ?>" <?php if($rs['lname']=="true"){ echo "required";} ?> ></td>
 <?php } ?>

  </tr>
  <tr>
    <?php if($r['email']=="true"){ ?>
    <td><p style="color:red" id="demo2"></p><input type="text" name="email" id="email" placeholder="Email"  style="width: 100%; height: 100%;" value="<?php if(isset($_SESSION['email'])){ echo $_SESSION['email'];} unset($_SESSION['email']); ?>" <?php if($rs['email']=="true"){ echo "required";} ?> ></td>
<?php } ?>
    <?php if($r['phone']=="true"){ ?>
    <td><p style="color:red" id="demo3"></p><input type="text" name="phone" id="phone" onkeypress="return validatenumerics(event)" placeholder="Phone" style="width: 100%; height: 100%;" value="<?php if(isset($_SESSION['phone'])){ echo $_SESSION['phone'];} unset($_SESSION['phone']);?>" <?php if($rs['phone']=="true"){ echo "required";} ?> ></td>
    <?php } ?>
  </tr>
  <tr>
    <?php if($r['password']=="true"){ ?>
    <td><p style="color:red" id="demo4"></p><input type="password" name="password" id="password" placeholder="Password"   onclick="ValidateEmail(document.form1.email)"  style="width: 100%; height: 100%;"  <?php if($rs['password']=="true"){ echo "required";} ?> ></td>
    <?php } ?>

    <?php if($r['cpassword']=="true"){ ?>
    <td><p style="color:red" id="demo5"></p><input type="password" name="cpassword" id="cpassword" placeholder="Confirmed Password" onclick="ValidatemyForm(document.form1.password)" style="width: 100%; height: 100%;" <?php if($rs['cpassword']=="true"){ echo "required";} ?> ></td>
    <?php } ?>
  </tr>
  <tr>


    <?php if($r['city']=="true"){ ?>
    <td><p style="color:red" id="demo6"></p><input type="text" name="city" id="city" placeholder="State,city" style="width: 100%; height: 100%;" value="<?php if(isset($_SESSION['city'])){ echo $_SESSION['city'];} unset($_SESSION['city']); ?>"  <?php if($rs['city']=="true"){ echo "required";} ?> ></td>
    <?php } ?>

   


    <?php if($r['cat']=="true"){ ?>
    <td><p style="color:red" id="demo7"></p><select name="cat" id="cat" style="width: 100%;" <?php if($rs['cat']=="true"){ echo "required";} ?> >
      <option value="0">Please select one category</option>
       <?php 
    while($rc = mysqli_fetch_assoc($rec)){
    ?>
      <option><?php echo $rc['cate_name']; ?></option>
      <?php } ?>
    </select></td>
    <?php } ?>
    
  </tr>

<tr>
<?php if($r['dob']=="true"){ ?>
    <td><p style="color:red" id="demo9"></p><input type="date" name="dob" id="dob" placeholder="Enter date of birth" style="width: 100%; height: 100%;" value="<?php if(isset($_SESSION['dob'])){ echo $_SESSION['dob'];} unset($_SESSION['dob']); ?>" <?php if($rs['dob']=="true"){ echo "required";} ?>  ></td>
<?php } ?>

<?php if($r['work_desc']=="true"){ ?>
      <td><p style="color:red" id="demo10"></p><input type="text" name="wd"  id="wd" placeholder="Work description" style="width: 100%; height: 100%;" value="<?php if(isset($_SESSION['wd'])){ echo $_SESSION['wd'];} unset($_SESSION['wd']); ?>" <?php if($rs['work_desc']=="true"){ echo "required";} ?> > </td>
        <?php } ?>
  </tr>

     <tr>
    <?php if($r['promocode']=="true"){ ?>
    <td><p style="color:red" id="demo8"></p><input type="text" name="promo" id="promo" placeholder="Promocode" style="width: 100%; height: 100%;" value="<?php if(isset($_SESSION['promo'])){ echo $_SESSION['promo'];} unset($_SESSION['promo']); ?>" <?php if($rs['promocode']=="true"){ echo "required";} ?>  ></td>
    <?php } ?>
</tr>
  <?php } ?>
  <?php } ?>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">By entering information and clicking 'Start Now', you agree to the terms of GigMasters User Agreement and Privacy Policy.</td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
    
      <input type="submit" name="Signup" value="Continue" onclick="myFunction()" style="width:50%">
    </div></td>
  </tr>
  </table>
</form>

          

        </div>

      </section>



<section id="content">

         
        

      </section>


<footer id="footer">  

      <div class="container">

        <div class="footer-links">

          <ul>

            <li>

              <a href="#!">About Us</a>

            </li>                                                            

            <li>

              <a href="#!">Scholorship</a>

            </li>

            <li>

              <a href="#!">Blog</a>

            </li>

            <li>

              <a href="#!">Terms</a>

            </li>

            <li>

              <a href="#!">Privacy</a>

            </li>

            <li>

              <a href="#!">Contact Us</a>

            </li> 

          </ul>

        </div>

        <div class="social">

          <ul>

            <li class="">

              <a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i>

</a>

            </li>

            <li class=" ">

              <a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i>

</a>

            </li>

            <li class=" ">

              <a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i>

</a>

            </li>

            <li class=" ">

              <a href="#!"><i class="fa fa-youtube" aria-hidden="true"></i>

</a>

            </li>

            <li class=" ">

              <a href="#!"><i class="fa fa-instagram" aria-hidden="true"></i>

</a>

            </li>

          </ul>

        </div>

        <div class="copyright">

          <p>&copy; 2017, Eventock.com</p>

        </div>

      </div>

    </footer>

</body>
</html>
<script language="JavaScript" type="text/javascript">

function myFunction() {
    var inpObj = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var email = document.getElementById("email");
    var phone = document.getElementById("phone");
    var password = document.getElementById("password");
    var cpassword = document.getElementById("cpassword");
    var city = document.getElementById("city");
    var cat = document.getElementById("cat");
    var promo = document.getElementById("promo");
    var dob = document.getElementById("dob");
    var wd = document.getElementById("wd");
    
    if (!inpObj.checkValidity()) {
        document.getElementById("demo").innerHTML = "Please enter first name.";
    } else {
        document.getElementById("demo").innerHTML = "";
    } 
if (!lname.checkValidity()) {
        document.getElementById("demo1").innerHTML = "Please enter last name.";
    } else {
        document.getElementById("demo1").innerHTML = "";
    } 
    if (!email.checkValidity()) {
        document.getElementById("demo2").innerHTML = "Please enter email.";
    } else {
        document.getElementById("demo2").innerHTML = "";
    } 
    if (!phone.checkValidity()) {
        document.getElementById("demo3").innerHTML = "Please enter phone number.";
    } else {
        document.getElementById("demo3").innerHTML = "";
    } 
    if (!password.checkValidity()) {
        document.getElementById("demo4").innerHTML = "Please enter password.";
    } else {
        document.getElementById("demo4").innerHTML = "";
    } 
    if (!cpassword.checkValidity()) {
        document.getElementById("demo5").innerHTML = "Please enter password again.";
    } else {
        document.getElementById("demo5").innerHTML = "";
    } 
    if (!city.checkValidity()) {
        document.getElementById("demo6").innerHTML = "Please enter city,state.";
    } else {
        document.getElementById("demo6").innerHTML = "";
    } 
    if (cat.value =="0") {
      
        document.getElementById("demo7").innerHTML = "Please select category.";
      
    } else {
        document.getElementById("demo7").innerHTML = "";
    } 
    if (!promo.checkValidity()) {
        document.getElementById("demo8").innerHTML = "Please enter promocode.";
    } else {
        document.getElementById("demo8").innerHTML = "";
    } 
     if (!dob.checkValidity()) {
        document.getElementById("demo9").innerHTML = "Please enter date of birth.";
    } else {
        document.getElementById("demo9").innerHTML = "";
    } 
     if (!wd.checkValidity()) {
        document.getElementById("demo10").innerHTML = "Please enter work description.";
    } else {
        document.getElementById("demo10").innerHTML = "";
    } 

} 

  
function Validate() 
{
    var val = document.getElementById('fname').value;
    
    if (!val.match(/^[a-zA-Z\s]+$/)) 
    {
        alert('Only alphabets are allowed');
        return false;
    }
    
    return true;
}



function validatenumerics(key) {
           //getting key code of pressed key
           var keycode = (key.which) ? key.which : key.keyCode;
           //comparing pressed keycodes

           if (keycode > 31 && (keycode < 48 || keycode > 57)) {
               alert(" You can enter only characters 0 to 9 ");
               return false;
           }
           else return true;


       }


       function ValidateEmail(inputText)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(inputText.value.match(mailformat))
{
//document.form1.email.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
document.form1.email.focus();
return false;
}
}

function ValidatemyForm(inputText)
{
if (inputText.value.length < 8)

{
   alert("Please enter at least 8 characters in the \"password\" field.");
   form1.password.focus();
   return false;
}
return true;
}

</script>