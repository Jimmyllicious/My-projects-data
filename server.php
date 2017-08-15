<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "usersDB";

	$connection = mysqli_connect($host,$username, $password,$database);

	if($connection){
		echo "database connected";
	}else{
		echo "database not connected";
	}
?>