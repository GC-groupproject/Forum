<?php
	include("DATA/header_open.php");
?>
	<title>Forum - Topic Board</title>
<?php
	include("DATA/header_close.php");
?>
	<h1 class="header">Topic Board</h1>
	<div>
		<?php /*
			$query 	= "SELECT * FROM topics";
			$result = $db->query($query);

			foreach($result as $row)
			{
				?>
					<div class="topic">
						<p class="topic_head">
							<?php echo $row['header']; ?>
						</p>
						<p class="topic_owner">
							<?php 
								$userID 	= $row['ownerID'];
								$query 		= "SELECT username FROM users WHERE userid = " . $userID;
								$resultTwo	= $db->query($query);
								if($resultTwo->rowCount > 0)
								{
									foreach($resultTwo as $rowTwo)
									{
										echo $rowTwo['username'];
									}
								}
								else
								{
									exit();
								}	
							?>
						</p>
						<p class="topic_created">
							<?php echo $row['date_created']; ?>							
						</p>
					</div>
				<?php
			} */
		?>
	</div>
<?php
	include("DATA/footer.php");
?>
