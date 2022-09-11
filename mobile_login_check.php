<?php
	if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}

	// Check if the user is already logged in, if yes then redirect him to welcome page
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: profile.php");
        exit();
    } else {
    	header("location: mobile_login.php");
    	exit();
    }
?>