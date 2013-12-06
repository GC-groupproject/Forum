<?php
	// Open header and set any specific files for this pages
	include("DATA/header_open.php");
?>
	<title>Forum - Discussion Board</title>
    <link href="DATA/CSS/postStyles.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="DATA/JavaScripts/topic_discussion.js"></script>
<?php
	include("DATA/header_close.php");
	// header closed
	
	// get topic id
	$topicID = $_GET['topic'];
		
	if(is_numeric($topicID))
	{
		// prepare and execute SQL statement
		$query = "SELECT * FROM forum_posts WHERE title_id = ?";
		$result = $db->prepare($query);
		$result->execute(array($topicID));
		?>
        <h1 class="header">
		<?php
			$query =  "SELECT title FROM forum_titles WHERE title_id = ?";
			$result2 = $db->prepare($query);
			$result2->execute(array($topicID));
			if($result2->rowCount() > 0)
			{
				foreach($result2 as $row2)
				{
					echo $row2['title'];
				}
			}
			else
			{
				echo "<p class='error'>Topic not found</p>";
			}
		?>
        </h1>   
        <?php
			foreach($result as $row)
			{
				?>                             
				<div class="topic">
					<button class="button replyButton" id="<?php echo $topicID; ?>">Post</button>
					<p>
						<?php
							echo $row['post_text'];
						?>
                    </p>
				</div>		
				<?php
			}		
	}
	?>
<?php
	include("DATA/footer.php");
?>
