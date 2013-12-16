<!--logcheck.php-->
<!--Author's: Jean-Luc Desroches, Alex barbosa, Durwin Barcenas -->
<!--Forum-->
<!--This file is the validation and hashes the password for login-->
<?php
	function login($username, $password)
	{
		global $db;
		$query = 'SELECT user_id FROM forum_users WHERE user_name = "'.$username.'" AND user_password = 
		AES_ENCRYPT("'.$password.'",SHA("'.$username.$password."Omega13".'"))';
		echo $query;
		$result = $db->query($query);

		if($result->rowCount() > 0)
		{
			foreach($result as $row)
			{
				return $row['user_id'];
			}
			
		}
		return false;
	}
?>
