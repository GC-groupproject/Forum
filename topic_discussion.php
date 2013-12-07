<?php
	// Open header and set any specific files for this pages
	include("DATA/header_open.php");
?>
	<title>Forum - Discussion Board</title>
    <link href="DATA/CSS/postStyles.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="DATA/JavaScripts/topic_discussion.js"></script>
    <!--[if gte IE 9]>
      <style type="text/css">
        .gradient {
           filter: none;
        }
      </style>
    <![endif]-->
<?php
	include("DATA/header_close.php");
	// header closed
	
	// get topic id
	$topicID = $_GET['topic'];
	if(isset($_GET['page']))
	{
		$curPage = $_GET['page'];
	}
	else
	{
		$curPage = 1;
	}
	
	if(isset($_POST['response']))
	{
		$userID 		= isset($_SESSION['userID'])? $_SESSION['userID'] : ANONUSER;
		$text 			=  str_replace("\n","<br>",$_POST['response']);
		
		
		$query = "INSERT INTO forum_posts(title_id, user_id, post_text, post_time) VALUES(" 
			. $topicID
			. " , " . $userID
			. " , '" . $text
			. "',
			NOW()
			)";	
			
		$result = $db->prepare($query);
		$result->execute();
		
		$query = "UPDATE forum_titles SET last_user_id = '$userID', last_post_date = NOW() WHERE title_id = '$topicID'";
			
		echo $query;
		$result = $db->prepare($query);
		$result->execute();
	}
		
	if(is_numeric($topicID))
	{
		// prepare and execute SQL statement
		$query = "SELECT * FROM forum_posts WHERE title_id = ?";
		$result = $db->prepare($query);
		$result->execute(array($topicID));
		
		$rowCount = $result->rowCount();
		
		$pages = ceil($rowCount / 10);
		
		if($curPage>$pages)
		{
			$curPage = $pages;
		}
		
		$limitSet 		= $curPage == 1? 10 : 10 * ($curPage-1);
		$limitsetEnd = $limitSet + 10;
		$limitStatement = $curPage > 1? ("$limitSet , $limitsetEnd") : $limitSet;
		
		$query = "SELECT * FROM forum_posts WHERE title_id = $topicID LIMIT $limitStatement";
		$result = $db->prepare($query);
		$result->execute();
		
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
				$post_user = $row['user_id'];
				?>                             
				<div class="topic">
					<button class="button replyButton" topic="<?php echo $topicID; ?>" page="<?php echo $pages; ?>">Post</button>
                    <div>
                        <div class='user_image'>
                            <img src='<?php
                                $query =  "SELECT user_image FROM forum_user_info WHERE user_id = ?";
                                $result2 = $db->prepare($query);
                                $result2->execute(array($post_user));
                                if($result2->rowCount() > 0)
                                {
                                    foreach($result2 as $row2)
                                    {
                                        echo $row2['user_image'];
                                    }
                                }
                            ?>' alt="user image" />
                        </div>
                        <div class='post_text'>
                        <p>
                            <?php
                                echo $row['post_text'];
                            ?>
                        </p>
                        </div>
                    </div>
				</div>		
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
	}
	?>
<?php
	include("DATA/footer.php");
?>
