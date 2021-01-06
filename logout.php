<?php
	
	session_start();
	echo $_SESSION['name'];
	unset($_SESSION['name']);
	$_SESSION['id'] = 0;
	if (empty($_SESSION['name'])) {
		$_SESSION['userrole'] = "";
header('location:http://assrsoftsolutions.com/');
	}
	else{
		echo "<script> alert('logout failed please try again')";
	}
?>