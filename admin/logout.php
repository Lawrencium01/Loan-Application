<?php
	error_reporting(0);
	session_start();
	$_SESSION['PageKey'] = "xxx";
	$_SESSION['PassTag']="xxx";
	session_destroy();
	echo "<BR><BR><h1 style='color:blue;padding-left:35%;'>BYE FOR NOW</>";
?>