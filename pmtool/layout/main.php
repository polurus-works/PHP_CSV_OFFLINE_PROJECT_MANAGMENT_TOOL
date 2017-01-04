<?php
// Display a message if there is one in session data
if(isset($_SESSION['message'])) {
	// Display the message
	echo "<div class=\"alert alert-{$_SESSION['message']['type']}\">{$_SESSION['message']['text']}</div>";
	
	// Remove the message from session
	unset($_SESSION['message']);
}

// Store the 'p' parameter from the QS into a variable
if(isset($_GET['p'])) {
	$p = $_GET['p'];
} else {
	$p = 'list_bands';
}


// CWD -> Current Working Directory (mybands)
		// Directory of file being served
include("views/$p.php");

// like the interchangable parts from robocode