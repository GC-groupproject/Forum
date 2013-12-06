<?php
include ("DATA/header_open.php");
?>
<?php
	include ("DATA/header_close.php");
?>
<form id="signup">
	<label for="username">Username:</label>
    <input type="text" autofocus autocomplete="on" name="username"><br>
    <label for="password">Password:</label>
	<input type="password" autocomplete="on" name="password"><br>
    <label for="password">Re-enter Password:</label>
    <input type="password" name="confirm_password"><br>
    <label for="email">Email:</label>
    <input name="email"><br>
    <input type="submit" name="signup" value="Signup" />
</form>
<?php
	include ("DATA/footer.php");
?>
