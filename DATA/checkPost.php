<!--checkPost.php-->
<!--Author's: Jean-Luc Desroches, Alex barbosa, Durwin Barcenas -->
<!--Forum-->
<!--This file checks the users post-->
<?php
	function CAPTCHA($captchaID, $captchaname)
	{
		global $db;
		$query = "SELECT * FROM forum_captcha WHERE img = SHA('" . $captchaID . "') AND id = SHA('" . $captchaname . "')";
		$result = $db->query($query);

		if($result->rowCount() > 0)
		{
			return true;
			
		}
		return false;		
	}
?>