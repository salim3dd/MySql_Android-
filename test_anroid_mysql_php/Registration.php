<?php

include("config.php");

date_default_timezone_set("Asia/Muscat");
$RegDate= date("Y/m/d - h:i a");


$UserName = strip_tags(trim($_POST["UserName"]));
$Password = strip_tags(trim($_POST["Password"]));
$Email = strip_tags(trim($_POST["Email"]));
$ImgCode_Avatar= strip_tags(trim($_POST["ImgCode_Avatar"]));

if ($UserName<>"" && $Password<>"" && $Email<>""){


$dateeCode=date("Ymdhi");
$randomletter = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 5);
$milliseconds = round(microtime(true));
$UserKey = "U".$randomletter.$dateeCode.$milliseconds;


$Avatar = $UserKey.".jpg";
if ($ImgCode_Avatar<>"") {   	
				
		$decodimg = base64_decode("$ImgCode_Avatar");
		file_put_contents("Images/".$Avatar,$decodimg);
}
$newPass = md5($Password);
$sql_query = "INSERT INTO Users (UserKey, UserName, Password, Email, RegDate, Avatar)VALUES('$UserKey','$UserName','$newPass','$Email','$RegDate','$Avatar')";
	$dbResult = $conn->query($sql_query);
	if ($dbResult === TRUE) {
		$check = "Reg_OK";  
		} else {
		 $check = "Error"; 
		}
}

$json_re=array();
array_push($json_re,array("success"=>$check, "UserKey"=>$UserKey));
echo json_encode($json_re);

mysqli_close($conn);

?>
