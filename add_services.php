<?php
session_start();

 require_once ('connect.php');
 include  "session.php";
  
  $email=$_SESSION['login_user'];
 $ReadSql = "SELECT * FROM `vender_signup` where email='".$email."'";

$res = mysqli_query($connection, $ReadSql);
	
$r = mysqli_fetch_assoc($res);
	if($r['user_type']=="admin"){	
	header('location: disable_users.php');
	}elseif ($rw['user_type']=="user") {
		header('location: booking_details.php');
	}

?> 



<!DOCTYPE html>

<html lang="en">    

	<head>

        <meta charset="utf-8">

        <title>Add Services</title>

        <meta name="description" content="Search for Houston Apartments For Rent using our extensive apartment database. View photos, floor plans, maps and prices. Find Houston apartment rentals on eventock and receive a $100 cash back rebate.">

		<meta name="Keywords" content="Houston apartments, Houston apartment, Houston apartment rental, Houston apartment rentals, Houston texas apartments, Houston apartments for rent, Houston tx apartments, apartments in houston, apartments in houston texas, apartment in houston texas, houston texas apartment, apartment in houston, houston tx apartment, apartments in houston tx" />

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

		<link rel="stylesheet" href="styles/webfonts.css">

		<link rel="stylesheet" href="styles/oocss.css">

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


