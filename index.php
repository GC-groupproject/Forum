<?php
	include("DATA/header_open.php");
?>
	<title>Forum - Topic Board</title>
    <link href="DATA/CSS/postStyles.css" rel="stylesheet" type="text/css"/>
<?php
	include("DATA/header_close.php");
?>
	<h1 class="header">Topic Board</h1>
	<div>
		<?php 
			$query 	= "SELECT * FROM forum_titles";
			$result = $db->query($query);

			foreach($result as $row)
			{
				?>
                <a href="topic_discussion.php?topic=<?php echo $row['title_id']; ?>" >
					<div class="topic">
						<p class="topic_head">
							<?php echo $row['title']; ?>
						</p>
						<p class="topic_owner">
							<?php 
								$userID 	= $row['user_id'];
								$query 		= "SELECT user_name FROM forum_users WHERE user_id = " . $userID;
								$resultTwo	= $db->query($query);
								if($resultTwo->rowCount() > 0)
								{
									foreach($resultTwo as $rowTwo)
									{
										echo $rowTwo['user_name'];
									}
								}
								else
								{
									echo $query;
									exit();
								}	
							?>
						</p>
						<p class="topic_created">
							<?php echo $row['topic_date']; ?>							
						</p>
						<p class="last_user">
							<?php echo $row['last_user_id']; ?>							
						</p>
						<p class="last_post">
							<?php echo $row['last_post_id']; ?>							
						</p>
					</div>
                </a>
				<?php
			} 
		?>
	</div>
<?php
	include("DATA/footer.php");
?>
