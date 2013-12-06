<?php
	$topicID = $_POST['topicID'];
?>
<div class="writtingBox">
	<form action="<?php echo URL . "topic_discussion.php?topic=" . $topicID; ?>">
    	<textarea name="response" required="required" spellcheck="true" placeholder="Type response here" maxLength="5000"></textarea>
        <input type="submit" name="submit" value="Post" class="button submit" />
    </form>
</div>