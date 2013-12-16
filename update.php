<?php
		
		include('DATA/GLOBALS.php');
$conn = mysqli_connect('webdesign4.georgianc.on.ca', 'db200176338', '99939', 'db200176338') or die(mysqli_error());

			$fname =  $_POST['first_name'];
			$lname =  $_POST['last_name'];
			$id = $_POST['user_id'];
			$birthdate = $_POST['birthdate'];
			$country = $_POST['Country'];
			//get the name of the uploaded file & display it.
		$user_image = $_FILES['photo']['name'];		
		
		//get the type of the file
		$type = $_FILES['photo']['type'];
		
		//See where file gets uploaded to in cache
		$temp_dir = $_FILES['photo']['tmp_name'];
		
		//set up a permanent directory path
		$target = 'DATA/UserImages/' . basename($user_image);
		
		move_uploaded_file($temp_dir, $target);
				
	
	if (is_numeric($id)) {
		$sql = "UPDATE forum_user_info SET first_name = '$fname', last_name = '$lname', birthdate = '$birthdate' Country = '$country', user_image = '$user_image'  WHERE user_id = $id";
		mysqli_query($conn, $sql) or die('Error updating database.');
		mysqli_close($conn);
  
		echo '<p>Success!</p>';
	}
	?>