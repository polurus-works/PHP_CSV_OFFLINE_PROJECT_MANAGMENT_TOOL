<?php
	// Read all lines of the CSV file into an array
	$lines = file('data/bands.csv',FILE_IGNORE_NEW_LINES);
	
	// Get the line associated with the 'band' paramter in the Query String
	$band = explode(',', $lines[$_GET['band']]);
?>
<ol class="breadcrumb">
	<li><a href="dashboard.php">Home</a></li>
	<li class="active">View Project</li>
</ol>
<h2><?php echo $band[0]; ?></h2>
<div id="count" class="col-lg-12">
	<ul>
		<li>
			<div><b><?php echo $band[9]; ?></b></div>
			<div>Completed</div>
		</li>
		<li>
			<div><b><?php echo $band[10]; ?></b></div>
			<div>In Progress</div>
		</li>
		<li>
			<div><b><?php echo $band[11]; ?></b></div>
			<div>Not Started</div>
		</li>
	</ul>
	<div class="clearfix"></div>
</div>
<div id="viewProject">
	<form class="form-horizontal">
		<div class="form-group">
			<label for="Radards" class="col-sm-3">Radars</label>
			<div class="col-sm-9">
				<?php echo $band[16];?>
			</div>
		</div>
		<div class="form-group">
			<label for="week1" class="col-sm-3">Week 1</label>
			<div class="col-sm-9">
				<?php
							$task1 = str_replace('-', '<br/>', $band[12]);
							echo $task1;
				?>
				
			</div>
		</div>
		<div class="form-group">
			<label for="week2" class="col-sm-3">Week 2</label>
			<div class="col-sm-9">
				<?php
							$task2 = str_replace('-', '<br/>', $band[13]);
							echo $task2;
				?>
				
			</div>
		</div>
		<div class="form-group">
			<label for="week3" class="col-sm-3">Week 3</label>
			<div class="col-sm-9">
				<?php
							$task3 = str_replace('-', '<br/>', $band[14]);
							echo $task3;
				?>
				
			</div>
		</div>
		<div class="form-group">
			<label for="week3" class="col-sm-3">&nbsp;</label>
			<div class="col-sm-9">
				<a href="dashboard.php?p=form_edit_band&band=<?php echo $_GET['band'];?>" class="btn btn-warning">Edit</a>
				<a href="dashboard.php" class="btn btn-default">Cancel</a>
			</div>
		</div>
		<div class="clearfix"></div>
	</form>
	
</div>