	<?php
	
	
    //Set the complete flag to check if page is valid
	$complete = true;
	//Connect
	$conn = mysqli_connect('webdesign4.georgianc.on.ca', 'db200176338', '99939', 'db200176338') or die("Could Not Connect:  "  . mysqli_error());
	//check if first name is entered
	if (empty($_POST['firstname'])) {
	echo '<p class="error">Enter your First name.</p>';
	$complete = false;
	}
	//check if first name is entered
	if (empty($_POST['lastname'])) {
	echo '<p class="error">Enter your lastname name.</p>';
	$complete = false;
	}
	//check if first name is entered
	if (empty($_POST['birthdate'])) {
	echo '<p class="error">Enter your birthdate.</p>';
	$complete = false;
	}
	//check if the username is entered
	if (empty($_POST['username'])) {
	echo '<p class="error">Enter your user name.</p>';
	$complete = false;
	}
	else
	{
		$sql = "SELECT * FROM forum_users WHERE user_name = '{$_POST['user_name']}'";
		$result = mysqli_query($conn,$sql);
		if($result->num_rows > 0)
		{
			$complete = false;
			echo '<p class="error">User name already exists</p>';
		}
	}
	//check if the password is registered
	if (empty($_POST['password'])) {
	echo '<p class="error">Enter your password.</p>';
	$complete = false;
	}
	
	//check if passwords match
	if ($_POST['password'] != $_POST['confirm_password']) {
	echo '<p class="error">Enter matching password.</p>';
	$complete = false;
	}
	if ($complete) 	
	{
		$password = $_POST['password'];
		$username = $_POST['username'];
	
		//Sql statement to add a new user
		$sql = "INSERT INTO forum_user_info (first_name, last_name, birthdate, user_image, Country) VALUES
			('{$_POST['firstname']}','{$_POST['lastname']}' , '{$_POST['birthdate']}', '{$_POST['user_image']}','{$_POST['country']}'";
		$sql1 = "INSERT INTO forum_users (user_name, user_password) VALUES
			('{$_POST['username']}', AES_ENCRYPT('".$password."',SHA('".$username.$password."Omega13"."')))";
			
			
			
			//Run the sql
		mysqli_query($conn,$sql);
		
		mysqli_query($conn,$sql1);
			mysqli_close($conn);
	
		//Confirm Message
		echo '<p>Successfully registered! <a href="login.php">Login</a> to post to the forum!</p>' ;
		
		include ("DATA/footer.php");
		die();
	}
	?>