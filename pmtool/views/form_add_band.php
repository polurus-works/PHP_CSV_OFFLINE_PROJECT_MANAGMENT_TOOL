<ol class="breadcrumb">
  <li><a href="dashboard.php">Home</a></li>
  <li class="active">Add Project</li>
</ol>
<h2>Add a Project</h2>
<div id="addForm">
<form class="form-horizontal" action="actions/add_band.php" method="post">
	<div class="col-lg-6">		
		<div class="form-group">
		    <label for="projectName" class="col-sm-4 control-label">Project Name</label>
		    <div class="col-sm-8">
		      <input type="text" id="project_name" name="project_name" class="form-control" placeholder="Ex: BDA, RDA...">
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label for="type" class="col-sm-4 control-label">Project Type</label>
		    <div class="col-sm-8">
		      <input type="text" id="project_type" name="project_type" class="form-control" placeholder="Ex: DD,DI...">
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label for="version" class="col-sm-4 control-label">Version</label>
		    <div class="col-sm-8">
		      <input type="text" id="version" name="version" class="form-control" placeholder="Ex: 1.1,3.2,4.1...">
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label for="iteration" class="col-sm-4 control-label">Iteration</label>
		    <div class="col-sm-8">
		      <input type="text" id="iteration" name="iteration" class="form-control" placeholder="Ex: 3,4">
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label for="planned" class="col-sm-4 control-label">Planned</label>
		    <div class="col-sm-8">
		      <input type="text" id="planned" name="planned" class="form-control" placeholder="Ex: 3 weeks">
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label for="qa" class="col-sm-4 control-label">QA Date</label>
		    <div class="col-sm-8">
		      <input type="text" id="qa" name="qa" class="form-control" placeholder="Ex: 2016-09-19">
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label for="uat" class="col-sm-4 control-label">UAT Date</label>
		    <div class="col-sm-8">
		      <?php //echo input('uat', 'Ex: 2016-09-19')?>
		      <input type="text" id="uat" class="form-control" name="uat" placeholder="Ex: 2016-09-29">
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label for="pdate" class="col-sm-4 control-label">Production Date</label>
		    <div class="col-sm-8">
		      <input type="text" id="pdate" class="form-control" name="pdate" placeholder="Ex: 2016-10-29">
		    </div>
	  	</div>
	  			<div class="form-group">
		    <label for="dri" class="col-sm-4 control-label">DRI</label>
		    <div class="col-sm-8">
		      <input type="text" id="dri" class="form-control" name="dri" placeholder="Ex:  Hasan...">
		    </div>
	  	</div>
	</div>
	<div class="col-lg-6">
		<div class="form-group">
		    <label for="radars" class="col-sm-4 control-label">No. of Radars</label>
		    <div class="col-sm-8">
		      <input type="text" id="radars" class="form-control" name="radars" placeholder="Ex:  4...">
		    </div>
	  	</div>

	  	<div class="form-group">
		    <label for="completed" class="col-sm-4 control-label">Completed Count</label>
		    <div class="col-sm-8">
		      <input type="text" id="completed" class="form-control" name="completed" placeholder="Ex:  4...">
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label for="inProgress" class="col-sm-4 control-label">In Progress</label>
		    <div class="col-sm-8">
		      <input type="text" id="progress" class="form-control" name="progress" placeholder="Ex:  10...">
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label for="notstarted" class="col-sm-4 control-label">Not Yet Started</label>
		    <div class="col-sm-8">
		      <input type="text" id="notstarted" class="form-control" name="notstarted" placeholder="Ex:  3...">
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label for="task1" class="col-sm-4 control-label">Week 1</label>
		    <div class="col-sm-8">
		      <textarea class="form-control" placeholder="Ex: task1-task2-task3" name="task1"></textarea>
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label for="task2" class="col-sm-4 control-label">Week 2</label>
		    <div class="col-sm-8">
		      <textarea class="form-control" placeholder="Ex: task1-task2-task3" name="task2"></textarea>
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label for="task3" class="col-sm-4 control-label">Week 3</label>
		    <div class="col-sm-8">
		      <textarea class="form-control" placeholder="Ex: task1-task2-task3" name="task3"></textarea>
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label for="task3" class="col-sm-4 control-label">Status</label>
		    <div class="col-sm-8">
		      <input type="radio" name="status" value="1"/> Completed
		      <input type="radio" name="status" value="2"/> In Progress
		      <input type="radio" name="status" value="3"/> Escalation
		      <input type="radio" name="status" value="4"/> Development
		    </div>
	  	</div>
	</div>
	<div class="clearfix"></div>
	<div class="form-group">
		<div class="col-sm-2">&nbsp;</div>
		<div class="col-sm-8">
	    	<button type="submit" class="btn btn-success">Add Band</button>
	    	<a href="dashboard.php" class="btn btn-default">Cancel</a>
	    </div>
  	</div>
	</form>
</div>