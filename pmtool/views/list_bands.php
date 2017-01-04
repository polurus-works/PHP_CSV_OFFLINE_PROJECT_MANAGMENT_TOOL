<ol class="breadcrumb">
	<li><a href="dashboard.php">Home</a></li>
	<li class="active">Welcome</li>
</ol>
<div>
	<div class="pull-left"><h2>Current Projects</h2></div>
	<div class="pull-right"><a href="dashboard.php?p=form_add_band" class="btn btn-primary">Add Project</a></div>
	<div class="clearfix"></div>
</div>
<div id="grid">
	<table class="table">
		<thead>
			<tr>
				<th>Project Name</th>
				<th>Type</th>
				<th>Version</th>
				<th>Iteration</th>
				<th>Planned</th>
				<th>QA Date</th>
				<th>UAT Date</th>
				<th>Production Date (1st release)</th>
				<th>DRI</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php
			// Read all lines of the CSV file into an array
			$lines = file('data/bands.csv',FILE_IGNORE_NEW_LINES);
			// The file function in PHP returns an array of
			// all the lines in the file listed
				//echo count($lines);
			// Counter variable for the line number
				$i = 0;
			// Iterate over the array of lines
			foreach($lines as $line) {
				$parts = explode(',', $line); // $parts is an array of 3 elements
				$projectId = $parts[3];
				$name = $parts[0];
				$genre = $parts[1];
				$num_albums = $parts[2];
				$bgcolor = '';
				if($parts[15]==1){
					$bgcolor = '#f2f2f2';
					
				}elseif($parts[15]==3){
					$bgcolor = '#f45d48';
					$color = '#fff';
				}elseif($parts[15]==2){
					$bgcolor = '#fbff79';
				}else{
					$bgcolor = '#acff99';
				}
			?>
			<tr style="background:<?php echo $bgcolor;?> !important;color: <?php echo $color;?>;">
				<td><a href="dashboard.php?p=form_view_band&band=<?php echo $i;?>"><?php echo $parts[0];?></a></td>
				<td><?php echo $parts[1];?></td>
				<td><?php echo $parts[2];?></td>
				<td><?php echo $parts[3];?></td>
				<td><?php echo $parts[4];?></td>
				<td><?php echo $parts[5];?></td>
				<td><?php echo $parts[6];?></td>
				<td><?php echo $parts[7];?></td>
				<td><?php echo $parts[8];?></td>
				<td>
					<a href="dashboard.php?p=form_edit_band&band=<?php echo $i;?>" class="btn btn-warning">
						<i class="glyphicon glyphicon-pencil"></i>
					</a>
					<a href="./actions/delete_band.php?linenum=<?php echo $i;?>" class="btn btn-danger">
						<i class="glyphicon glyphicon-trash"></i>
					</a>
				</td>
			</tr>
			<?php
				$i++;	// increment line number
			}
			?>
			<?php
			if(count($lines) == 0){
			?>
			<tr>
				<td colspan="10"><p class="text-center">No Projects found. <a href="dashboard.php?p=form_add_band">Add Project</a></p></td>
			</tr>
			<?php
			}
			?>
		</tbody>
	</table>
</div>