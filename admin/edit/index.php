<?php
require_once "../../connected.php";

if ($_SESSION['name-admin']) {

	$VIEW_NAME = "edit/edit.php";
	require "../layout.php";
} else {
	header("location: ../auth/login.php");
}
