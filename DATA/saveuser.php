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
	if(!empty($_FILES['photo']['name']))
	{
		if($_FILES['photo']['type'] == 'image/gif' || $_FILES['photo']['type'] == 'image/jpeg' || $_FILES['photo']['type'] == 'image/png' ||  $_FILES['photo']['type'] == 'image/bmp')
		{
			$user_image = $_FILES['photo']['name'];		
			
			//get the type of the file
			$type = $_FILES['photo']['type'];
			
			//See where file gets uploaded to in cache
			$temp_dir = $_FILES['photo']['tmp_name'];
			
			//set up a permanent directory path
			$target = 'DATA/UserImages/' . basename($user_image);
			
			move_uploaded_file($temp_dir, $target);
		}
		else
		{				
			?>
				<p class="error">Unsupported file format</p>
			<?php
		}
	}
	if ($complete) 	
	{
		$password = $_POST['password'];
		$username = $_POST['username'];
	
		//Sql statement to add a new user		
		$sql = "INSERT INTO forum_users (user_name, user_password) VALUES
			('{$_POST['username']}', AES_ENCRYPT('".$password."',SHA('".$username.$password."Omega13"."')))";
			
		
			
			//Run the sql
		mysqli_query($conn,$sql);
		
		$sql = "SELECT user_id FROM forum_users ORDER BY user_id DESC LIMIT 1";
			
			//Run the sql
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result);
		
		$userid = $row['user_id'];
		
		$sql = "INSERT INTO forum_user_info (user_id, first_name, last_name, birthdate, user_image, Country) VALUES
			($userid, '{$_POST['firstname']}','{$_POST['lastname']}' , '{$_POST['birthdate']}', '{$target}','{$_POST['country']}')";
		mysqli_query($conn,$sql);
			mysqli_close($conn);
	
		//Confirm Message
		echo '<p>Successfully registered! <a href="login.php">Login</a> to post to the forum!</p>' ;
		
		include ("DATA/footer.php");
		die();
	}
	?>