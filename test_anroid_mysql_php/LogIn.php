<?php 
include("config.php");


$UserName = strip_tags(trim($_POST["UserName"]));
$PassWord = strip_tags(trim($_POST["PassWord"]));

if ($UserName <> "" && $PassWord <> "")
    {
       
        
$md5Pass = md5($PassWord); 
$Users_Data = array();
$sql_UsersLogIn = "SELECT * FROM Users WHERE UserName LIKE '$UserName' AND Password LIKE '$md5Pass' LIMIT 1";
	
	$uLogInCheck = $conn->query($sql_UsersLogIn);    
    if ($uLogInCheck->num_rows > 0) {    
            
            while($rowLogIn = $uLogInCheck->fetch_assoc()) {			 
                 $user_name = $rowLogIn['UserName'];
                 $user_pass = $rowLogIn['Password']; 
                
                if ($user_name === $UserName && $user_pass === $md5Pass){                   
                    
                    $Users_Data[] = $rowLogIn; 
                        
                    $check = "LogIn_OK"; 
                }else{
                $check = "LogIn_Error";
                }
	           	           
            }
            
	    }else{
	    $check = "LogIn_Error"; 
	    }

}
    
$json_re=array();
array_push($json_re,array("success"=>$check,"Users_Data"=>$Users_Data));
echo json_encode($json_re);

mysqli_close($conn);
?> 
