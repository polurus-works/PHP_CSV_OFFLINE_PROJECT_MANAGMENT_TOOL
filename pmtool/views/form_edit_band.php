<?php 
	// Read all lines of the CSV file into an array
	$lines = file('data/bands.csv',FILE_IGNORE_NEW_LINES);
	
	// Get the line associated with the 'band' paramter in the Query String
	$band = explode(',', $lines[$_GET['band']]);
?>
<ol class="breadcrumb">
  <li><a href="dashboard.php">Home</a></li>
  <li class="active">Edit Project</li>
</ol>
<h2>Edit Project</h2>
<div id="addForm">
<form class="form-horizontal" action="actions/edit_band.php" method="post">
<input type="hidden" name="linenum" value="<?php echo $_GET['band'] ?>" />
	<div class="col-lg-6">		
		<div class="form-group">
		    <label for="projectName" class="col-sm-4 control-label">Project Name</label>
		    <div class="col-sm-8">
		      <input type="text" id="project_name" name="project_name" class="form-control" value="<?php echo $band[0];?>">
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label for="type" class="col-sm-4 control-label">Project Type</label>
		    <div class="col-sm-8">
		      <input type="text" id="project_type" name="project_type" class="form-control" value="<?php echo $band[1];?>">
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label for="version" class="col-sm-4 control-label">Version</label>
		    <div class="col-sm-8">
		      <input type="text" id="version" name="version" class="form-control" value="<?php echo $band[2];?>">
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label for="iteration" class="col-sm-4 control-label">Iteration</label>
		    <div class="col-sm-8">
		      <input type="text" id="iteration" name="iteration" class="form-control" value="<?php echo $band[3];?>">
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label for="planned" class="col-sm-4 control-label">Planned</label>
		    <div class="col-sm-8">
		      <input type="text" id="planned" name="planned" class="form-control" value="<?php echo $band[4];?>">
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label for="qa" class="col-sm-4 control-label">QA Date</label>
		    <div class="col-sm-8">
		      <input type="text" id="qa" name="qa" class="form-control" value="<?php echo $band[5];?>">
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label for="uat" class="col-sm-4 control-label">UAT Date</label>
		    <div class="col-sm-8">
		      <?php //echo input('uat', 'Ex: 2016-09-19')?>
		      <input type="text" id="uat" class="form-control" name="uat" value="<?php echo $band[6];?>">
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label for="pdate" class="col-sm-4 control-label">Production Date</label>
		    <div class="col-sm-8">
		      <input type="text" id="pdate" class="form-control" name="pdate" value="<?php echo $band[7];?>">
		    </div>
	  	</div>
	  			<div class="form-group">
		    <label for="dri" class="col-sm-4 control-label">DRI</label>
		    <div class="col-sm-8">
		      <input type="text" id="dri" class="form-control" name="dri" value="<?php echo $band[8];?>">
		    </div>
	  	</div>
	</div>
	<div class="col-lg-6">
		<div class="form-group">
		    <label for="radars" class="col-sm-4 control-label">No. of Radars</label>
		    <div class="col-sm-8">
		      <input type="text" id="radars" class="form-control" name="radars" value="<?php echo $band[16];?>">
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label for="completed" class="col-sm-4 control-label">Completed Count</label>
		    <div class="col-sm-8">
		      <input type="text" id="completed" class="form-control" name="completed" value="<?php echo $band[9];?>">
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label for="inProgress" class="col-sm-4 control-label">In Progress</label>
		    <div class="col-sm-8">
		      <input type="text" id="progress" class="form-control" name="progress" value="<?php echo $band[10];?>">
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label for="notstarted" class="col-sm-4 control-label">Not Yet Started</label>
		    <div class="col-sm-8">
		      <input type="text" id="notstarted" class="form-control" name="notstarted" value="<?php echo $band[11];?>">
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label for="task1" class="col-sm-4 control-label">Week 1</label>
		    <div class="col-sm-8">
		      <textarea class="form-control" value="Ex: task1-task2-task3" name="task1"><?php echo $band[12];?></textarea>
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label for="task2" class="col-sm-4 control-label">Week 2</label>
		    <div class="col-sm-8">
		      <textarea class="form-control" value="Ex: task1-task2-task3" name="task2"><?php echo $band[13];?></textarea>
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label for="task3" class="col-sm-4 control-label">Week 3</label>
		    <div class="col-sm-8">
		      <textarea class="form-control" value="Ex: task1-task2-task3" name="task3"><?php echo $band[14];?></textarea>
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label for="task3" class="col-sm-4 control-label">Status</label>
		    <div class="col-sm-8">
		      <input type="radio" name="status" value="1" <?php if($band[15]==1) echo "checked";?>/> Completed
		      <input type="radio" name="status" value="2" <?php if($band[15]==2) echo "checked";?>/> In Progress
		      <input type="radio" name="status" value="3" <?php if($band[15]==3) echo "checked";?>/> Escalation
		      <input type="radio" name="status" value="4" <?php if($band[15]==4) echo "checked";?>/> Development
		    </div>
	  	</div>
	</div>
	<div class="clearfix"></div>
	<div class="form-group">
		<div class="col-sm-2">&nbsp;</div>
		<div class="col-sm-8">
	    	<button type="submit" class="btn btn-success">Edit Band</button>
	    	<a href="dashboard.php" class="btn btn-default">Cancel</a>
	    </div>
  	</div>
	</form>
</div>
