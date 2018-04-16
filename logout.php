<?php session_start();
	// session_unset($_SESSION['user']);
$_SESSION['user']==null;
	header('Location: index.php');
	exit();
?>
