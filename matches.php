

<?php
session_start();
include "connect.php";
include  "session.php";



$email=$_SESSION['login_user'];
 $ReadSql = "SELECT * FROM `vender_signup` where email='".$email."'";

$ress = mysqli_query($connection, $ReadSql);
    
$rw = mysqli_fetch_assoc($ress);

    if($rw['user_type']=="admin"){  
    header('location: disable_users.php');
    }elseif ($rw['user_type']=="user") {
        header('location: booking_details.php');
    }   

 $Sql = "SELECT * FROM `add_services` where email='".$email."'";

$ress = mysqli_query($connection, $Sql);
    
$rw = mysqli_fetch_assoc($ress);

$service=$rw['aservice'];




$ReadSql = "SELECT * FROM `booking` where vendors !='".$email."' and event_type='".$service."' ";

$res = mysqli_query($connection, $ReadSql);

?>

<!DOCTYPE html>

<html lang="en">    

	<head>

        <meta charset="utf-8">

        <title>matches</title>

        <meta name="description" content="Search for Houston Apartments For Rent using our extensive apartment database. View photos, floor plans, maps and prices. Find Houston apartment rentals on RentDeals and receive a $100 cash back rebate.">

		<meta name="Keywords" content="Houston apartments, Houston apartment, Houston apartment rental, Houston apartment rentals, Houston texas apartments, Houston apartments for rent, Houston tx apartments, apartments in houston, apartments in houston texas, apartment in houston texas, houston texas apartment, apartment in houston, houston tx apartment, apartments in houston tx" />

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

		<link rel="stylesheet" href="styles/webfonts.css">

		<link rel="stylesheet" href="styles/oocss.css">

		<link rel="stylesheet" href="styles/main.css">

		<link rel="stylesheet" href="styles/print.css" media="print">

		<link rel="stylesheet" href="styles/plugin.modifications.css">

		<link rel="stylesheet" href="styles/responsive.css">

		

		<link rel="icon" href="favicon.ico">


<script src="https://use.fontawesome.com/83c749bc99.js"></script>

