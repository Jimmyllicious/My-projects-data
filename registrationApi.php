<?php

	header("Access-Control-Allow-Origin:*");   
	$data = json_decode(file_get_contents('php://input'));
	
	$fname = $data->fname;
	$lname = $data->lname;
	$email = $data->email;
	$passwd = $data->passwd;
	
	
	
 	/*$fname = "Nyawasedza";
	$lname ="Munyai";
 	$email = "nyawasedza@gmail.com";
 	$passwd = "12345678";*/

		
	include "server.php";
    
    
	$query = $connection->prepare("call p_insert_user(?,?,?,?)");
	
	$query->bind_param("ssss" ,$fname,$lname,$email,$passwd);
	
	$results = array();
	 
	if ($query->execute())
	{
	
		echo "1 row inserted";

	}else{
	
		echo mysqli_error($connection);
	
	}
	
		echo json_encode($results);
		$query->close();
	
	?>