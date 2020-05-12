<?php

include("config.php");


$All_Users = array();
$result = "SELECT * FROM Users" ;
$result_Users = $conn->query($result);
		while($rows = $result_Users->fetch_assoc()) {			 
	        $All_Users[] = $rows;	        
	    }
              		      
 $json_re=array();
	array_push($json_re,array("All_Users"=>$All_Users));
	echo json_encode($json_re);

mysqli_close($conn);
?>