<style type="text/css">
	*, ::before, ::after { box-sizing: border-box; }.quotes { padding: 0px 2px; }*, ::after, ::before { box-sizing: border-box; }button, input, select, textarea { font-family: inherit; font-size: 100%; margin: 0px; }button, select { text-transform: none; }input, button, select, textarea { font-family: inherit; font-size: inherit; line-height: inherit; }.quotes select { font-size: 18px; padding: 5px; }button, input, optgroup, select, textarea { color: inherit; font: inherit; margin: 0px; }.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 { position: relative; min-height: 1px; padding-left: 0px; padding-right: 0px; }.col-xs-12 { width: 100%; }.row { margin-left: 0px; margin-right: 0px; }.row::before, .row::after { content: " "; display: table; }.row::after { clear: both; }.quotes .event-instance { border: 1px solid rgb(51, 51, 51); margin-bottom: 10px; margin-top: 15px; }.quotes .event-information { padding: 5px; }.quotes .event-information.accepting-quotes, .quotes .event-information.closed-to-quotes { background-color: rgb(255, 255, 204); }.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11 { float: left; }.col-xs-7 { width: 58.3333%; }h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 { font-family: "Franklin Gothic", "Trebuchet MS", Arial; font-weight: 500; line-height: 1.1; }h1, h2, h3 { margin-top: 20px; margin-bottom: 10px; }h3, .h3 { font-size: 35px; font-family: proxima-nova-n3, proxima-nova, Tahoma, Arial, sans-serif; }.quotes h3 { margin: 0px; padding: 5px 2px; font-size: 18px; font-weight: bold; }.col-xs-3 { width: 25%; }b, strong { font-weight: bold; }b, strong { font-weight: 700; }.col-xs-9 { width: 75%; }.col-xs-5 { width: 41.6667%; }.quotes .status { text-align: right; }h4, h5, h6 { margin-top: 10px; margin-bottom: 10px; }h5, .h5 { font-size: 14px; }.quotes h5 { margin: 5px; }.quotes .status div { margin: 15px 15px 0px 0px; }a:focus { outline: dotted thin; }a:active, a:hover { outline: 0px; }a { color: rgb(242, 101, 34); text-decoration: none; }a:hover, a:focus { color: rgb(188, 68, 11); text-decoration: none; }a:focus { outline: -webkit-focus-ring-color auto 5px; outline-offset: -2px; }.quotes .edit-pencil { padding: 10px; font-size: 18px; color: rgb(51, 51, 51); }.quotes .edit-pencil:hover, .quotes .edit-pencil:active { background-color: rgb(224, 224, 224) !important; }a { background-color: transparent; }.glyphicon { position: relative; top: 1px; display: inline-block; font-family: "Glyphicons Halflings"; font-style: normal; font-weight: normal; line-height: 1; -webkit-font-smoothing: antialiased; }.glyphicon-pencil::before { content: "✏"; }.quotes .compare-quotes { background-color: rgb(153, 153, 153); margin: 2px 0px; padding: 0px 10px; text-align: center; cursor: pointer; }h4, .h4 { font-size: 18px; font-family: proxima-nova-n3, proxima-nova, Tahoma, Arial, sans-serif; }.col-xs-1 { width: 8.33333%; }.pull-right { float: right !important; }.quotes .quote-information { background-color: rgb(224, 224, 224); }.pull-left { float: left !important; }.quotes .quote-information h5 { text-align: center; padding: 2px 10px; }.quotes .quote-information .quote-single { margin: 1px 3px 3px; padding: 10px; background-color: rgb(255, 255, 255); }.quotes .quote-information .quote-single:hover, .quotes .quote-information .quote-single:active { background-color: rgb(239, 236, 229) !important; }.quotes .quote-information .quote-single div { padding: 5px 5px 1px; }img { border: 0px; }img { vertical-align: middle; }.quotes .quote-information .quote-single .booked-label { background-color: yellow; padding: 0px 5px; }.quotes .quote-information .quote-single .orange-title { color: rgb(242, 101, 34); font-weight: bold; }.visible-xs { display: none !important; }.quotes .quote-information .quote-single div.dollar-amount .dollar-amount-table { display: table; width: 100%; }.quotes .quote-information .quote-single div.dollar-amount .dollar-amount-table .dollar-amount-table-cell { height: 100px; display: table-cell; vertical-align: middle; }.text-center { text-align: center; }.quotes .quote-information .quote-single div.dollar-amount .quote-total span { font-weight: bold; font-size: 20px; padding-top: 5px; }.btn { display: inline-block; padding: 6px 48px; margin-bottom: 0px; font-size: 1.2em; font-weight: 300; line-height: 1.42857; text-align: center; vertical-align: middle; cursor: pointer; border: 1px solid transparent; white-space: nowrap; user-select: none; }.btn:focus { outline: -webkit-focus-ring-color auto 5px; outline-offset: -2px; }.btn:hover, .btn:focus { color: rgb(255, 255, 255); text-decoration: none; }.btn:active, .btn.active { outline: 0px; background-image: none; box-shadow: rgba(0, 0, 0, 0.125) 0px 3px 5px inset; }.btn-alternate { color: rgb(255, 255, 255); background-color: rgb(93, 192, 207); border-color: rgb(93, 192, 207); text-transform: uppercase; }.btn-alternate:hover, .btn-alternate:focus, .btn-alternate:active, .btn-alternate.active, .open .dropdown-toggle.btn-alternate { color: rgb(255, 255, 255); background-color: rgb(62, 180, 198); border-color: rgb(55, 167, 184); }.btn-alternate:active, .btn-alternate.active, .open .dropdown-toggle.btn-alternate { background-image: none; }.btn-default { color: rgb(255, 255, 255); background-color: rgb(242, 101, 34); border-color: rgb(242, 101, 34); text-transform: uppercase; }.btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active, .open .dropdown-toggle.btn-default { color: rgb(255, 255, 255); background-color: rgb(222, 80, 13); border-color: rgb(203, 73, 12); }.btn-default:active, .btn-default.active, .open .dropdown-toggle.btn-default { background-image: none; }.quotes .quote-information .no-quotes { margin: 1px 3px; background-color: rgb(255, 255, 255); text-align: center; font-size: 14px; padding: 20px; }.quotes .show-more { padding: 6px; cursor: pointer; }.quotes .show-more div { width: 100%; background-color: rgb(224, 224, 224); text-align: center; text-decoration: underline; }@media (max-width: 767px){.quotes .event-information .shrink-text { font-size: 12px; }}@media (max-width: 767px){.quotes .event-information .shrink-text span { padding-left: 10px; }}@media (max-width: 767px){.quotes .event-information .shrink-text { font-size: 12px; }}@media (max-width: 767px){.quotes .event-information .shrink-text span { padding-left: 10px; }}@media (max-width: 767px){.quotes .event-information .shrink-text { font-size: 12px; }}@media (max-width: 767px){.quotes .event-information .shrink-text span { padding-left: 10px; }}@media (min-width: 992px){.col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11 { float: left; }}@media (min-width: 992px){.col-md-9 { width: 75%; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (max-width: 767px){.visible-xs { display: block !important; }}@media (min-width: 992px){.col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11 { float: left; }}@media (min-width: 992px){.col-md-3 { width: 25%; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (min-width: 767px){.quotes .quote-information .quote-single div.dollar-amount a { padding: 6px 4px; font-weight: bold; width: 100%; }}@media (min-width: 767px){.quotes .quote-information .quote-single div.dollar-amount .btn { width: 100%; padding: 6px 22px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div.dollar-amount a { padding: 8px 0px; font-weight: bold; width: 100%; }}@media (max-width: 480px){.quotes .quote-information .quote-single div.dollar-amount .btn { padding: 8px 4px; width: 100%; font-size: 12px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (min-width: 767px){.quotes .quote-information .quote-single div.dollar-amount a { padding: 6px 4px; font-weight: bold; width: 100%; }}@media (min-width: 767px){.quotes .quote-information .quote-single div.dollar-amount .btn { width: 100%; padding: 6px 22px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div.dollar-amount a { padding: 8px 0px; font-weight: bold; width: 100%; }}@media (max-width: 480px){.quotes .quote-information .quote-single div.dollar-amount .btn { padding: 8px 4px; width: 100%; font-size: 12px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (min-width: 767px){.quotes .quote-information .quote-single div.dollar-amount a { padding: 6px 4px; font-weight: bold; width: 100%; }}@media (min-width: 767px){.quotes .quote-information .quote-single div.dollar-amount .btn { width: 100%; padding: 6px 22px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div.dollar-amount a { padding: 8px 0px; font-weight: bold; width: 100%; }}@media (max-width: 480px){.quotes .quote-information .quote-single div.dollar-amount .btn { padding: 8px 4px; width: 100%; font-size: 12px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (min-width: 767px){.quotes .quote-information .quote-single div.dollar-amount a { padding: 6px 4px; font-weight: bold; width: 100%; }}@media (min-width: 767px){.quotes .quote-information .quote-single div.dollar-amount .btn { width: 100%; padding: 6px 22px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div.dollar-amount a { padding: 8px 0px; font-weight: bold; width: 100%; }}@media (max-width: 480px){.quotes .quote-information .quote-single div.dollar-amount .btn { padding: 8px 4px; width: 100%; font-size: 12px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (min-width: 767px){.quotes .quote-information .quote-single div.dollar-amount a { padding: 6px 4px; font-weight: bold; width: 100%; }}@media (min-width: 767px){.quotes .quote-information .quote-single div.dollar-amount .btn { width: 100%; padding: 6px 22px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div.dollar-amount a { padding: 8px 0px; font-weight: bold; width: 100%; }}@media (max-width: 480px){.quotes .quote-information .quote-single div.dollar-amount .btn { padding: 8px 4px; width: 100%; font-size: 12px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (min-width: 767px){.quotes .quote-information .quote-single div.dollar-amount a { padding: 6px 4px; font-weight: bold; width: 100%; }}@media (max-width: 480px){.quotes .quote-information .quote-single div.dollar-amount a { padding: 8px 0px; font-weight: bold; width: 100%; }}@media (min-width: 767px){.quotes .quote-information .quote-single div.dollar-amount a { padding: 6px 4px; font-weight: bold; width: 100%; }}@media (max-width: 480px){.quotes .quote-information .quote-single div.dollar-amount a { padding: 8px 0px; font-weight: bold; width: 100%; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (min-width: 992px){.col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11 { float: left; }}@media (min-width: 992px){.col-md-9 { width: 75%; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (max-width: 767px){.visible-xs { display: block !important; }}@media (min-width: 992px){.col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11 { float: left; }}@media (min-width: 992px){.col-md-3 { width: 25%; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (min-width: 767px){.quotes .quote-information .quote-single div.dollar-amount a { padding: 6px 4px; font-weight: bold; width: 100%; }}@media (min-width: 767px){.quotes .quote-information .quote-single div.dollar-amount .btn { width: 100%; padding: 6px 22px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div.dollar-amount a { padding: 8px 0px; font-weight: bold; width: 100%; }}@media (max-width: 480px){.quotes .quote-information .quote-single div.dollar-amount .btn { padding: 8px 4px; width: 100%; font-size: 12px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (min-width: 767px){.quotes .quote-information .quote-single div.dollar-amount a { padding: 6px 4px; font-weight: bold; width: 100%; }}@media (min-width: 767px){.quotes .quote-information .quote-single div.dollar-amount .btn { width: 100%; padding: 6px 22px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div.dollar-amount a { padding: 8px 0px; font-weight: bold; width: 100%; }}@media (max-width: 480px){.quotes .quote-information .quote-single div.dollar-amount .btn { padding: 8px 4px; width: 100%; font-size: 12px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (min-width: 767px){.quotes .quote-information .quote-single div.dollar-amount a { padding: 6px 4px; font-weight: bold; width: 100%; }}@media (min-width: 767px){.quotes .quote-information .quote-single div.dollar-amount .btn { width: 100%; padding: 6px 22px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div.dollar-amount a { padding: 8px 0px; font-weight: bold; width: 100%; }}@media (max-width: 480px){.quotes .quote-information .quote-single div.dollar-amount .btn { padding: 8px 4px; width: 100%; font-size: 12px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (min-width: 767px){.quotes .quote-information .quote-single div.dollar-amount a { padding: 6px 4px; font-weight: bold; width: 100%; }}@media (min-width: 767px){.quotes .quote-information .quote-single div.dollar-amount .btn { width: 100%; padding: 6px 22px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div.dollar-amount a { padding: 8px 0px; font-weight: bold; width: 100%; }}@media (max-width: 480px){.quotes .quote-information .quote-single div.dollar-amount .btn { padding: 8px 4px; width: 100%; font-size: 12px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (min-width: 767px){.quotes .quote-information .quote-single div.dollar-amount a { padding: 6px 4px; font-weight: bold; width: 100%; }}@media (min-width: 767px){.quotes .quote-information .quote-single div.dollar-amount .btn { width: 100%; padding: 6px 22px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div.dollar-amount a { padding: 8px 0px; font-weight: bold; width: 100%; }}@media (max-width: 480px){.quotes .quote-information .quote-single div.dollar-amount .btn { padding: 8px 4px; width: 100%; font-size: 12px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}@media (min-width: 767px){.quotes .quote-information .quote-single div.dollar-amount a { padding: 6px 4px; font-weight: bold; width: 100%; }}@media (max-width: 480px){.quotes .quote-information .quote-single div.dollar-amount a { padding: 8px 0px; font-weight: bold; width: 100%; }}@media (min-width: 767px){.quotes .quote-information .quote-single div.dollar-amount a { padding: 6px 4px; font-weight: bold; width: 100%; }}@media (min-width: 767px){.quotes .quote-information .quote-single div.dollar-amount .btn { width: 100%; padding: 6px 22px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div.dollar-amount a { padding: 8px 0px; font-weight: bold; width: 100%; }}@media (max-width: 480px){.quotes .quote-information .quote-single div.dollar-amount .btn { padding: 8px 4px; width: 100%; font-size: 12px; }}@media (max-width: 480px){.quotes .quote-information .quote-single div { padding: 5px 2px 1px; }}


 
JS Bin

 

</style>

    </head>

    <body id="contactPage"> 




		<p id="skipLink"><a href="#content">Skip navigation</a></p>

		

		<div id="container" class="border-box">

		

			<?php include "login_header.php"; ?>

			

			<section id="content">

				<div class="container">

									<div class="quotes" ng-show="!quotesCtrl.isLoading">

										<?php 
  
                                    while($rs = mysqli_fetch_array($res)){
                                    ?>

            

            <div class="col-xs-12">
                <!-- ngRepeat: event in quotesCtrl.gigRequestList --><div class="row event-instance ng-scope" ng-repeat="event in quotesCtrl.gigRequestList">
                    <div class="row event-information accepting-quotes" ng-class="event.statusString.split(' ').join('-').toLowerCase()">
                        <div class="col-xs-7">
                            <div class="row">
                                <h3 ng-bind="event.eventType" class="ng-binding"><?php echo $rs['event_type']; ?></h3>
                            </div>
                            
                            <div class="row shrink-text">
                                <div class="col-xs-3"><b>Date :</b></div>
                                <div class="col-xs-9"><span ng-bind="event.dateTimeString" class="ng-binding"><?php echo $rs['date'];?></span></div>
                            </div>
                            <div class="row shrink-text">
                                <div class="col-xs-3"><b>Venue :</b></div>
                                <div class="col-xs-9"><span ng-bind="event.locationString" class="ng-binding"><?php echo $rs['venue'];?></span></div>
                            </div>
                            <div class="row shrink-text">
                                <div class="col-xs-3"><b>Location :</b></div>
                                <div class="col-xs-9"><span ng-bind="event.locationString" class="ng-binding"><?php echo $rs['location'];?></span></div>
                            </div>
                            <div class="row shrink-text">
                                <div class="col-xs-3"><b>Guest :</b></div>
                                <div class="col-xs-9"><span ng-bind="event.locationString" class="ng-binding"><?php echo $rs['guest'];?></span></div>
                            </div>
                            <div class="row shrink-text">
                                <div class="col-xs-3"><b>Time :</b></div>
                                <div class="col-xs-9"><span ng-bind="event.locationString" class="ng-binding"><?php echo $rs['time'];?></span></div>
                            </div>
                            <div class="row shrink-text">
                                <div class="col-xs-3"><b>Ser-Time :</b></div>
                                <div class="col-xs-9"><span ng-bind="event.locationString" class="ng-binding"><?php echo $rs['slenght'];?></span></div>
                            </div>
                            <div class="row shrink-text">
                                <div class="col-xs-3"><b>Details :</b></div>
                                <div class="col-xs-9"><span ng-bind="event.locationString" class="ng-binding"><?php echo $rs['det'];?></span></div>
                            </div>
                        </div>
                         
                    </div>
                    


                   
                    
                    </div>
                </div><?php } ?><!-- end ngRepeat: event in quotesCtrl.gigRequestList -->
                
            </div>
        


			</section>


		</div>	

				<?php include "footer.php"; ?>
		

		<div id="signIn-popup" class="popup">

			<div class="inner">

				<div class="close">&nbsp;</div>

				<h2>Sign In</h2>

				<ul class="tabs clearfix">

					<li class="active opacity-trans"><a href="#tab-content1a">Renter</a></li>

					<li class="opacity-trans"><a href="#tab-content2a">Agent</a></li>

					<li class="opacity-trans"><a href="#tab-content3a">Manager</a></li>

				</ul>

				<div id="tab-content1a" class="tab-content first">

					<form action="action.php" method="post">

						<div class="form-row">

							<input type="text" placeholder="Email / Username" />

						</div>

						<div class="form-row">

							<input type="text" placeholder="Password" />

						</div>

						<p id="forgotPass"><a href="lost-password.html">Forgot Password?</a></p>

						<p id="signup-switcher">Don't have an account? <a href="#!">Sign up</a></p>

						<div class="submit-row">

							<input type="submit" value="Sign In" />

						</div>

						<div class="social-section">

							<p>Or Connect With</p>

							<ul>

								<li class="fb"><a href="#!"><mark class="opacity-trans"></mark><span class="opacity-trans"></span></a></li>

								<li class="gplus"><a href="#!"><mark class="opacity-trans"></mark><span class="opacity-trans"></span></a></li>

							</ul>

						</div>

					</form>

				</div>

				<div id="tab-content2a" class="tab-content">

					<form action="action.php" method="post">

						<div class="form-row">

							<input type="text" placeholder="Email / Username" />

						</div>

						<div class="form-row">

							<input type="text" placeholder="Password" />

						</div>

						<p id="forgotPass"><a href="password.html">Forgot Password?</a></p>

						<p id="signup-switcher">Don't have an account? <a href="#!">Sign up</a></p>

						<div class="submit-row">

							<input type="submit" value="Sign In" />

						</div>

						<div class="social-section">

							<p>Or Connect With</p>

							<ul>

								<li class="fb"><a href="#!"><mark class="opacity-trans"></mark><span class="opacity-trans"></span></a></li>

								<li class="gplus"><a href="#!"><mark class="opacity-trans"></mark><span class="opacity-trans"></span></a></li>

							</ul>

						</div>

					</form>

				</div>

				<div id="tab-content3a" class="tab-content">

					<form action="action.php" method="post">

						<div class="form-row">

							<input type="text" placeholder="Email / Username" />

						</div>

						<div class="form-row">

							<input type="text" placeholder="Password" />

						</div>

						<p id="forgotPass"><a href="password.html">Forgot Password?</a></p>

						<p id="signup-switcher">Don't have an account? <a href="#!">Sign up</a></p>

						<div class="submit-row">

							<input type="submit" value="Sign In" />

						</div>

						<div class="social-section">

							<p>Or Connect With</p>

							<ul>

								<li class="fb"><a href="#!"><mark class="opacity-trans"></mark><span class="opacity-trans"></span></a></li>

								<li class="gplus"><a href="#!"><mark class="opacity-trans"></mark><span class="opacity-trans"></span></a></li>

							</ul>

						</div>

					</form>

				</div>

			</div>

		</div>

		<div id="signUp-popup" class="popup">

			<div class="inner">

				<div class="close">&nbsp;</div>

				<h2>Sign Up</h2>

				<ul class="tabs clearfix">

					<li class="active opacity-trans"><a href="#tab-content1b">Renter</a></li>

					<li class="opacity-trans"><a href="#tab-content2b">Agent</a></li>

					<li class="opacity-trans"><a href="#tab-content3b">Manager</a></li>

				</ul>

				<div id="tab-content1b" class="tab-content">

					<form action="action.php" method="post">

						<div class="form-row">

							<input type="text" placeholder="First Name*" required="required" />

						</div>

						<div class="form-row">

							<input type="text" placeholder="Last Name*" required="required" />

						</div>

						<div class="form-row">

							<input type="text" placeholder="Email*" required="required" />

						</div>

						<div class="form-row">

							<input type="text" placeholder="Password*" required="required" />

						</div>

						<p id="signin-switcher">Already a member? <a href="#!">Sign In</a></p>

						<div class="submit-row">

							<input type="submit" value="Sign In" class="opacity-trans" />

						</div>

						<p class="terms">By Registring I accept the terms of use.</p>

						<div class="social-section">

							<p>Or Connect With</p>

							<ul>

								<li class="fb"><a href="#!"><mark class="opacity-trans"></mark><span class="opacity-trans"></span></a></li>

								<li class="gplus"><a href="#!"><mark class="opacity-trans"></mark><span class="opacity-trans"></span></a></li>

							</ul>

						</div>

					</form>

				</div>

				<div id="tab-content2b" class="tab-content first">

					<form action="action.php" method="post">

						<div class="form-row">

							<input type="text" placeholder="First Name*" required="required" />

						</div>

						<div class="form-row">

							<input type="text" placeholder="Last Name*" required="required" />

						</div>

						<div class="form-row">

							<input type="text" placeholder="Email*" required="required" />

						</div>

						<div class="form-row">

							<input type="text" placeholder="Password*" required="required" />

						</div>

						<p id="signin-switcher">Already a member? <a href="#!">Sign In</a></p>

						<div class="submit-row">

							<input type="submit" value="Sign In" />

						</div>

						<p class="terms">By Registring I accept the terms of use.</p>

						<div class="social-section">

							<p>Or Connect With</p>

							<ul>

								<li class="fb"><a href="#!"><mark class="opacity-trans"></mark><span class="opacity-trans"></span></a></li>

								<li class="gplus"><a href="#!"><mark class="opacity-trans"></mark><span class="opacity-trans"></span></a></li>

							</ul>

						</div>

					</form>

				</div>

				<div id="tab-content3b" class="tab-content">

					<form action="action.php" method="post">

						<div class="form-row">

							<input type="text" placeholder="First Name*" required="required" />

						</div>

						<div class="form-row">

							<input type="text" placeholder="Last Name*" required="required" />

						</div>

						<div class="form-row">

							<input type="text" placeholder="Email*" required="required" />

						</div>

						<div class="form-row">

							<input type="text" placeholder="Password*" required="required" />

						</div>

						<p id="signin-switcher">Already a member? <a href="#!">Sign In</a></p>

						<div class="submit-row">

							<input type="submit" value="Sign In" class="opacity-trans" />

						</div>

						<p class="terms">By Registring I accept the terms of use.</p>

						<div class="social-section">

							<p>Or Connect With</p>

							<ul>

								<li class="fb"><a href="#!"><mark class="opacity-trans"></mark><span class="opacity-trans"></span></a></li>

								<li class="gplus"><a href="#!"><mark class="opacity-trans"></mark><span class="opacity-trans"></span></a></li>

							</ul>

						</div>

					</form>

				</div>

			</div>

		</div>

		<div id="overlay">&nbsp;</div>

		

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

		<script>if (!window.jQuery) { document.write('<script src="javascript/vendor/jquery-1.11.2.min.js"><\/script>'); }</script>



		<!--[if IE]>

			<script src="javascript/vendor/jquery.placeholder.min.js"></script>

		<![endif]-->

	

		<script src="javascript/main.js"></script>



    </body>

</html>
