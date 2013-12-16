<?php
		
		include('DATA/GLOBALS.php');
$conn = mysqli_connect('webdesign4.georgianc.on.ca', 'db200176338', '99939', 'db200176338') or die(mysqli_error());

			$data['fname'] =  empty($_POST['firstname'])?null: "first_name='{$_POST['firstname']}'";
			$data['lname'] =  empty($_POST['lastname'])?null: "last_name='{$_POST['lastname']}'";
			$id = $_POST['user_id'];
			$data['birthdate'] = empty($_POST['birthdate'])?null: "birthdate='{$_POST['birthdate']}'";
			$data['country'] = empty($_POST['country'])?null: "Country='{$_POST['country']}'";
			//get the name of the uploaded file & display it.
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
		$data['userimage'] = isset($target)?"user_image = '$target'":null;
		$data = array_filter($data);
		
		$updates = implode(', ',$data);
	if (is_numeric($id) && !empty($updates)) {
		
		$sql = "UPDATE forum_user_info SET $updates WHERE user_id = $id";
		mysqli_query($conn, $sql);
		mysqli_close($conn);
  
		echo '<p>Profile Updated</p>';
	}
	?>