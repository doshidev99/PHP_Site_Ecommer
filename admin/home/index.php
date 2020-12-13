<?php
require_once "../../connected.php";

if ($_SESSION['name-admin']) {

	$VIEW_NAME = "home/home.php";
	require "../layout.php";
} else {
	header("location: ../auth/login.php");
}
