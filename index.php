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
			// build initial query to get total number of rows
			$query 	= "SELECT * FROM forum_titles ORDER BY topic_date, last_post_date DESC";
			$result = $db->query($query);
			
			// check requested page
			if(isset($_GET['page']))
			{
				$curPage = $_GET['page'];
			}
			else
			{
				$curPage = 1;
			}

			// build pagination
			$rowCount = $result->rowCount();
		
			$pages = ceil($rowCount / 5);
			
			// if user erquests a page beyond the limits, set curPage to maximum bound
			if($curPage>$pages)
			{
				$curPage = $pages;
			}
			elseif($curPage < 1)
			{
				$curPage = 1;
			}
			
			// set pages
			$limitSet 		= $curPage == 1? 5 : 5 * ($curPage-1);
			$limitsetEnd = $limitSet + 5;
			$limitStatement = $curPage > 1? ("$limitSet , $limitsetEnd") : $limitSet;
			
			// get results from page request
			$query 	= "SELECT * FROM forum_titles ORDER BY topic_date, last_post_date DESC LIMIT $limitStatement";
			$result = $db->query($query);
			
			// loop through each row and set data
			foreach($result as $row)
			{
				?>
                <a href="topic_discussion.php?topic=<?php echo $row['title_id']; ?>" >
					<div class="topic">
						<h2 class="topic_head">
							<?php echo $row['title']; ?>
						</h2>
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
							<?php echo $row['last_post_date']; ?>							
						</p>
					</div>
                </a>
				<?php
			} 
		if($pages > 1)
		{
			if($curPage != 1)
			{
				echo '<a class="pagination" href="' . $_SERVER['PHP_SELF'] . '?topic=' . $topicID . '&page=1">&#8249;&#8249; First</a>';
			}
			for($i = 1; $i <= $pages; $i++)
			{
				echo '<a class="pagination" href="' . $_SERVER['PHP_SELF'] . '?topic=' . $topicID . '&page=' . $i . '" >' . $i . '</a>';
			}
			if($curPage != $pages)
			{
				echo '<a class="pagination" href="' . $_SERVER['PHP_SELF'] . '?topic=' . $topicID . '&page=' . $pages . '">Last &#8250;&#8250;</a>';
			}
		}
		?>        
	</div>
<?php
	include("DATA/footer.php");
?>
