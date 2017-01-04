<?php session_start();
ini_set('display_errors', 0);
if(isset($_SESSION['UserData']['username'])){
	header("location:dashboard.php");
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Project Management Tool</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/pms.css" rel="stylesheet">
	
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="header">
		<?php include_once('layout/header.php');?>
	</div>
	<!-- /Header -->
    <div class="container">
      <form class="form-signin" action="actions.php?action=login" method="POST">
        <h2 class="form-signin-heading">Please sign in</h2>
        <p class="text-danger text-center">
			<b><?php  echo $_SESSION["msg"];$_SESSION["msg"]="";?>
			<?php  
				if(isset($_GET['action'])){
					echo "You have been succefully logged out";
				}
			?></b>
		</p>
        <label for="inputEmail" class="sr-only">User Name</label>
        <input type="text" id="inputEmail" name="username" class="form-control" placeholder="User Name" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password"  name="pwd" id="inputPassword" class="form-control" placeholder="Password" required>
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Sign In"/>
        <input type="hidden" name="action" value="login"/>
      </form>
    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>