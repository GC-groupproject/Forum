<!--logout.php-->
<!--Author's: Jean-Luc Desroches, Alex barbosa, Durwin Barcenas -->
<!--Forum-->
<!--This file is our logout page that redirects you to login when you logout-->

<?php

//access the existing session object
session_start();

//remove all the variables from the existing session
session_unset();

//get rid of the current session
session_destroy();

//redirect to login page
header('location: login.php');

?>

