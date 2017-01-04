<div class="left">
	<ul>
		<?php
		if($_SESSION['UserData']['username']){ ?>
		<li><a href="dashboard.php">Project Management Tool</a></li>
		<?php } else{
		?>
		<li><a href="index.php">Project Management Tool</a></li>
		<?php
		} ?>
	</ul>
</div>
<div class="right">
	<?php
	if($_SESSION['UserData']['username']){
	?>
	<ul>
		<li><?php  echo ucfirst($_SESSION['UserData']['uname']);?></li>
		<li>|</li>
		<li><a href="logout.php">Sign Out</a></li>
	</ul>
	<?php }?>
</div>
<div class="clearfix"></div>