<?php 
session_start();

// Read file into array
$lines = file('../data/bands.csv',FILE_IGNORE_NEW_LINES);

// Replace line with new values
$lines[$_POST['linenum']] = "{$_POST['project_name']},{$_POST['project_type']},{$_POST['version']},{$_POST['iteration']},{$_POST['planned']},{$_POST['qa']},{$_POST['uat']},{$_POST['pdate']},{$_POST['dri']},{$_POST['completed']},{$_POST['progress']},{$_POST['notstarted']},{$_POST['task1']},{$_POST['task2']},{$_POST['task3']},{$_POST['status']},{$_POST['radars']}";

// Create the string to write to the file
$data_string = implode("\n", $lines);

// Write the string to the file, overwriting the current contents
$f = fopen('../data/bands.csv', 'w'); // a+ for append
fwrite($f, $data_string);
fclose($f);

$_SESSION['message'] = array(
	'text' => 'Your band has been edited.',
	'type' => 'info'		
); 



// Redirect to the main page
header('Location:../dashboard.php?p=list_bands');
?>