<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=qlhk3qq68qmy3vqe2gljxt5vnxenv23pjqgctjg4g566oisf"></script>
<script>tinymce.init({ selector:'textarea' });</script>

    </head>

    <body id="contactPage"> 

		<p id="skipLink"><a href="#content">Skip navigation</a></p>

		

		<div id="container" class="border-box">

		

			<?php include "login_header.php"; ?>

			

			<section id="content">

				<div class="container">

					<div class="contact-section">

						

							

						<form action="aservices_process.php" name="form1" method="post" onsubmit="return myFunction();" enctype="multipart/form-data">

							<fieldset>
								<p class="legend">Add Services <span style="color:red"> <?php if(isset($_SESSION['smsg'])){ echo $_SESSION['smsg'];}unset($_SESSION['smsg']);
								if(isset($_SESSION['fmsg'])){ echo $_SESSION['fmsg']; } unset($_SESSION['fmsg']); ?>   </span></p>

									<div class="form-col">

										<label>Service Name <span style="color:red" id="demo"> </span></label>

										<input type="text"  name="aservice" id="aservice"   />

									</div>

									

									<div class="form-col">

										<label>Cost <span style="color:red" id="demo1"> </span></label>

										<input type="text" name="cost" id="cost"  />

									</div>

									

									 
									<div class="form-col">

										<label>Country <span style="color:red" id="demo2"> </span> </label>

										<select name="country" id="country" style="width: 100%;height: 50px" >
										<option value="0">Please select country</option>
										<option value="Afghanistan">Afghanistan</option>
										<option value="Albania">Albania</option>
										<option value="Algeria">Algeria</option>
										<option value="American Samoa">American Samoa</option>
										<option value="Andorra">Andorra</option>
										<option value="Angola">Angola</option>
										<option value="Anguilla">Anguilla</option>
										<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
										<option value="Argentina">Argentina</option>
										<option value="Armenia">Armenia</option>
										<option value="Aruba">Aruba</option>
										<option value="Australia">Australia</option>
										<option value="Austria">Austria</option>
										<option value="Azerbaijan">Azerbaijan</option>
										<option value="Bahamas">Bahamas</option>
										<option value="Bahrain">Bahrain</option>
										<option value="Bangladesh">Bangladesh</option>
										<option value="Barbados">Barbados</option>
										<option value="Belarus">Belarus</option>
										<option value="Belgium">Belgium</option>
										<option value="Belize">Belize</option>
										<option value="Benin">Benin</option>
										<option value="Bermuda">Bermuda</option>
										<option value="Bhutan">Bhutan</option>
										<option value="Bolivia">Bolivia</option>
										<option value="Bonaire">Bonaire</option>
										<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
										<option value="Botswana">Botswana</option>
										<option value="Brazil">Brazil</option>
										<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
										<option value="Brunei">Brunei</option>
										<option value="Bulgaria">Bulgaria</option>
										<option value="Burkina Faso">Burkina Faso</option>
										<option value="Burundi">Burundi</option>
										<option value="Cambodia">Cambodia</option>
										<option value="Cameroon">Cameroon</option>
										<option value="Canada">Canada</option>
										<option value="Canary Islands">Canary Islands</option>
										<option value="Cape Verde">Cape Verde</option>
										<option value="Cayman Islands">Cayman Islands</option>
										<option value="Central African Republic">Central African Republic</option>
										<option value="Chad">Chad</option>
										<option value="Channel Islands">Channel Islands</option>
										<option value="Chile">Chile</option>
										<option value="China">China</option>
										<option value="Christmas Island">Christmas Island</option>
										<option value="Cocos Island">Cocos Island</option>
										<option value="Colombia">Colombia</option>
										<option value="Comoros">Comoros</option>
										<option value="Congo">Congo</option>
										<option value="Cook Islands">Cook Islands</option>
										<option value="Costa Rica">Costa Rica</option>
										<option value="Cote DIvoire">Cote D'Ivoire</option>
										<option value="Croatia">Croatia</option>
										<option value="Cuba">Cuba</option>
										<option value="Curaco">Curacao</option>
										<option value="Cyprus">Cyprus</option>
										<option value="Czech Republic">Czech Republic</option>
										<option value="Denmark">Denmark</option>
										<option value="Djibouti">Djibouti</option>
										<option value="Dominica">Dominica</option>
										<option value="Dominican Republic">Dominican Republic</option>
										<option value="East Timor">East Timor</option>
										<option value="Ecuador">Ecuador</option>
										<option value="Egypt">Egypt</option>
										<option value="El Salvador">El Salvador</option>
										<option value="Equatorial Guinea">Equatorial Guinea</option>
										<option value="Eritrea">Eritrea</option>
										<option value="Estonia">Estonia</option>
										<option value="Ethiopia">Ethiopia</option>
										<option value="Falkland Islands">Falkland Islands</option>
										<option value="Faroe Islands">Faroe Islands</option>
										<option value="Fiji">Fiji</option>
										<option value="Finland">Finland</option>
										<option value="France">France</option>
										<option value="French Guiana">French Guiana</option>
										<option value="French Polynesia">French Polynesia</option>
										<option value="French Southern Ter">French Southern Ter</option>
										<option value="Gabon">Gabon</option>
										<option value="Gambia">Gambia</option>
										<option value="Georgia">Georgia</option>
										<option value="Germany">Germany</option>
										<option value="Ghana">Ghana</option>
										<option value="Gibraltar">Gibraltar</option>
										<option value="Great Britain">Great Britain</option>
										<option value="Greece">Greece</option>
										<option value="Greenland">Greenland</option>
										<option value="Grenada">Grenada</option>
										<option value="Guadeloupe">Guadeloupe</option>
										<option value="Guam">Guam</option>
										<option value="Guatemala">Guatemala</option>
										<option value="Guinea">Guinea</option>
										<option value="Guyana">Guyana</option>
										<option value="Haiti">Haiti</option>
										<option value="Hawaii">Hawaii</option>
										<option value="Honduras">Honduras</option>
										<option value="Hong Kong">Hong Kong</option>
										<option value="Hungary">Hungary</option>
										<option value="Iceland">Iceland</option>
										<option value="India">India</option>
										<option value="Indonesia">Indonesia</option>
										<option value="Iran">Iran</option>
										<option value="Iraq">Iraq</option>
										<option value="Ireland">Ireland</option>
										<option value="Isle of Man">Isle of Man</option>
										<option value="Israel">Israel</option>
										<option value="Italy">Italy</option>
										<option value="Jamaica">Jamaica</option>
										<option value="Japan">Japan</option>
										<option value="Jordan">Jordan</option>
										<option value="Kazakhstan">Kazakhstan</option>
										<option value="Kenya">Kenya</option>
										<option value="Kiribati">Kiribati</option>
										<option value="Korea North">Korea North</option>
										<option value="Korea Sout">Korea South</option>
										<option value="Kuwait">Kuwait</option>
										<option value="Kyrgyzstan">Kyrgyzstan</option>
										<option value="Laos">Laos</option>
										<option value="Latvia">Latvia</option>
										<option value="Lebanon">Lebanon</option>
										<option value="Lesotho">Lesotho</option>
										<option value="Liberia">Liberia</option>
										<option value="Libya">Libya</option>
										<option value="Liechtenstein">Liechtenstein</option>
										<option value="Lithuania">Lithuania</option>
										<option value="Luxembourg">Luxembourg</option>
										<option value="Macau">Macau</option>
										<option value="Macedonia">Macedonia</option>
										<option value="Madagascar">Madagascar</option>
										<option value="Malaysia">Malaysia</option>
										<option value="Malawi">Malawi</option>
										<option value="Maldives">Maldives</option>
										<option value="Mali">Mali</option>
										<option value="Malta">Malta</option>
										<option value="Marshall Islands">Marshall Islands</option>
										<option value="Martinique">Martinique</option>
										<option value="Mauritania">Mauritania</option>
										<option value="Mauritius">Mauritius</option>
										<option value="Mayotte">Mayotte</option>
										<option value="Mexico">Mexico</option>
										<option value="Midway Islands">Midway Islands</option>
										<option value="Moldova">Moldova</option>
										<option value="Monaco">Monaco</option>
										<option value="Mongolia">Mongolia</option>
										<option value="Montserrat">Montserrat</option>
										<option value="Morocco">Morocco</option>
										<option value="Mozambique">Mozambique</option>
										<option value="Myanmar">Myanmar</option>
										<option value="Nambia">Nambia</option>
										<option value="Nauru">Nauru</option>
										<option value="Nepal">Nepal</option>
										<option value="Netherland Antilles">Netherland Antilles</option>
										<option value="Netherlands">Netherlands (Holland, Europe)</option>
										<option value="Nevis">Nevis</option>
										<option value="New Caledonia">New Caledonia</option>
										<option value="New Zealand">New Zealand</option>
										<option value="Nicaragua">Nicaragua</option>
										<option value="Niger">Niger</option>
										<option value="Nigeria">Nigeria</option>
										<option value="Niue">Niue</option>
										<option value="Norfolk Island">Norfolk Island</option>
										<option value="Norway">Norway</option>
										<option value="Oman">Oman</option>
										<option value="Pakistan">Pakistan</option>
										<option value="Palau Island">Palau Island</option>
										<option value="Palestine">Palestine</option>
										<option value="Panama">Panama</option>
										<option value="Papua New Guinea">Papua New Guinea</option>
										<option value="Paraguay">Paraguay</option>
										<option value="Peru">Peru</option>
										<option value="Phillipines">Philippines</option>
										<option value="Pitcairn Island">Pitcairn Island</option>
										<option value="Poland">Poland</option>
										<option value="Portugal">Portugal</option>
										<option value="Puerto Rico">Puerto Rico</option>
										<option value="Qatar">Qatar</option>
										<option value="Republic of Montenegro">Republic of Montenegro</option>
										<option value="Republic of Serbia">Republic of Serbia</option>
										<option value="Reunion">Reunion</option>
										<option value="Romania">Romania</option>
										<option value="Russia">Russia</option>
										<option value="Rwanda">Rwanda</option>
										<option value="St Barthelemy">St Barthelemy</option>
										<option value="St Eustatius">St Eustatius</option>
										<option value="St Helena">St Helena</option>
										<option value="St Kitts-Nevis">St Kitts-Nevis</option>
										<option value="St Lucia">St Lucia</option>
										<option value="St Maarten">St Maarten</option>
										<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
										<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
										<option value="Saipan">Saipan</option>
										<option value="Samoa">Samoa</option>
										<option value="Samoa American">Samoa American</option>
										<option value="San Marino">San Marino</option>
										<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
										<option value="Saudi Arabia">Saudi Arabia</option>
										<option value="Senegal">Senegal</option>
										<option value="Serbia">Serbia</option>
										<option value="Seychelles">Seychelles</option>
										<option value="Sierra Leone">Sierra Leone</option>
										<option value="Singapore">Singapore</option>
										<option value="Slovakia">Slovakia</option>
										<option value="Slovenia">Slovenia</option>
										<option value="Solomon Islands">Solomon Islands</option>
										<option value="Somalia">Somalia</option>
										<option value="South Africa">South Africa</option>
										<option value="Spain">Spain</option>
										<option value="Sri Lanka">Sri Lanka</option>
										<option value="Sudan">Sudan</option>
										<option value="Suriname">Suriname</option>
										<option value="Swaziland">Swaziland</option>
										<option value="Sweden">Sweden</option>
										<option value="Switzerland">Switzerland</option>
										<option value="Syria">Syria</option>
										<option value="Tahiti">Tahiti</option>
										<option value="Taiwan">Taiwan</option>
										<option value="Tajikistan">Tajikistan</option>
										<option value="Tanzania">Tanzania</option>
										<option value="Thailand">Thailand</option>
										<option value="Togo">Togo</option>
										<option value="Tokelau">Tokelau</option>
										<option value="Tonga">Tonga</option>
										<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
										<option value="Tunisia">Tunisia</option>
										<option value="Turkey">Turkey</option>
										<option value="Turkmenistan">Turkmenistan</option>
										<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
										<option value="Tuvalu">Tuvalu</option>
										<option value="Uganda">Uganda</option>
										<option value="Ukraine">Ukraine</option>
										<option value="United Arab Erimates">United Arab Emirates</option>
										<option value="United Kingdom">United Kingdom</option>
										<option value="United States of America">United States of America</option>
										<option value="Uraguay">Uruguay</option>
										<option value="Uzbekistan">Uzbekistan</option>
										<option value="Vanuatu">Vanuatu</option>
										<option value="Vatican City State">Vatican City State</option>
										<option value="Venezuela">Venezuela</option>
										<option value="Vietnam">Vietnam</option>
										<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
										<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
										<option value="Wake Island">Wake Island</option>
										<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
										<option value="Yemen">Yemen</option>
										<option value="Zaire">Zaire</option>
										<option value="Zambia">Zambia</option>
										<option value="Zimbabwe">Zimbabwe</option>
									</select>

									</div>


 


									
									<div class="form-col">

										<label>City <span style="color:red" id="demo3"> </span></label>

											
										<select  name="city" id="city" style="width: 100%;height: 50px">
											<option value="0">Please select city</option>
                                                        <option  value="Abbottabad">Abbottabad</option>
                                                        <option  value="Adezai">Adezai</option>
                                                        <option  value="Ali Bandar">Ali Bandar</option>
                                                        <option  value="Amir Chah">Amir Chah</option>
                                                        <option  value="Attock">Attock</option>
                                                        <option  value="Ayubia">Ayubia</option>
                                                        <option  value="Bahawalpur">Bahawalpur</option>
                                                        <option  value="Baden">Baden</option>
                                                        <option  value="Bagh">Bagh</option>
                                                        <option  value="Bahawalnagar">Bahawalnagar</option>
                                                        <option  value="Burewala">Burewala</option>
                                                        <option  value="Banda Daud Shah">Banda Daud Shah</option>
                                                        <option  value="Bannu district|Bannu">Bannu</option>
                                                        <option  value="Batagram">Batagram</option>
                                                        <option  value="Bazdar">Bazdar</option>
                                                        <option  value="Bela">Bela</option>
                                                        <option  value="Bellpat">Bellpat</option>
                                                        <option  value="Bhag">Bhag</option>
                                                        <option  value="Bhakkar">Bhakkar</option>
                                                        <option  value="Bhalwal">Bhalwal</option>
                                                        <option  value="Bhimber">Bhimber</option>
                                                        <option  value="Birote">Birote</option>
                                                        <option  value="Buner">Buner</option>
                                                        <option  value="Burj">Burj</option>
                                                        <option  value="Chiniot">Chiniot</option>
                                                        <option  value="Chachro">Chachro</option>
                                                        <option  value="Chagai">Chagai</option>
                                                        <option  value="Chah Sandan">Chah Sandan</option>
                                                        <option  value="Chailianwala">Chailianwala</option>
                                                        <option  value="Chakdara">Chakdara</option>
                                                        <option  value="Chakku">Chakku</option>
                                                        <option  value="Chakwal">Chakwal</option>
                                                        <option  value="Chaman">Chaman</option>
                                                        <option  value="Charsadda">Charsadda</option>
                                                        <option  value="Chhatr">Chhatr</option>
                                                        <option  value="Chichawatni">Chichawatni</option>
                                                        <option  value="Chitral">Chitral</option>
                                                        <option  value="Dadu">Dadu</option>
                                                        <option  value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                                                        <option  value="Dera Ismail Khan">Dera Ismail Khan</option>
                                                         <option  value="Dalbandin">Dalbandin</option>
                                                        <option  value="Dargai">Dargai</option>
                                                        <option  value="Darya Khan">Darya Khan</option>
                                                        <option  value="Daska">Daska</option>
                                                        <option  value="Dera Bugti">Dera Bugti</option>
                                                        <option  value="Dhana Sar">Dhana Sar</option>
                                                        <option  value="Digri">Digri</option>
                                                        <option  value="Dina City|Dina">Dina</option>
                                                        <option  value="Dinga">Dinga</option>
                                                        <option  value="Diplo, Pakistan|Diplo">Diplo</option>
                                                        <option  value="Diwana">Diwana</option>
                                                        <option  value="Dokri">Dokri</option>
                                                        <option  value="Drosh">Drosh</option>
                                                        <option  value="Duki">Duki</option>
                                                        <option  value="Dushi">Dushi</option>
                                                        <option  value="Duzab">Duzab</option>
                                                        <option  value="Faisalabad">Faisalabad</option>
                                                        <option  value="Fateh Jang">Fateh Jang</option>
                                                        <option  value="Ghotki">Ghotki</option>
                                                        <option  value="Gwadar">Gwadar</option>
                                                        <option  value="Gujranwala">Gujranwala</option>
                                                        <option  value="Gujrat">Gujrat</option>
                                                        <option  value="Gadra">Gadra</option>
                                                        <option  value="Gajar">Gajar</option>
                                                        <option  value="Gandava">Gandava</option>
                                                        <option  value="Garhi Khairo">Garhi Khairo</option>
                                                        <option  value="Garruck">Garruck</option>
                                                        <option  value="Ghakhar Mandi">Ghakhar Mandi</option>
                                                        <option  value="Ghanian">Ghanian</option>
                                                        <option  value="Ghauspur">Ghauspur</option>
                                                        <option  value="Ghazluna">Ghazluna</option>
                                                        <option  value="Girdan">Girdan</option>
                                                        <option  value="Gulistan">Gulistan</option>
                                                        <option  value="Gwash">Gwash</option>
                                                        <option  value="Hyderabad">Hyderabad</option>
                                                        <option  value="Hala">Hala</option>
                                                        <option  value="Haripur">Haripur</option>
                                                        <option  value="Hab Chauki">Hab Chauki</option>
                                                        <option  value="Hafizabad">Hafizabad</option>
                                                        <option  value="Hameedabad">Hameedabad</option>
                                                        <option  value="Hangu">Hangu</option>
                                                        <option  value="Harnai">Harnai</option>
                                                        <option  value="Hasilpur">Hasilpur</option>
                                                        <option  value="Haveli Lakha">Haveli Lakha</option>
                                                        <option  value="Hinglaj">Hinglaj</option>
                                                        <option  value="Hoshab">Hoshab</option>
                                                        <option  value="Islamabad">Islamabad</option>
                                                        <option  value="Islamkot">Islamkot</option>
                                                        <option  value="Ispikan">Ispikan</option>
                                                        <option  value="Jacobabad">Jacobabad</option>
                                                        <option  value="Jamshoro">Jamshoro</option>
                                                        <option  value="Jhang">Jhang</option>
                                                        <option  value="Jhelum">Jhelum</option>
                                                        <option  value="Jamesabad">Jamesabad</option>
                                                        <option  value="Jampur">Jampur</option>
                                                        <option  value="Janghar">Janghar</option>
                                                        <option  value="Jati, Jati(Mughalbhin)">Jati</option>
                                                        <option  value="Jauharabad">Jauharabad</option>
                                                        <option  value="Jhal">Jhal</option>
                                                        <option  value="Jhal Jhao">Jhal Jhao</option>
                                                        <option  value="Jhatpat">Jhatpat</option>
                                                        <option  value="Jhudo">Jhudo</option>
                                                        <option  value="Jiwani">Jiwani</option>
                                                        <option  value="Jungshahi">Jungshahi</option>
                                                        <option  value="Karachi">Karachi</option>
                                                        <option  value="Kotri">Kotri</option>
                                                        <option  value="Kalam">Kalam</option>
                                                        <option  value="Kalandi">Kalandi</option>
                                                        <option  value="Kalat">Kalat</option>
                                                        <option  value="Kamalia">Kamalia</option>
                                                        <option  value="Kamararod">Kamararod</option>
                                                        <option  value="Kamber">Kamber</option>
                                                        <option  value="Kamokey">Kamokey</option>
                                                        <option  value="Kanak">Kanak</option>
                                                        <option  value="Kandi">Kandi</option>
                                                        <option  value="Kandiaro">Kandiaro</option>
                                                        <option  value="Kanpur">Kanpur</option>
                                                        <option  value="Kapip">Kapip</option>
                                                        <option  value="Kappar">Kappar</option>
                                                        <option  value="Karak City">Karak City</option>
                                                        <option  value="Karodi">Karodi</option>
                                                        <option  value="Kashmor">Kashmor</option>
                                                        <option  value="Kasur">Kasur</option>
                                                        <option  value="Katuri">Katuri</option>
                                                        <option  value="Keti Bandar">Keti Bandar</option>
                                                        <option  value="Khairpur">Khairpur</option>
                                                        <option  value="Khanaspur">Khanaspur</option>
                                                        <option  value="Khanewal">Khanewal</option>
                                                        <option  value="Kharan">Kharan</option>
                                                        <option  value="kharian">kharian</option>
                                                        <option  value="Khokhropur">Khokhropur</option>
                                                        <option  value="Khora">Khora</option>
                                                        <option  value="Khushab">Khushab</option>
                                                        <option  value="Khuzdar">Khuzdar</option>
                                                        <option  value="Kikki">Kikki</option>
                                                        <option  value="Klupro">Klupro</option>
                                                        <option  value="Kohan">Kohan</option>
                                                        <option  value="Kohat">Kohat</option>
                                                        <option  value="Kohistan">Kohistan</option>
                                                        <option  value="Kohlu">Kohlu</option>
                                                        <option  value="Korak">Korak</option>
                                                        <option  value="Korangi">Korangi</option>
                                                        <option  value="Kot Sarae">Kot Sarae</option>
                                                        <option  value="Kotli">Kotli</option>
                                                        <option  value="Lahore">Lahore</option>
                                                        <option  value="Larkana">Larkana</option>
                                                        <option  value="Lahri">Lahri</option>
                                                        <option  value="Lakki Marwat">Lakki Marwat</option>
                                                        <option  value="Lasbela">Lasbela</option>
                                                        <option  value="Latamber">Latamber</option>
                                                        <option  value="Layyah">Layyah</option>
                                                        <option  value="Leiah">Leiah</option>
                                                        <option  value="Liari">Liari</option>
                                                        <option  value="Lodhran">Lodhran</option>
                                                        <option  value="Loralai">Loralai</option>
                                                        <option  value="Lower Dir">Lower Dir</option>
                                                        <option  value="Shadan Lund">Shadan Lund</option>
                                                        <option  value="Multan">Multan</option>
                                                        <option  value="Mandi Bahauddin">Mandi Bahauddin</option>
                                                        <option  value="Mansehra">Mansehra</option>
                                                        <option  value="Mian Chanu">Mian Chanu</option>
                                                        <option  value="Mirpur">Mirpur</option>
                                                        <option  value="Moro, Pakistan|Moro">Moro</option>
                                                        <option  value="Mardan">Mardan</option>
                                                        <option  value="Mach">Mach</option>
                                                        <option  value="Madyan">Madyan</option>
                                                        <option  value="Malakand">Malakand</option>
                                                        <option  value="Mand">Mand</option>
                                                        <option  value="Manguchar">Manguchar</option>
                                                        <option  value="Mashki Chah">Mashki Chah</option>
                                                        <option  value="Maslti">Maslti</option>
                                                        <option  value="Mastuj">Mastuj</option>
                                                        <option  value="Mastung">Mastung</option>
                                                        <option  value="Mathi">Mathi</option>
                                                        <option  value="Matiari">Matiari</option>
                                                        <option  value="Mehar">Mehar</option>
                                                        <option  value="Mekhtar">Mekhtar</option>
                                                        <option  value="Merui">Merui</option>
                                                        <option  value="Mianwali">Mianwali</option>
                                                        <option  value="Mianez">Mianez</option>
                                                        <option  value="Mirpur Batoro">Mirpur Batoro</option>
                                                        <option  value="Mirpur Khas">Mirpur Khas</option>
                                                        <option  value="Mirpur Sakro">Mirpur Sakro</option>
                                                        <option  value="Mithi">Mithi</option>
                                                        <option  value="Mongora">Mongora</option>
                                                        <option  value="Murgha Kibzai">Murgha Kibzai</option>
                                                        <option  value="Muridke">Muridke</option>
                                                        <option  value="Musa Khel Bazar">Musa Khel Bazar</option>
                                                        <option  value="Muzaffar Garh">Muzaffar Garh</option>
                                                        <option  value="Muzaffarabad">Muzaffarabad</option>
                                                        <option  value="Nawabshah">Nawabshah</option>
                                                        <option  value="Nazimabad">Nazimabad</option>
                                                        <option  value="Nowshera">Nowshera</option>
                                                        <option  value="Nagar Parkar">Nagar Parkar</option>
                                                        <option  value="Nagha Kalat">Nagha Kalat</option>
                                                        <option  value="Nal">Nal</option>
                                                        <option  value="Naokot">Naokot</option>
                                                        <option  value="Nasirabad">Nasirabad</option>
                                                        <option  value="Nauroz Kalat">Nauroz Kalat</option>
                                                        <option  value="Naushara">Naushara</option>
                                                        <option  value="Nur Gamma">Nur Gamma</option>
                                                        <option  value="Nushki">Nushki</option>
                                                        <option  value="Nuttal">Nuttal</option>
                                                        <option  value="Okara">Okara</option>
                                                        <option  value="Ormara">Ormara</option>
                                                        <option  value="Peshawar">Peshawar</option>
                                                        <option  value="Panjgur">Panjgur</option>
                                                        <option  value="Pasni City">Pasni City</option>
                                                        <option  value="Paharpur">Paharpur</option>
                                                        <option  value="Palantuk">Palantuk</option>
                                                        <option  value="Pendoo">Pendoo</option>
                                                        <option  value="Piharak">Piharak</option>
                                                        <option  value="Pirmahal">Pirmahal</option>
                                                        <option  value="Pishin">Pishin</option>
                                                        <option  value="Plandri">Plandri</option>
                                                        <option  value="Pokran">Pokran</option>
                                                        <option  value="Pounch">Pounch</option>
                                                        <option  value="Quetta">Quetta</option>
                                                        <option  value="Qambar">Qambar</option>
                                                        <option  value="Qamruddin Karez">Qamruddin Karez</option>
                                                        <option  value="Qazi Ahmad">Qazi Ahmad</option>
                                                        <option  value="Qila Abdullah">Qila Abdullah</option>
                                                        <option  value="Qila Ladgasht">Qila Ladgasht</option>
                                                        <option  value="Qila Safed">Qila Safed</option>
                                                        <option  value="Qila Saifullah">Qila Saifullah</option>
                                                        <option  value="Rawalpindi">Rawalpindi</option>
                                                        <option  value="Rabwah">Rabwah</option>
                                                        <option  value="Rahim Yar Khan">Rahim Yar Khan</option>
                                                        <option  value="Rajan Pur">Rajan Pur</option>
                                                        <option  value="Rakhni">Rakhni</option>
                                                        <option  value="Ranipur">Ranipur</option>
                                                        <option  value="Ratodero">Ratodero</option>
                                                        <option  value="Rawalakot">Rawalakot</option>
                                                        <option  value="Renala Khurd">Renala Khurd</option>
                                                        <option  value="Robat Thana">Robat Thana</option>
                                                        <option  value="Rodkhan">Rodkhan</option>
                                                        <option  value="Rohri">Rohri</option>
                                                        <option  value="Sialkot">Sialkot</option>
                                                        <option  value="Sadiqabad">Sadiqabad</option>
                                                        <option  value="Safdar Abad-(Dhaban Singh)">Safdar Abad</option>
                                                        <option  value="Sahiwal">Sahiwal</option>
                                                        <option  value="Saidu Sharif">Saidu Sharif</option>
                                                        <option  value="Saindak">Saindak</option>
                                                        <option  value="Sakrand">Sakrand</option>
                                                        <option  value="Sanjawi">Sanjawi</option>
                                                        <option  value="Sargodha">Sargodha</option>
                                                        <option  value="Saruna">Saruna</option>
                                                        <option  value="Shabaz Kalat">Shabaz Kalat</option>
                                                        <option  value="Shadadkhot">Shadadkhot</option>
                                                        <option  value="Shahbandar">Shahbandar</option>
                                                        <option  value="Shahpur">Shahpur</option>
                                                        <option  value="Shahpur Chakar">Shahpur Chakar</option>
                                                        <option  value="Shakargarh">Shakargarh</option>
                                                        <option  value="Shangla">Shangla</option>
                                                        <option  value="Sharam Jogizai">Sharam Jogizai</option>
                                                        <option  value="Sheikhupura">Sheikhupura</option>
                                                        <option  value="Shikarpur">Shikarpur</option>
                                                        <option  value="Shingar">Shingar</option>
                                                        <option  value="Shorap">Shorap</option>
                                                        <option  value="Sibi">Sibi</option>
                                                        <option  value="Sohawa">Sohawa</option>
                                                        <option  value="Sonmiani">Sonmiani</option>
                                                        <option  value="Sooianwala">Sooianwala</option>
                                                        <option  value="Spezand">Spezand</option>
                                                        <option  value="Spintangi">Spintangi</option>
                                                        <option  value="Sui">Sui</option>
                                                        <option  value="Sujawal">Sujawal</option>
                                                        <option  value="Sukkur">Sukkur</option>
                                                        <option  value="Suntsar">Suntsar</option>
                                                        <option  value="Surab">Surab</option>
                                                        <option  value="Swabi">Swabi</option>
                                                        <option  value="Swat">Swat</option>
                                                        <option  value="Tando Adam">Tando Adam</option>
                                                        <option  value="Tando Bago">Tando Bago</option>
                                                        <option  value="Tangi">Tangi</option>
                                                        <option  value="Tank City">Tank City</option>
                                                        <option  value="Tar Ahamd Rind">Tar Ahamd Rind</option>
                                                        <option  value="Thalo">Thalo</option>
                                                        <option  value="Thatta">Thatta</option>
                                                        <option  value="Toba Tek Singh">Toba Tek Singh</option>
                                                        <option  value="Tordher">Tordher</option>
                                                        <option  value="Tujal">Tujal</option>
                                                        <option  value="Tump">Tump</option>
                                                        <option  value="Turbat">Turbat</option>
                                                        <option  value="Umarao">Umarao</option>
                                                        <option  value="Umarkot">Umarkot</option>
                                                        <option  value="Upper Dir">Upper Dir</option>
                                                        <option  value="Uthal">Uthal</option>
                                                        <option  value="Vehari">Vehari</option>
                                                        <option  value="Veirwaro">Veirwaro</option>
                                                        <option  value="Vitakri">Vitakri</option>
                                                        <option  value="Wadh">Wadh</option>
                                                        <option  value="Wah Cantt">Wah Cantt</option>
                                                        <option  value="Warah">Warah</option>
                                                        <option  value="Washap">Washap</option>
                                                        <option  value="Wasjuk">Wasjuk</option>
                                                        <option  value="Wazirabad">Wazirabad</option>
                                                        <option  value="Yakmach">Yakmach</option>
                                                        <option  value="Zhob">Zhob</option>
                                                        <option  value="Other">Other</option>                                       
                                                </select>

									</div>


									
									<div class="form-col">

										<label>Willing to travel(km) <span style="color:red" id="demo4"> </span></label>

										<input type="text" name="distance" id="distance" onkeypress="return validatenumerics(event)"  />

									</div>

										<div class="form-col">

										<label>Select Image <span style="color:red" id="demo5"> </span></label>

										<input type="file" name="image" id="image">

									</div>

									<div class="form-full-col">

										<label>Description <span style="color:red" id="demo6"> </span></label>

										<textarea name="desc" id="desc"></textarea>

									</div>



									<div class="clearfix">

										<input type="submit" />
										<input type="button" name="Back" value="Back" onclick="location.href='/profile.php';" style="width:150px;color: #fff;background: #004c83; margin-left: 50px"/>

									</div>
									<!--

									<div class="clearfix">

										<input type="button" name="Back" value="Back" onclick="location.href='/profile.php';" style="width:200px;color: #fff;background: #004c83;">

									</div>-->

								</div>

							</fieldset>

						</form>

					</div>

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
<script language="JavaScript" type="text/javascript">

