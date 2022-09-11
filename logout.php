<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
$currentPage = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/")+1); //get the current page name

if ($currentPage != 'profile.php') {
	header("location: ".$_SERVER['HTTP_REFERER']); //redirects user back to the same page while logged in
} else {
	header("location: index.php");
}
exit;

?>

 

