<?php
	$mail_to = '200203740@student.georgianc.on.ca'; 
	
	$name=$_POST['name']; 
	$email=$_POST['email']; 
	$phone=$_POST['phone']; 
	$message=$_POST['message']; 
	
	$subject = 'Forum visitor Message from visitor ' . $name; 
	
	$body_message='From: ' . $name. "\r\n"; 
	$body_message .='E-mail: ' . $email. "\r\n"; 
	$body_message .='Phone: ' . $phone. "\r\n"; 
	$body_message .='Message: ' . $message;; 
	
	//Construct email headers
		$headers = 'From: ' . $email . "\r\n";     
		$headers .= 'Reply-To: ' . $email . "\r\n";
	
	
	if(!empty($name) && !empty($email) && !empty($phone)
	&& !empty($message)){
	
	$mail_sent = mail($mail_to, $subject, $body_message, $headers); 
	if($mail_sent ==true) { ?>
		 <script language="javascript" type="text/javascript">
		 alert('Thank you for the message. We will contact you shortly.');
		window.location = 'contact_page.php'; 
		
		window.location.replace("http://webdesign4.georgianc.on.ca/~200203740/consoles/Forum/contact_page.php");
		</script>
		<?php 
		}
		else 
		{ ?>
		<script language="javascript" type="text/javascript">
		alert('Message not sent. Please, notify the site administrator dbbarcenas@gmail.com');
		window.location = 'contact_page.php'; 
		</script>
		<?php 
		}
		}
		else 
		{ ?>
		<script language="javascript" type="text/javascript">
		alert('ONE OR MORE OF THE FIELDS IS EMPTY. Please Try Again.');
		window.location = 'contact_page.php'; 
		
		window.location.replace("http://webdesign4.georgianc.on.ca/~200203740/consoles/Forum/contact_page.php");
		</script>
		<?php }
		
?>