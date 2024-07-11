<?php
	error_reporting(0);
	session_start();
	$PCode = $_POST['PCode'];
	$_SESSION['PageKey'] = $PCode;
	echo 1;
?>