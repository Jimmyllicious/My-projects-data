<?php

	/*header("Access-Control-Allow-Origin:*");   
	$data = json_decode(file_get_contents('php://input'));
	
	$name = $data->name;
	$surname = $data->surname;
	$email = $data->email;
	$cell = $data->cell;*/
	
	
	$ID= "2";
    $passwd="";
 	
		
	include "server.php";
    

	$query = $connection->prepare("call p_select_one_user(?,?)");
	$query->bind_param("is",$ID,$passwd);

	if($query->execute()){


	$query->bind_result($ID,$passwd);
	
	$results = array();
	
	
	  while($query->fetch())
		{
			$results = array("user_id"=>$ID,"pass"=>$passwd);
	  
            echo json_encode($results);
		}
	
	}	
		$query->close();
	
	?>