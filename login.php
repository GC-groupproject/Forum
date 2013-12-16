<!--login.php-->
<!--Author's: Jean-Luc Desroches, Alex barbosa, Durwin Barcenas -->
<!--Forum-->
<!--This file is our login page-->
<?php
	include ("DATA/header_open.php");
		if(!empty($_POST['password']) && !empty($_POST['username']))
	{
		$loginFail = true; // initialise login success
		include('DATA/JavaScripts/logCheck.php'); // script to manage login
		
		$login = login($_POST['username'],$_POST['password']);
		if($login !== FALSE)
		{
			$_SESSION['username'] = $_POST['username']; // user logged in successfully set username session
			$_SESSION['user_id'] = $login; // user logged in successfully set username session
			$_SESSION[KEYNAME] = KEY;
			$loginFail = false; // login failed set fail notice
		}
	}
?>
    <title>Forum - Login</title>
<?php
	include ("DATA/header_close.php");
?>
<?php	
	if($_SESSION['user_id'] == ANONUSER && (!isset($loginFail) || $loginFail))
	{
?>    
	<h1 class="header">Login</h1>
		<!-- Login Form -->
    	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" id="login" method="post">
        	<div>
            	<?php if($loginFail){ echo '<p style="color:red" >Login was unsuccessful! Please re-enter your credentials or Would you like to <a href="signup.php">signup?</a></p>';} ?>
                <label for="username">Username:</label>
                <input type="text" autofocus autocomplete="on" name="username"><br>
                <label for="password">Password:</label>
                <input type="password" autocomplete="on" name="password"><br>
                <input  class="button" type="submit" name="submit" value="Submit" />
            </div>
        </form>
    
<?php
	}
	if($_SESSION['user_id'] != ANONUSER || (isset($loginFail) && !$loginFail))
	{
?>
	<p style="color:green; display:block; text-align:center;">Logged In Successfully! You can now <a href="add_topic">add</a> a topic!</p>
    <a href="logout.php">Log Out</a>
<?php
	}
?>
<?php
	include ("DATA/footer.php");
?>
