<?php
session_start();
 require_once ('connect.php');

 


 $SelSql = "SELECT * FROM `allowed_fields`";

//echo $SelSql;exit;

$ress = mysqli_query($connection, $SelSql);
$r = mysqli_fetch_assoc($ress);{

 
 

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script src='https://www.google.com/recaptcha/api.js'></script>

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
     <section id="content">

          <div class="services box">

            <div class="container">


<form method="post" action="process3.php">
<table width="60%" border="1" cellspacing="10" cellpadding="10">
  <tr>
    <?php if($r['pname']=="true"){ ?>
    <td><?php if(isset($_SESSION['pname'])){ echo $_SESSION['pname'];} ?></td>
 <?php } ?>
    <?php if($r['city']=="true"){ ?>
    <td><?php if(isset($_SESSION['city'])){ echo $_SESSION['city'];} ?></td>
 <?php } ?>
  </tr>
  <tr>
    <?php if($r['cat']=="true"){ ?>
    <td><?php if(isset($_SESSION['cat'])){ echo $_SESSION['cat'];} ?></td>
 <?php } ?>
    <?php if($r['sub_cat']=="true"){ ?>
    <td><?php if(isset($_SESSION['sub_cat'])){ echo $_SESSION['sub_cat'];} ?></td>
 <?php } ?>
  </tr>
  <tr>
    <?php if($r['fname']=="true"){ ?>
    <td><?php if(isset($_SESSION['fname'])){ echo $_SESSION['fname'];} ?></td>
 <?php } ?>
    <?php if($r['lname']=="true"){ ?>
    <td><?php if(isset($_SESSION['lname'])){ echo $_SESSION['lname'];} ?></td>
 <?php } ?>
  </tr>
  <tr>
    <?php if($r['email']=="true"){ ?>
    <td><?php if(isset($_SESSION['email'])){ echo $_SESSION['email'];} ?></td>
 <?php } ?>
    <?php if($r['phone']=="true"){ ?>
    <td><?php if(isset($_SESSION['phone'])){ echo $_SESSION['phone'];} ?></td>
 <?php } ?>
  </tr>

  <tr>
    <?php if($r['dob']=="true"){ ?>
    <td><?php if(isset($_SESSION['dob'])){ echo $_SESSION['dob'];} ?></td>
<?php } ?>
<?php if($r['work_desc']=="true"){ ?>
    <td><?php if(isset($_SESSION['wd'])){ echo $_SESSION['wd'];} ?></td>

<?php } ?>
  </tr>
  <tr>
    <?php if($r['promocode']=="true"){ ?>
    <td><?php if(isset($_SESSION['promo'])){ echo $_SESSION['promo'];} ?></td>
     <?php } ?>
    
  </tr>
  <?php } ?>
  <tr>
    <td colspan="2"><div class="g-recaptcha" data-sitekey="6LdrhVwUAAAAAAh36eH-_4jKoDw1K3XsXEiC3Sjd"></div></td>
  </tr>
  <tr>
    <td colspan="2"><input type="checkbox" name="checkbox" id="checkbox" onclick="myFunction();"><label for="checkbox" >Checkbox </label>
    By entering information and clicking 'Start Now', you agree to the terms of GigMasters User Agreement and Privacy Policy.</td>
  </tr>

  <tr>
    <td colspan="2"><div align="center">
      <!--<input type="submit" id="myBtn"  name="Signup" value="Signup" style="width:50%;" readonly>-->
      <input type="submit" id="myBtn"  name="Signup" value="Signup" disabled></input>
    </div></td>
  </tr>
</table>
</form>

</div>  

          </div>


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
<script>
var a=0;
//document.getElementById("myBtn").disabled = true;
function myFunction() { 
  if (a==0) { document.getElementById("myBtn").disabled = false; a = 1;}
  else {document.getElementById("myBtn").disabled = true; a = 0;}
}


</script>