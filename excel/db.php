<?php
	$conn=mysqli_connect("localhost","root","","studentdb") or die("Could not connect");
	mysqli_set_charset($conn,'utf8');
	mysqli_select_db($conn,"studentdb") or die("could not connect database");
?>