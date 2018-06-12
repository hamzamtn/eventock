<?php
session_start();
 require_once ('connect.php');

 $SelSql = "SELECT * FROM `allowed_fields`";


$ress = mysqli_query($connection, $SelSql);
$r = mysqli_fetch_assoc($ress);{

 
 

?>


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Multiple Image Slider</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css'>

      <link rel="stylesheet" href="css/style.css">

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

  
<!--<p>Suggestions: <span id="txtHint"></span></p> -->


      <section id="content">

          

            <div class="container">

<div class="container">
  <h2></h2>
    <div class="row">
      <div class="col-md-12 heroSlider-fixed">
        <div class="overlay">
      </div>
         <!-- Slider -->
        <div class="slider responsive">
          <div>
            <img src="images/21.PNG" alt="" id="img-1" name="img-1" onclick="showHint(this.id)" />
          </div>
          <div>
            <img src="images/12.PNG" alt="" id="img-2" name="img-2" onclick="showHint(this.id)"/>
          </div>
          <div>
            <img src="images/13.PNG" alt="" id="img-3" name="img-3" onclick="showHint(this.id)"/>
          </div>
          <div>
            <img src="images/14.PNG" alt="" id="img-4" name="img-4" onclick="showHint(this.id)"/>
          </div>
          <div>
            <img src="images/15.PNG" alt="" id="img-5" name="img-5" onclick="showHint(this.id)"/>
          </div>
          <div>
            <img src="images/16.PNG" alt="" id="img-6" name="img-6" onclick="showHint(this.id)"/>
          </div>
          <div>
            <img src="images/17.PNG" alt="" id="img-7" name="img-7" onclick="showHint(this.id)"/>
          </div>
          <div>
            <img src="images/18.PNG" alt="" id="img-8" name="img-8" onclick="showHint(this.id)"/>
          </div>
        </div>
         <!-- control arrows -->
        <div class="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        </div>
        <div class="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        </div>
        
      </div>
    </div>
  </div>

          
<form  method="post" action="process2.php">
  <table style="margin-left: 20%;" width="60%" border="1" cellspacing="10" cellpadding="10">
  <tr>
    <?php if($r['sub_cat']=="true"){ ?>
      <p style="color:red" id="demo"></p>
    <td> <select name="sub_cat" id="txtHint" style="width:100%; height:200px;" multiple required>

  <option> </option>
  
</select></td>
   <?php } ?>
  </tr>
 
</table>

  <p>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js'></script>
    
    
    
    <script  src="js/index.js"></script>  </p>
  <p>&nbsp;</p>
   <?php if($r['pname']=="true"){ ?>
    <p style="color:red" id="demo1"></p>
    <input type="text" name="pname" placeholder="Profile Name" id="pname" style="width:60%; margin-left: 20%;" required>
  <?php } ?>

<input type="submit" name="Continue" value="Continue" onclick="myFunction()" style="width:15%; height:40px; margin-left: 65%; margin-top: 25px;">

</form>
<?php } ?>
              

              

            

          </div>


      </section>
 </div>
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

  function showHint(str) {


  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "gethint.php?cat_id="+str, true);
  xhttp.send();   
}



function myFunction() {
    var txtHint = document.getElementById("txtHint");
    var pname = document.getElementById("pname");
    
    
    if (!txtHint.checkValidity()) {
        document.getElementById("demo").innerHTML = "Please select sub-category.";
    } else {
        document.getElementById("demo").innerHTML = "";
    } 
if (!pname.checkValidity()) {
        document.getElementById("demo1").innerHTML = "Please enter profile name.";
    } else {
        document.getElementById("demo1").innerHTML = "";
    } 
   

} 



</script>


