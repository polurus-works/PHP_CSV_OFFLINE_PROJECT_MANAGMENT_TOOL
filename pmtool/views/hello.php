<?php
session_start();

	if($_POST['action']=='In Progress'){
		
echo "<pre>";
print_r($_POST);
exit;
		// Read file into array
		$lines = file('../data/bands.csv',FILE_IGNORE_NEW_LINES);

		// Replace line with new values
		$lines[$_POST['linenum']] = "{$_POST['band_name']},{$_POST['band_genre']},{$_POST['band_numalbums']},{$_POST['status']}";

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
		header('Location:../?p=list_bands');
	}


?>