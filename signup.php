<?php
include ("DATA/header_open.php");
?>
<title>Forum - Registration</title>
<?php
	include ("DATA/header_close.php");
	
?>
<h1 class="header">User Registration</h1>
<?php
if(isset($_POST['signup']))
	{
		include ("DATA/saveuser.php");
	}
?>
<form enctype="multipart/form-data" id="signup" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">

    <label for="firstname" >First name:</label>
    <input type="text" name="firstname" <?php if(isset($_POST['firstname'])){ echo 'value="' . $_POST['firstname'] . '"';} ?>><br>
    <label for="lastname">Last name:</label>
    <input type="text" name="lastname" <?php if(isset($_POST['lastname'])){ echo 'value="' . $_POST['lastname'] . '"';} ?>><br>
    <label for="birthdate">Birthdate:</label>
    <input type="date" name="birthdate" placeholder="(YYYY/MM/DD)" required <?php if(isset($_POST['birthdate'])){ echo 'value="' . $_POST['birthdate'] . '"';} ?>><br> 
    <label for="username">Username:</label>
    <input type="text" maxlength="20" autofocus autocomplete="on" name="username" <?php if(isset($_POST['username'])){ echo 'value="' . $_POST['username'] . '"';} ?>><br>
    <label for="password">Password:</label>
	<input type="password" autocomplete="on" name="password" <?php if(isset($_POST['password'])){ echo 'value="' . $_POST['password'] . '"';} ?>><br>
    <label for="password">Re-enter Password:</label>
    <input type="password" name="confirm_password" <?php if(isset($_POST['confirm_password'])){ echo 'value="' . $_POST['confirm_password'] . '"';} ?>><br>
    <input type="file" accept="image/*" <?php if(isset($_POST['image'])){ echo 'value="' . $_POST['image'] . '"';} ?> name="image"/>
    <input type="submit" class="button" name="signup" value="Signup" />
</form>

<?php
	include ("DATA/footer.php");
?>
