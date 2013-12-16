<!--removePost.php-->
<!--Author's: Jean-Luc Desroches, Alex barbosa, Durwin Barcenas -->
<!--Forum-->
<!--This file removes posts for topic-->
<?php
	include("../GLOBALS.php");
	$post_id = $_POST['postID'];
	
	// remove posts for topic
	$query = "DELETE FROM forum_posts WHERE post_id = $post_id";
	$result = $db->prepare($query);
	$result->execute();
?>