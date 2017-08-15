<?php

	/*header("Access-Control-Allow-Origin:*");   
	$data = json_decode(file_get_contents('php://input'));
	
	$name = $data->name;
	$surname = $data->surname;
	$email = $data->email;
	$cell = $data->cell;*/
	
	
	$ID= "7";
	$fname = "dakalo";
 	$lname = "forrr";
 	$email = "thinga@gmail.com";
	 $passwd = "33455445";
 	
 	

	 
		
	include "server.php";
    
    
	$query = $connection->prepare("call p_update_user(?,?,?,?,?)");
	
	$query->bind_param("issss" ,$ID,$fname,$lname,$email,$passwd);
	
	$results = array();
	 
	if ($query->execute())
	{
	
		echo "1 row updated";

	}else{
	
		echo mysqli_error($connection);
	
	}
	
		echo json_encode($results);
		$query->close();
	
	?>