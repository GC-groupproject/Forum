<!--add_topic.php-->
<!--Author's: Jean-Luc Desroches, Alex barbosa, Durwin Barcenas -->
<!--Forum-->
<!--This is our add topic page-->
<?php
	include("DATA/header_open.php");
?>
	<title>Forum - Add New Topic Discussion</title>
    <link href="DATA/CSS/postStyles.css" rel="stylesheet" type="text/css"/>
<?php
	include("DATA/header_close.php");
	if(!isset($_POST['content']))
	{
?>

<!--Add New Topic Page content made by Durwin Barcenas-->
	<h1 class="header">Add New Topic Discussion</h1>
	<div>
		<form method='post' action='<?php $_SERVER['PHP_SELF'] ?>'>
				<input type='hidden' value='allowed' name='check' />
				<input type='hidden' value='add' name='mode' />
				<table>
					<tr>
						<td class='form'><label>Topic Title</label></td>
						<td class='form'><input type='text' name='title'value="<?php echo $title;?>" /></td>
					</tr>
					<tr>
						<td class='form'><label>Content</label></td>
						<td class='form'><textarea rows='20' cols='70' name='content' value="<?php echo $content;?>"></textarea></td>
					</tr>
					<tr>

						<td class='form' ><input type="button" name="b1" value="Previous" onclick='parent.history.back();return false;' /></td>
						<td class='form'><input type='submit' value='Add Topic'  /></td>
					</tr>
				</table>
				</form>
	</div>
	<!--End of New Topic Page-->
<?php
	}
	else
	{
		include('DATA/Classes/updateTopic.php');
	}
	include("DATA/footer.php");
?>
