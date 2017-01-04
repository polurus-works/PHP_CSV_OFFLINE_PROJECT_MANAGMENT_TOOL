<?php session_start();
/* Logout
--------------------------*/
session_unset(); 
session_destroy(); /* Destroy started session */
header("location:index.php?action=logout");
exit;
?>