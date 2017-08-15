<?php

	/*header("Access-Control-Allow-Origin:*");   
	$data = json_decode(file_get_contents('php://input'));
	
	$name = $data->name;
	$surname = $data->surname;
	$email = $data->email;
	$cell = $data->cell;*/
	
		
	include "server.php";
    
    
	$query = $connection->prepare("call p_select_all_users()");

	$results = array();
	
	if ($query->execute())
	{
		$query->bind_result($ID,$fname, $lname, $email, $passwd);

		while($query->fetch())
		{
			$results = array("user_ID"=>$ID,"first"=>$fname,"last"=>$lname,"emaill"=>$email,"pass"=>$passwd);
	  
            echo json_encode($results);
		}

		
		echo "all records retrieved ";

	}else{
	
		echo mysqli_error($connection);
	
	}
	
		
		$query->close();
	
	?>