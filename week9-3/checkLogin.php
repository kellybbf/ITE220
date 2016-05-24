<?php
session_start();

if($_POST['myusername'] == "admin" && $_POST ['mypassword'] == "1234") {
	

	$_SESSION["username"] = $_POST['myusername'];

	// redirect to index.php
	header("location: index.php");

}else{
	// redirct to login-error.php
	header("location: login-error.php");

}

?>