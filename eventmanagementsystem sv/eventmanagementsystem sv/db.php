<?php
	$db=mysqli_connect('localhost:3306','root','','eventmanagedb');
	session_start();
	$_SESSION['now']=$now = date("Y-m-d ");
	$_SESSION['later']=$later= '2018-12-31';
?>