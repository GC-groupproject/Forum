<?php
include ("DATA/header_open.php");
?>
<title>Forum - Contact Us</title>
<link href="DATA/CSS/contactStyle.css" rel="stylesheet" type="text/css"/>
<?php
	include ("DATA/header_close.php");
?>
<!--Contact Page content made by Durwin Barcenas-->
	
<div id="contactWrapper">
<section>
<h2>Contact Us</h2>
<table>
	<tbody>
		<tr>
			<th>Mobile </th>
			<td>1(705)770-7306</td>
		</tr>
		<tr>
			<th>Email</th>
			<td>info@ourforum.com</td>
		</tr>
		<tr>
			<th>Twitter</th>
			<td>twitter.com/ourforum</td>
		</tr>
		<tr>
			<th>Facebook</th>
			<td>facebook.com/ourforum</td>
		</tr>
	</tbody>
</table>
</section>
	
	<form method="post" action="DATA/Classes/contact_send.php" >
	<fieldset class="first">
		<label class="labelName" for="name">Name:</label>
		<input onkeyup="validateName()" id="contactName" type="text" autofocus autocomplete="on" name="name">
		<label id="namePrompt"> </label><br/>
		<label for="phone">Phone:</label>
		<input onkeyup="validatePhone()" id="contactPhone" type="text" autofocus autocomplete="on" name="phone">
		<label id="phonePrompt"> </label><br/>
		<label for="email">Email:</label>
		<input  onkeyup="validateEmail()" id="contactEmail" type="text" autofocus autocomplete="on" name="email">
		<label id="emailPrompt"> </label><br/>
		<label for="message">Message:</label>
		<textarea onkeyup="validateMessage()" id="contactMessage" name="message" ></textarea>
		<label id="messagePrompt">  </label>
	</fieldset>
	
	<fieldset>
		<input class="btn" type="submit" name="send" value="Send"  />
	</fieldset>
	</form>

<script type="text/javascript" src="DATA/JavaScripts/contactPage.js"></script>
</div>


<?php
	include ("DATA/footer.php");
?>
