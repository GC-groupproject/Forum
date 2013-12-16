<?php
//Author: Durwin Barcenas
//Date: December 12, 2013
//Calling constants GLOBALS.php database information 
	require_once('DATA/GLOBALS.php');
	include('DATA/parseText.php');
  $dbc = mysqli_connect('localhost', MYSQLUSERNAME, MYSQLPASSWORD, DBNAME);
   //Initialize Post to these variables
  $title = $_POST['title']; 
  $content = parseText($_POST['content']); 
  

  //Validaiton for Adding a new topic 
   //If one or more content is empty, javascript alert messages will pop out and redirects to the same page.
   if(empty($content) && empty($title)){
	?>
		<script language="javascript" type="text/javascript">
		alert('Your New Topic Fields are empty. Please Try Again.');
		window.location.replace("http://webdesign4.georgianc.on.ca/~200176338/AdvancedWebProgramming/Forum/add_topic.php");
		</script>
		<?php 
		}
		elseif (empty($title)){
		?>
		<script language="javascript" type="text/javascript">
		alert('You need to fill out the Title. Please Try Again.');
		window.location.replace("http://webdesign4.georgianc.on.ca/~200176338/AdvancedWebProgrammingClass/Forum/add_topic.php");
		</script>
		<?php 
		}elseif(empty($content)){
		?>
		<script language="javascript" type="text/javascript">
		alert('You need to fill out the Content. Please Try Again.');
		window.location.replace("http://webdesign4.georgianc.on.ca/~200176338/AdvancedWebProgrammingClass/Forum/add_topic.php");
		</script>
			<?php 
		}
		//if name and content is set insert the values the database and redirects to the corrisponding page. 
  elseif (isset($_SESSION['user_id']) && isset($content)){
  $query = "INSERT INTO `forum_titles` (`title`, `user_id`, `topic_date`, `last_post_date`) VALUES ('{$_POST['title']}',{$_SESSION['user_id']}, NOW(), NOW())";
  mysqli_query($dbc, $query);
  
  $query = "SELECT title_id FROM `forum_titles` ORDER BY title_id DESC LIMIT 1";
  $result = mysqli_query($dbc, $query);
  $row = mysqli_fetch_row($result);
  $title_id = $row[0];
  
  $query = "INSERT INTO `forum_posts` (`title_id`, `user_id`, `post_text`, `post_time`) VALUES ({$title_id}, {$_SESSION['user_id']}, '{$content}', NOW())";
  $result = mysqli_query($dbc, $query);
	  	?>
  		<script language="javascript" type="text/javascript">
		window.location.replace("http://webdesign4.georgianc.on.ca/~200176338/AdvancedWebProgrammingClass/Forum/index.php");
		</script>
  		<?php 
  mysqli_close($dbc);
  
  }
		
?>
