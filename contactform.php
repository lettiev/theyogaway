<?php

if (isset($_POST['name'])) {

	$name = $_POST['name'];
	$emailFrom = $_POST['email'];
	$message = $_POST['message'];

	$mailTo = "namaste@theyogaw.com";
	$headers = "From: ".$emailFrom;
	$txt = "You have received an e-mail from ".$name.".\n\n".$message;


	mail($mailTo, $txt, $headers);
	header("Location: thanks.html?mailsend");
}else echo "Error";

?>