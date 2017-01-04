<?php 
session_start();

// Read file into array
$lines = file('../data/bands.csv',FILE_IGNORE_NEW_LINES);

// Delete the line of that band
unset($lines[$_GET['linenum']]);

// Create the string to write to the file
$data_string = implode("\n", $lines);

// Write the string to the file, overwriting the current contents
$f = fopen('../data/bands.csv', 'w'); // a+ for append
fwrite($f, $data_string);
fclose($f);

$_SESSION['message'] = array(
		'text' => 'Your band has been deleted.',
		'type' => 'danger'
);

// $_SESSION['message'] = 'Your band has been deleted.';

// Redirect to the main page
header('Location:../?p=list_bands');
?>