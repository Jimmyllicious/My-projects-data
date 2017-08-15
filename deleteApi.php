<?php

	/*header("Access-Control-Allow-Origin:*");   
	$data = json_decode(file_get_contents('php://input'));
	
	$name = $data->name;
	$surname = $data->surname;
	$email = $data->email;
	$cell = $data->cell;*/
	
	
	$ID = "2";
 	
 	

	 //echo $name." ".$surname." ".$u_name. " ";
		
	include "server.php";
    
    
	$query = $connection->prepare("call p_delete_user(?)");
	
	$query->bind_param("i",$ID);
	
	$results = array();
	 
	if ($query->execute())
	{
	
		echo "1 row deleted";

	}else{
	
		echo mysqli_error($connection);
	
	}
	
		echo json_encode($results);
		$query->close();
	
	?>