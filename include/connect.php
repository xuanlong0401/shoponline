<?php
	$link=mysqli_connect("localhost","root","") or die("Cannot connect to the localhost");
	mysqli_select_db($link,"banhngottrunghieu") or die("Cannot connect to the database");
	mysqli_query($link,"SET NAMES 'UTF8'");
?>
