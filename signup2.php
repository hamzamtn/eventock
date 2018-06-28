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
  <title>SignUp Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css'>

      <link rel="stylesheet" href="css/style.css">

<meta charset="utf-8">

        <title>SignUp Page</title>

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
<?php include "header.php"; ?>

  
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

      
<form action="process2.php" method="post">

              <fieldset>

                <?php if($r['sub_cat']=="true"){ ?>

                <div class="cols">

                  <div class="form-col">

                    <label>Sub-category*</label>

                    <select name="sub_cat[]" id="txtHint" style="width: 100%;height: 100px" multiple>

  <option> </option>
  
</select>

                  </div><?php } ?>


                  <?php if($r['pname']=="true"){ ?>

                  <div class="form-col">

                    <label>Profile Name*</label>

                    <input type="text"  name="pname" placeholder="Profile Name" id="pname" required/>

                  </div><?php } ?>

                  <div class="clearfix">
                    <div class="clearfix">
                      <div class="clearfix">

                    <input type="submit" name="Continue" value="Continue" style="margin-top: 10px;margin-bottom: 10px;" onclick="myFunction()" />

                  </div><?php } ?>

                </div>

              </fieldset>

            </form>


<div class="clearfix">
  <div class="clearfix">


 
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js'></script>
    
    
    
    <script  src="js/index.js"></script>  
  
              

              

            

          </div>


      </section>
 </div>
  <?php include "footer.php"; ?>

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


