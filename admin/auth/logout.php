<?php
include '../../connected.php';
if ($_SESSION['name-admin']) {
	session_destroy();
	unset($_SESSION['name-admin']);

	header("location: ../auth/login.php");

	exit();
}
?>
<p>this is logout</p>