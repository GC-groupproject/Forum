<?php
	// Open header and set any specific files for this pages
	include("DATA/header_open.php");
?>
	<title>Forum - Edit Profile</title>
<?php
	// close header and set any specific files for this pages
	include("DATA/header_close.php");
?>

<?php
	if($_SESSION['user_id'] != ANONUSER)		
	{
	
		$conn = mysqli_connect('webdesign4.georgianc.on.ca', 'db200176338', '99939', 'db200176338') or die(mysqli_error());
		
		  $sql = "SELECT * FROM forum_user_info";
  		  $result = mysqli_query($conn, $sql) or die('Error querying database.');
		  
		  while ($row = mysqli_fetch_array($result)) {
			$fname =  $row['first_name'];
			$lname =  $row['last_name'];
			$birthdate = $row['birthdate'];
			$country = $row['Country'];
			$image = $row['user_image'];
				
		} 
		mysqli_close($conn);
		
?>
<h1 class='header'>Manage Your Profile</h1>
<form method="post" action="update.php">
    
    <div>
	<label>First name:</label>
	<input type="text" name="firstname" value="<?php echo $fname; ?>" />
</div>
<div>
	<label>Last name:</label>
	<input type="text" name="lastname" value="<?php echo $lname; ?>" />
</div>
<div>
	<img src="<?php echo $image ?>" width="200" height="200" />
	<input type="file" accept="image/*" />
</div>
<div>
	<label>Birthdate: </label>
	<input name="birthdate" value="<?php echo $birthdate; ?>" type="date" />
</div>
<div>
	<label for="country"><p class="required">*</p>Select Country</label>
      	<select name="country" required="required" >
            <option value="">Country...</option>
            <option value="AF" <?php if($country == "AF") echo 'selected="selected"'; ?>>Afghanistan</option>
            <option value="AL" <?php if($country == "AL") echo 'selected="selected"'; ?>>Albania</option>
            <option value="DZ" <?php if($country == "DZ") echo 'selected="selected"'; ?>>Algeria</option>
            <option value="AS" <?php if($country == "AS") echo 'selected="selected"'; ?>>American Samoa</option>
            <option value="AD" <?php if($country == "AD") echo 'selected="selected"'; ?>>Andorra</option>
            <option value="AG" <?php if($country == "AG") echo 'selected="selected"'; ?>>Angola</option>
            <option value="AI" <?php if($country == "AI") echo 'selected="selected"'; ?>>Anguilla</option>
            <option value="AR" <?php if($country == "AR") echo 'selected="selected"'; ?>>Argentina</option>
            <option value="AA" <?php if($country == "AA") echo 'selected="selected"'; ?>>Armenia</option>
            <option value="AW" <?php if($country == "AW") echo 'selected="selected"'; ?>>Aruba</option>
            <option value="AU" <?php if($country == "AU") echo 'selected="selected"'; ?>>Australia</option>
            <option value="AT" <?php if($country == "AT") echo 'selected="selected"'; ?>>Austria</option>
            <option value="AZ" <?php if($country == "AZ") echo 'selected="selected"'; ?>>Azerbaijan</option>
            <option value="BS" <?php if($country == "BS") echo 'selected="selected"'; ?>>Bahamas</option>
            <option value="BH" <?php if($country == "BH") echo 'selected="selected"'; ?>>Bahrain</option>
            <option value="BD" <?php if($country == "BD") echo 'selected="selected"'; ?>>Bangladesh</option>
            <option value="BB" <?php if($country == "BB") echo 'selected="selected"'; ?>>Barbados</option>
            <option value="BY" <?php if($country == "BY") echo 'selected="selected"'; ?>>Belarus</option>
            <option value="BE" <?php if($country == "BE") echo 'selected="selected"'; ?>>Belgium</option>
            <option value="BZ" <?php if($country == "BZ") echo 'selected="selected"'; ?>>Belize</option>
            <option value="BJ" <?php if($country == "BJ") echo 'selected="selected"'; ?>>Benin</option>
            <option value="BM" <?php if($country == "BM") echo 'selected="selected"'; ?>>Bermuda</option>
            <option value="BT" <?php if($country == "BT") echo 'selected="selected"'; ?>>Bhutan</option>
            <option value="BO" <?php if($country == "BO") echo 'selected="selected"'; ?>>Bolivia</option>
            <option value="BL" <?php if($country == "BL") echo 'selected="selected"'; ?>>Bonaire</option>
            <option value="BA" <?php if($country == "BA") echo 'selected="selected"'; ?>>Bosnia &amp; Herzegovina</option>
            <option value="BW" <?php if($country == "BW") echo 'selected="selected"'; ?>>Botswana</option>
            <option value="BR" <?php if($country == "BR") echo 'selected="selected"'; ?>>Brazil</option>
            <option value="BC" <?php if($country == "BC") echo 'selected="selected"'; ?>>British Indian Ocean Ter</option>
            <option value="BN" <?php if($country == "BN") echo 'selected="selected"'; ?>>Brunei</option>
            <option value="BG" <?php if($country == "BG") echo 'selected="selected"'; ?>>Bulgaria</option>
            <option value="BF" <?php if($country == "BF") echo 'selected="selected"'; ?>>Burkina Faso</option>
            <option value="BI" <?php if($country == "BI") echo 'selected="selected"'; ?>>Burundi</option>
            <option value="KH" <?php if($country == "KH") echo 'selected="selected"'; ?>>Cambodia</option>
            <option value="CM" <?php if($country == "CM") echo 'selected="selected"'; ?>>Cameroon</option>
            <option value="CA" <?php if($country == "CA") echo 'selected="selected"'; ?>>Canada</option>
            <option value="IC" <?php if($country == "IC") echo 'selected="selected"'; ?>>Canary Islands</option>
            <option value="CV" <?php if($country == "CV") echo 'selected="selected"'; ?>>Cape Verde</option>
            <option value="KY" <?php if($country == "KY") echo 'selected="selected"'; ?>>Cayman Islands</option>
            <option value="CF" <?php if($country == "CF") echo 'selected="selected"'; ?>>Central African Republic</option>
            <option value="TD" <?php if($country == "TD") echo 'selected="selected"'; ?>>Chad</option>
            <option value="CD" <?php if($country == "CD") echo 'selected="selected"'; ?>>Channel Islands</option>
            <option value="CL" <?php if($country == "CL") echo 'selected="selected"'; ?>>Chile</option>
            <option value="CN" <?php if($country == "CN") echo 'selected="selected"'; ?>>China</option>
            <option value="CI" <?php if($country == "CI") echo 'selected="selected"'; ?>>Christmas Island</option>
            <option value="CS" <?php if($country == "CS") echo 'selected="selected"'; ?>>Cocos Island</option>
            <option value="CO" <?php if($country == "CO") echo 'selected="selected"'; ?>>Colombia</option>
            <option value="CC" <?php if($country == "CC") echo 'selected="selected"'; ?>>Comoros</option>
            <option value="CG" <?php if($country == "CG") echo 'selected="selected"'; ?>>Congo</option>
            <option value="CK" <?php if($country == "CK") echo 'selected="selected"'; ?>>Cook Islands</option>
            <option value="CR" <?php if($country == "CR") echo 'selected="selected"'; ?>>Costa Rica</option>
            <option value="CT" <?php if($country == "CT") echo 'selected="selected"'; ?>>Cote D'Ivoire</option>
            <option value="HR" <?php if($country == "HR") echo 'selected="selected"'; ?>>Croatia</option>
            <option value="CU" <?php if($country == "CU") echo 'selected="selected"'; ?>>Cuba</option>
            <option value="CB" <?php if($country == "CB") echo 'selected="selected"'; ?>>Curacao</option>
            <option value="CY" <?php if($country == "CY") echo 'selected="selected"'; ?>>Cyprus</option>
            <option value="CZ" <?php if($country == "CZ") echo 'selected="selected"'; ?>>Czech Republic</option>
            <option value="DK" <?php if($country == "DK") echo 'selected="selected"'; ?>>Denmark</option>
            <option value="DJ" <?php if($country == "DJ") echo 'selected="selected"'; ?>>Djibouti</option>
            <option value="DM" <?php if($country == "DM") echo 'selected="selected"'; ?>>Dominica</option>
            <option value="DO" <?php if($country == "DO") echo 'selected="selected"'; ?>>Dominican Republic</option>
            <option value="TM" <?php if($country == "TM") echo 'selected="selected"'; ?>>East Timor</option>
            <option value="EC" <?php if($country == "EC") echo 'selected="selected"'; ?>>Ecuador</option>
            <option value="EG" <?php if($country == "EG") echo 'selected="selected"'; ?>>Egypt</option>
            <option value="SV" <?php if($country == "SV") echo 'selected="selected"'; ?>>El Salvador</option>
            <option value="GQ" <?php if($country == "GQ") echo 'selected="selected"'; ?>>Equatorial Guinea</option>
            <option value="ER" <?php if($country == "ER") echo 'selected="selected"'; ?>>Eritrea</option>
            <option value="EE" <?php if($country == "EE") echo 'selected="selected"'; ?>>Estonia</option>
            <option value="ET" <?php if($country == "ET") echo 'selected="selected"'; ?>>Ethiopia</option>
            <option value="FA" <?php if($country == "FA") echo 'selected="selected"'; ?>>Falkland Islands</option>
            <option value="FO" <?php if($country == "FO") echo 'selected="selected"'; ?>>Faroe Islands</option>
            <option value="FJ" <?php if($country == "FJ") echo 'selected="selected"'; ?>>Fiji</option>
            <option value="FI" <?php if($country == "FI") echo 'selected="selected"'; ?>>Finland</option>
            <option value="FR" <?php if($country == "FR") echo 'selected="selected"'; ?>>France</option>
            <option value="GF" <?php if($country == "GF") echo 'selected="selected"'; ?>>French Guiana</option>
            <option value="PF" <?php if($country == "PF") echo 'selected="selected"'; ?>>French Polynesia</option>
            <option value="FS" <?php if($country == "FS") echo 'selected="selected"'; ?>>French Southern Ter</option>
            <option value="GA" <?php if($country == "GA") echo 'selected="selected"'; ?>>Gabon</option>
            <option value="GM" <?php if($country == "GM") echo 'selected="selected"'; ?>>Gambia</option>
            <option value="GE" <?php if($country == "GE") echo 'selected="selected"'; ?>>Georgia</option>
            <option value="DE" <?php if($country == "DE") echo 'selected="selected"'; ?>>Germany</option>
            <option value="GH" <?php if($country == "GH") echo 'selected="selected"'; ?>>Ghana</option>
            <option value="GI" <?php if($country == "GI") echo 'selected="selected"'; ?>>Gibraltar</option>
            <option value="GB" <?php if($country == "GB") echo 'selected="selected"'; ?>>Great Britain</option>
            <option value="GR" <?php if($country == "GR") echo 'selected="selected"'; ?>>Greece</option>
            <option value="GL" <?php if($country == "GL") echo 'selected="selected"'; ?>>Greenland</option>
            <option value="GD" <?php if($country == "GD") echo 'selected="selected"'; ?>>Grenada</option>
            <option value="GP" <?php if($country == "GP") echo 'selected="selected"'; ?>>Guadeloupe</option>
            <option value="GU" <?php if($country == "GU") echo 'selected="selected"'; ?>>Guam</option>
            <option value="GT" <?php if($country == "GT") echo 'selected="selected"'; ?>>Guatemala</option>
            <option value="GN" <?php if($country == "GN") echo 'selected="selected"'; ?>>Guinea</option>
            <option value="GY" <?php if($country == "GY") echo 'selected="selected"'; ?>>Guyana</option>
            <option value="HT" <?php if($country == "HT") echo 'selected="selected"'; ?>>Haiti</option>
            <option value="HW" <?php if($country == "HW") echo 'selected="selected"'; ?>>Hawaii</option>
            <option value="HN" <?php if($country == "HN") echo 'selected="selected"'; ?>>Honduras</option>
            <option value="HK" <?php if($country == "HK") echo 'selected="selected"'; ?>>Hong Kong</option>
            <option value="HU" <?php if($country == "HU") echo 'selected="selected"'; ?>>Hungary</option>
            <option value="IS" <?php if($country == "IS") echo 'selected="selected"'; ?>>Iceland</option>
            <option value="IN" <?php if($country == "IN") echo 'selected="selected"'; ?>>India</option>
            <option value="ID" <?php if($country == "ID") echo 'selected="selected"'; ?>>Indonesia</option>
            <option value="IA" <?php if($country == "IA") echo 'selected="selected"'; ?>>Iran</option>
            <option value="IQ" <?php if($country == "IQ") echo 'selected="selected"'; ?>>Iraq</option>
            <option value="IR" <?php if($country == "IR") echo 'selected="selected"'; ?>>Ireland</option>
            <option value="IM" <?php if($country == "IM") echo 'selected="selected"'; ?>>Isle of Man</option>
            <option value="IL" <?php if($country == "IL") echo 'selected="selected"'; ?>>Israel</option>
            <option value="IT" <?php if($country == "IT") echo 'selected="selected"'; ?>>Italy</option>
            <option value="JM" <?php if($country == "JM") echo 'selected="selected"'; ?>>Jamaica</option>
            <option value="JP" <?php if($country == "JP") echo 'selected="selected"'; ?>>Japan</option>
            <option value="JO" <?php if($country == "JO") echo 'selected="selected"'; ?>>Jordan</option>
            <option value="KZ" <?php if($country == "KZ") echo 'selected="selected"'; ?>>Kazakhstan</option>
            <option value="KE" <?php if($country == "KE") echo 'selected="selected"'; ?>>Kenya</option>
            <option value="KI" <?php if($country == "KI") echo 'selected="selected"'; ?>>Kiribati</option>
            <option value="NK" <?php if($country == "NK") echo 'selected="selected"'; ?>>Korea North</option>
            <option value="KS" <?php if($country == "KS") echo 'selected="selected"'; ?>>Korea South</option>
            <option value="KW" <?php if($country == "KW") echo 'selected="selected"'; ?>>Kuwait</option>
            <option value="KG" <?php if($country == "KG") echo 'selected="selected"'; ?>>Kyrgyzstan</option>
            <option value="LA" <?php if($country == "LA") echo 'selected="selected"'; ?>>Laos</option>
            <option value="LV" <?php if($country == "LV") echo 'selected="selected"'; ?>>Latvia</option>
            <option value="LB" <?php if($country == "LB") echo 'selected="selected"'; ?>>Lebanon</option>
            <option value="LS" <?php if($country == "LS") echo 'selected="selected"'; ?>>Lesotho</option>
            <option value="LR" <?php if($country == "LR") echo 'selected="selected"'; ?>>Liberia</option>
            <option value="LY" <?php if($country == "LY") echo 'selected="selected"'; ?>>Libya</option>
            <option value="LI" <?php if($country == "LI") echo 'selected="selected"'; ?>>Liechtenstein</option>
            <option value="LT" <?php if($country == "LT") echo 'selected="selected"'; ?>>Lithuania</option>
            <option value="LU" <?php if($country == "LU") echo 'selected="selected"'; ?>>Luxembourg</option>
            <option value="MO" <?php if($country == "MO") echo 'selected="selected"'; ?>>Macau</option>
            <option value="MK" <?php if($country == "MK") echo 'selected="selected"'; ?>>Macedonia</option>
            <option value="MG" <?php if($country == "MG") echo 'selected="selected"'; ?>>Madagascar</option>
            <option value="MY" <?php if($country == "MY") echo 'selected="selected"'; ?>>Malaysia</option>
            <option value="MW" <?php if($country == "MW") echo 'selected="selected"'; ?>>Malawi</option>
            <option value="MV" <?php if($country == "MV") echo 'selected="selected"'; ?>>Maldives</option>
            <option value="ML" <?php if($country == "ML") echo 'selected="selected"'; ?>>Mali</option>
            <option value="MT" <?php if($country == "MT") echo 'selected="selected"'; ?>>Malta</option>
            <option value="MH" <?php if($country == "MH") echo 'selected="selected"'; ?>>Marshall Islands</option>
            <option value="MQ" <?php if($country == "MQ") echo 'selected="selected"'; ?>>Martinique</option>
            <option value="MR" <?php if($country == "MR") echo 'selected="selected"'; ?>>Mauritania</option>
            <option value="MU" <?php if($country == "MU") echo 'selected="selected"'; ?>>Mauritius</option>
            <option value="ME" <?php if($country == "ME") echo 'selected="selected"'; ?>>Mayotte</option>
            <option value="MX" <?php if($country == "MX") echo 'selected="selected"'; ?>>Mexico</option>
            <option value="MI" <?php if($country == "MI") echo 'selected="selected"'; ?>>Midway Islands</option>
            <option value="MD" <?php if($country == "MD") echo 'selected="selected"'; ?>>Moldova</option>
            <option value="MC" <?php if($country == "MC") echo 'selected="selected"'; ?>>Monaco</option>
            <option value="MN" <?php if($country == "MN") echo 'selected="selected"'; ?>>Mongolia</option>
            <option value="MS" <?php if($country == "MS") echo 'selected="selected"'; ?>>Montserrat</option>
            <option value="MA" <?php if($country == "MA") echo 'selected="selected"'; ?>>Morocco</option>
            <option value="MZ" <?php if($country == "MZ") echo 'selected="selected"'; ?>>Mozambique</option>
            <option value="MM" <?php if($country == "MM") echo 'selected="selected"'; ?>>Myanmar</option>
            <option value="NA" <?php if($country == "NA") echo 'selected="selected"'; ?>>Nambia</option>
            <option value="NU" <?php if($country == "NU") echo 'selected="selected"'; ?>>Nauru</option>
            <option value="NP" <?php if($country == "NP") echo 'selected="selected"'; ?>>Nepal</option>
            <option value="AN" <?php if($country == "AN") echo 'selected="selected"'; ?>>Netherland Antilles</option>
            <option value="NL" <?php if($country == "NL") echo 'selected="selected"'; ?>>Netherlands (Holland, Europe)</option>
            <option value="NV" <?php if($country == "NV") echo 'selected="selected"'; ?>>Nevis</option>
            <option value="NC" <?php if($country == "NC") echo 'selected="selected"'; ?>>New Caledonia</option>
            <option value="NZ" <?php if($country == "NZ") echo 'selected="selected"'; ?>>New Zealand</option>
            <option value="NI" <?php if($country == "NI") echo 'selected="selected"'; ?>>Nicaragua</option>
            <option value="NE" <?php if($country == "NE") echo 'selected="selected"'; ?>>Niger</option>
            <option value="NG" <?php if($country == "NG") echo 'selected="selected"'; ?>>Nigeria</option>
            <option value="NW" <?php if($country == "NW") echo 'selected="selected"'; ?>>Niue</option>
            <option value="NF" <?php if($country == "NF") echo 'selected="selected"'; ?>>Norfolk Island</option>
            <option value="NO" <?php if($country == "NO") echo 'selected="selected"'; ?>>Norway</option>
            <option value="OM" <?php if($country == "OM") echo 'selected="selected"'; ?>>Oman</option>
            <option value="PK" <?php if($country == "PK") echo 'selected="selected"'; ?>>Pakistan</option>
            <option value="PW" <?php if($country == "PW") echo 'selected="selected"'; ?>>Palau Island</option>
            <option value="PS" <?php if($country == "PS") echo 'selected="selected"'; ?>>Palestine</option>
            <option value="PA" <?php if($country == "PA") echo 'selected="selected"'; ?>>Panama</option>
            <option value="PG" <?php if($country == "PG") echo 'selected="selected"'; ?>>Papua New Guinea</option>
            <option value="PY" <?php if($country == "PY") echo 'selected="selected"'; ?>>Paraguay</option>
            <option value="PE" <?php if($country == "PE") echo 'selected="selected"'; ?>>Peru</option>
            <option value="PH" <?php if($country == "PH") echo 'selected="selected"'; ?>>Philippines</option>
            <option value="PO" <?php if($country == "PO") echo 'selected="selected"'; ?>>Pitcairn Island</option>
            <option value="PL" <?php if($country == "PL") echo 'selected="selected"'; ?>>Poland</option>
            <option value="PT" <?php if($country == "PT") echo 'selected="selected"'; ?>>Portugal</option>
            <option value="PR" <?php if($country == "PR") echo 'selected="selected"'; ?>>Puerto Rico</option>
            <option value="QA" <?php if($country == "QA") echo 'selected="selected"'; ?>>Qatar</option>
            <option value="ME" <?php if($country == "ME") echo 'selected="selected"'; ?>>Republic of Montenegro</option>
            <option value="RS" <?php if($country == "RS") echo 'selected="selected"'; ?>>Republic of Serbia</option>
            <option value="RE" <?php if($country == "RE") echo 'selected="selected"'; ?>>Reunion</option>
            <option value="RO" <?php if($country == "RO") echo 'selected="selected"'; ?>>Romania</option>
            <option value="RU" <?php if($country == "RU") echo 'selected="selected"'; ?>>Russia</option>
            <option value="RW" <?php if($country == "RW") echo 'selected="selected"'; ?>>Rwanda</option>
            <option value="NT" <?php if($country == "NT") echo 'selected="selected"'; ?>>St Barthelemy</option>
            <option value="EU" <?php if($country == "EU") echo 'selected="selected"'; ?>>St Eustatius</option>
            <option value="HE" <?php if($country == "HE") echo 'selected="selected"'; ?>>St Helena</option>
            <option value="KN" <?php if($country == "KN") echo 'selected="selected"'; ?>>St Kitts-Nevis</option>
            <option value="LC" <?php if($country == "LC") echo 'selected="selected"'; ?>>St Lucia</option>
            <option value="MB" <?php if($country == "MB") echo 'selected="selected"'; ?>>St Maarten</option>
            <option value="PM" <?php if($country == "PM") echo 'selected="selected"'; ?>>St Pierre &amp; Miquelon</option>
            <option value="VC" <?php if($country == "VC") echo 'selected="selected"'; ?>>St Vincent &amp; Grenadines</option>
            <option value="SP" <?php if($country == "SP") echo 'selected="selected"'; ?>>Saipan</option>
            <option value="SO" <?php if($country == "SO") echo 'selected="selected"'; ?>>Samoa</option>
            <option value="AS" <?php if($country == "AS") echo 'selected="selected"'; ?>>Samoa American</option>
            <option value="SM" <?php if($country == "SM") echo 'selected="selected"'; ?>>San Marino</option>
            <option value="ST" <?php if($country == "ST") echo 'selected="selected"'; ?>>Sao Tome &amp; Principe</option>
            <option value="SA" <?php if($country == "SA") echo 'selected="selected"'; ?>>Saudi Arabia</option>
            <option value="SN" <?php if($country == "SN") echo 'selected="selected"'; ?>>Senegal</option>
            <option value="SC" <?php if($country == "SC") echo 'selected="selected"'; ?>>Seychelles</option>
            <option value="SL" <?php if($country == "SL") echo 'selected="selected"'; ?>>Sierra Leone</option>
            <option value="SG" <?php if($country == "SG") echo 'selected="selected"'; ?>>Singapore</option>
            <option value="SK" <?php if($country == "SK") echo 'selected="selected"'; ?>>Slovakia</option>
            <option value="SI" <?php if($country == "SI") echo 'selected="selected"'; ?>>Slovenia</option>
            <option value="SB" <?php if($country == "SB") echo 'selected="selected"'; ?>>Solomon Islands</option>
            <option value="OI" <?php if($country == "OI") echo 'selected="selected"'; ?>>Somalia</option>
            <option value="ZA" <?php if($country == "ZA") echo 'selected="selected"'; ?>>South Africa</option>
            <option value="ES" <?php if($country == "ES") echo 'selected="selected"'; ?>>Spain</option>
            <option value="LK" <?php if($country == "LK") echo 'selected="selected"'; ?>>Sri Lanka</option>
            <option value="SD" <?php if($country == "SD") echo 'selected="selected"'; ?>>Sudan</option>
            <option value="SR" <?php if($country == "SR") echo 'selected="selected"'; ?>>Suriname</option>
            <option value="SZ" <?php if($country == "SZ") echo 'selected="selected"'; ?>>Swaziland</option>
            <option value="SE" <?php if($country == "SE") echo 'selected="selected"'; ?>>Sweden</option>
            <option value="CH" <?php if($country == "CH") echo 'selected="selected"'; ?>>Switzerland</option>
            <option value="SY" <?php if($country == "SY") echo 'selected="selected"'; ?>>Syria</option>
            <option value="TA" <?php if($country == "TA") echo 'selected="selected"'; ?>>Tahiti</option>
            <option value="TW" <?php if($country == "TW") echo 'selected="selected"'; ?>>Taiwan</option>
            <option value="TJ" <?php if($country == "TJ") echo 'selected="selected"'; ?>>Tajikistan</option>
            <option value="TZ" <?php if($country == "TZ") echo 'selected="selected"'; ?>>Tanzania</option>
            <option value="TH" <?php if($country == "TH") echo 'selected="selected"'; ?>>Thailand</option>
            <option value="TG" <?php if($country == "TG") echo 'selected="selected"'; ?>>Togo</option>
            <option value="TK" <?php if($country == "TK") echo 'selected="selected"'; ?>>Tokelau</option>
            <option value="TO" <?php if($country == "TO") echo 'selected="selected"'; ?>>Tonga</option>
            <option value="TT" <?php if($country == "TT") echo 'selected="selected"'; ?>>Trinidad &amp; Tobago</option>
            <option value="TN" <?php if($country == "TN") echo 'selected="selected"'; ?>>Tunisia</option>
            <option value="TR" <?php if($country == "TR") echo 'selected="selected"'; ?>>Turkey</option>
            <option value="TU" <?php if($country == "TU") echo 'selected="selected"'; ?>>Turkmenistan</option>
            <option value="TC" <?php if($country == "TC") echo 'selected="selected"'; ?>>Turks &amp; Caicos Is</option>
            <option value="TV" <?php if($country == "TV") echo 'selected="selected"'; ?>>Tuvalu</option>
            <option value="UG" <?php if($country == "UG") echo 'selected="selected"'; ?>>Uganda</option>
            <option value="UA" <?php if($country == "UA") echo 'selected="selected"'; ?>>Ukraine</option>
            <option value="AE" <?php if($country == "AE") echo 'selected="selected"'; ?>>United Arab Emirates</option>
            <option value="UK" <?php if($country == "UK") echo 'selected="selected"'; ?>>United Kingdom</option>
            <option value="US" <?php if($country == "US") echo 'selected="selected"'; ?>>United States of America</option>
            <option value="UY" <?php if($country == "UY") echo 'selected="selected"'; ?>>Uruguay</option>
            <option value="UZ" <?php if($country == "UZ") echo 'selected="selected"'; ?>>Uzbekistan</option>
            <option value="VU" <?php if($country == "VU") echo 'selected="selected"'; ?>>Vanuatu</option>
            <option value="VS" <?php if($country == "VS") echo 'selected="selected"'; ?>>Vatican City State</option>
            <option value="VE" <?php if($country == "VE") echo 'selected="selected"'; ?>>Venezuela</option>
            <option value="VN" <?php if($country == "VN") echo 'selected="selected"'; ?>>Vietnam</option>
            <option value="VB" <?php if($country == "VB") echo 'selected="selected"'; ?>>Virgin Islands (Brit)</option>
            <option value="VA" <?php if($country == "VA") echo 'selected="selected"'; ?>>Virgin Islands (USA)</option>
            <option value="WK" <?php if($country == "WK") echo 'selected="selected"'; ?>>Wake Island</option>
            <option value="WF" <?php if($country == "WF") echo 'selected="selected"'; ?>>Wallis &amp; Futana Is</option>
            <option value="YE" <?php if($country == "YE") echo 'selected="selected"'; ?>>Yemen</option>
            <option value="ZR" <?php if($country == "ZR") echo 'selected="selected"'; ?>>Zaire</option>
            <option value="ZM" <?php if($country == "ZM") echo 'selected="selected"'; ?>>Zambia</option>
            <option value="ZW" <?php if($country == "ZW") echo 'selected="selected"'; ?>>Zimbabwe</option>
        </select>
</div>

	<input type="hidden" name="id" value="<?php echo $id; ?>" />
	<input type="submit" value="Save" />
    
    </form>
<?php
	}
	else
	{
		?>
        <h1 class='header'>Access Violation</h1>
        <p class="error">You must be logged in to manage your profile!</p>
        <?php
	}
	include("DATA/footer.php");
?>