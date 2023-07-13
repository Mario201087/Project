<?php
	session_start();

	$_SESSION['premissions']=0;

	$dbc = mysqli_connect('localhost', 'root','','project') OR die(mysqli_connect_error());

?>