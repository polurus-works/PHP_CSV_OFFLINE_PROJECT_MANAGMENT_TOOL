<?php
session_start();
ini_set('display_errors',0);

/* Login
--------------------------*/

if($_POST['action']=='login'){
	
	/* Define username and associated password array */
	$logins = array('admin' => 'admin',
		'hello' => 'world',
		'nice' => 'work');

	$uname = isset($_POST['username']) ? $_POST['username'] : '';
	$pwd = isset($_POST['pwd']) ? $_POST['pwd'] : '';

	if (isset($logins[$uname]) && $logins[$uname] == $pwd){
		$_SESSION['UserData']['username']=$logins[$uname];
		$_SESSION['UserData']['uname'] = $_POST['username'];
		header("location:dashboard.php");
		exit;
	} else {
		$_SESSION["msg"] = "Invalid login details entered";
		header("location:index.php");
		exit;
	}
		
}
?>