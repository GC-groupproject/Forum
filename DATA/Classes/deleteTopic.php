<!--deleteTopic.php-->
<!--Author's: Jean-Luc Desroches, Alex barbosa, Durwin Barcenas -->
<!--Forum-->
<!--This page is used to delete topics tables and posts from topics-->
<?php
	$topicID = $_POST['topicID'];
	include('/home/200176338/public_html/AdvancedWebProgrammingClass/Forum/DATA/GLOBALS.php');
	
	// remove topic from topics tables
	$query = "DELETE FROM forum_titles WHERE title_id = '$topicID'";
	$result = $db->prepare($query);
	$result->execute();
	
	// remove posts for topic
	$query = "DELETE FROM forum_posts WHERE title_id = '$topicID'";
	$result = $db->prepare($query);
	$result->execute();
?>