function myFunction() {

    var aservice = document.getElementById("aservice");
    var cost = document.getElementById("cost");
    var desc = document.getElementById("desc");
    var city = document.getElementById("city");
    var distance = document.getElementById("distance");
    var image = document.getElementById("image");
     var country = document.getElementById("country");
  
  
    var flag_submit = true;
 
    if (aservice.value == "") {
        document.getElementById("demo").innerHTML = "Please enter service name.";
        document.form1.aservice.focus();
        flag_submit = false;
    } else {
        document.getElementById("demo").innerHTML = "";
        document.form1.cost.focus();
        
    } 

	if (cost.value == "") {
        document.getElementById("demo1").innerHTML = "Please enter cost.";
        flag_submit = false;
    } else {
        document.getElementById("demo1").innerHTML = "";
        document.form1.country.focus();
    } 

    if (country.value == "0") {
        document.getElementById("demo2").innerHTML = "Please enter country.";
        flag_submit = false;
    } else {
        document.getElementById("demo2").innerHTML = "";
        document.form1.city.focus();
        
    } 
    if (city.value == "0") {
        document.getElementById("demo3").innerHTML = "Please enter city.";
        flag_submit = false;
    } else {
        document.getElementById("demo3").innerHTML = "";
        document.form1.distance.focus();
    } 
    if (distance.value == "") {
        document.getElementById("demo4").innerHTML = "Please enter distance.";
        flag_submit = false;
    } else {
        document.getElementById("demo4").innerHTML = "";
        document.form1.image.focus();
       
    } 
    if (image.value == "") {
        document.getElementById("demo5").innerHTML = "Please select image.";
        flag_submit = false;
    } else {
        document.getElementById("demo5").innerHTML = "";
        document.form1.desc.focus();
  
    } 
    if (desc.value == "") {
        document.getElementById("demo6").innerHTML = "Please enter description.";
        flag_submit = false;
    } else {
        document.getElementById("demo6").innerHTML = "";
   
    } 
   
	return flag_submit;
} 


function validatenumerics(key) {
           //getting key code of pressed key
           var keycode = (key.which) ? key.which : key.keyCode;
           //comparing pressed keycodes

           if (keycode > 31 && (keycode < 48 || keycode > 57)) {
               document.getElementById("demo4").innerHTML = "Please enter numeric number.";
               return false;
           }
           else{
           	document.getElementById("demo4").innerHTML = "";
           	return true;
           } 


       }
</script>