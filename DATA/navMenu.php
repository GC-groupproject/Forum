<nav>
    <ul>
        <li class="nav_link"><a href="index.php">Home</a></li>		
        <li class="nav_link"><a href="contact_page.php">Contact Us</a></li>  
        
        <?php
		if($_SESSION['user_id'] != ANONUSER)		
		{
			?>
            <li class="nav_link"><a href="add_topic.php">Add New Topic</a></li>
            <li id="myprofile" class="nav_link"><a href="editprofile.php">My profile</a></li>
            <div id="user">
				<?php
                echo '<p class="nav_link" style="color:white" >Hello, ' . $_SESSION['username'] . ' </p>';
                ?>
                <li class="nav_link"><a  href="logout.php">Sign out</a></li>
            </div>
			<?php
		}
		else
		{
		?>
        <div id="user">
            <li id="login" class="nav_link"><a href="login.php">Login</a></li>
            <li id="login" class="nav_link"><a href="signup.php">Signup</a></li>
        </div>
        <?php
		}
		?>
    </ul>
</nav>