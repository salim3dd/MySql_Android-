<?php

include("config.php");


$UserKey = strip_tags(trim($_POST["UserKey"]));
$UserName = strip_tags(trim($_POST["UserName"]));
$Email = strip_tags(trim($_POST["Email"]));
$Password = strip_tags(trim($_POST["UserPassword"]));

$AvatarFileName = strip_tags(trim($_POST["AvatarFileName"]));
$ImgCode_Avatar = strip_tags(trim($_POST["ImgCode_Avatar"]));


if ($UserKey<>"" && $UserName<>"" && $Email<>"" && $Password<>""){

	if ($ImgCode_Avatar<>"") {   	
		$dateeCode=date("Ymdhi");
		$randomletter = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 5);
		$milliseconds = round(microtime(true));
		$Avatar = "U".$randomletter.$dateeCode.$milliseconds;

		$NewAvatar = $Avatar.".jpg";						
				$decodimg = base64_decode("$ImgCode_Avatar");
				file_put_contents("Images/".$NewAvatar,$decodimg);
				unlink("Images/".$AvatarFileName);
		$sql_query = "UPDATE Users SET UserName='$UserName', Avatar='$NewAvatar' , Email='$Email' WHERE UserKey LIKE '$UserKey'";


	}else{
		$sql_query = "UPDATE Users SET UserName='$UserName' , Email='$Email' WHERE UserKey LIKE '$UserKey'";
	}

	$dbResult = $conn->query($sql_query);
	if ($dbResult === TRUE) {
		$check = "Update_OK";  		
		} else {
		 $check = "Error"; 
		}
}

$json_re=array();
array_push($json_re,array("success"=>$check, "NewAvatar"=>$NewAvatar));
echo json_encode($json_re);

mysqli_close($conn);
?>
