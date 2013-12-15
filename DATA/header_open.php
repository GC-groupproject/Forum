<?php session_start();
?>
<!DOCTYPE html>
<html>
    <head profile="http://www.w3.org/2005/10/profile">
<<<<<<< HEAD
    <link href="DATA/CSS/navStyle.css" rel="stylesheet" type="text/css"/>
        <!-- This website was Designed, developed, and coded by Jean-Luc Desroches and Alex Barbosa -->
        <?php 
		include("DATA/GLOBALS.php");
	?>
=======
    <link href="DATA/CSS/mainTheme.css" rel="stylesheet" type="text/css"/>
    <link href="DATA/CSS/navStyle.css" rel="stylesheet" type="text/css"/>
    <link href="DATA/CSS/footerStyle.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="DATA/JavaScripts/main.js"></script>
        <!-- This website was Designed, developed, and coded by Jean-Luc Desroches and Alex Barbosa -->
        <?php 
		include("DATA/GLOBALS.php");
		include("DATA/Classes/checkMobile.php");
		
		$mobile = mobileCheck::checkBrowser();
		if($mobile)
		{
	?>
    		<link href="DATA/CSS/mobileNav.css" rel="stylesheet" type="text/css"/>
            <link href="DATA/CSS/mobileFooter.css" rel="stylesheet" type="text/css"/>
            <link href="DATA/CSS/mobileTheme.css" rel="stylesheet" type="text/css"/>
    <?php 
		} 
	?>
>>>>>>> origin/test
