<?php

require 'mclogin.class.php';

$username = $_POST["username"];
$password = $_POST["password"];
$errorHandles = array(
					1=>"Please enter both an email and password",
					2=>"Invalid login credentials!",
					3=>"This is a demo account. Please login with a premium account.",
					4=>"Unknown error!",
				);

$auth = new minecraftAUTH();

$result = $auth->login("$username", "$password");

if (!is_array($result)) {
	echo $errorHandles[$result];
} else {
	echo "Successfully logged in as ".$result["userData"]["username"].".";
}

//echo "<pre>".print_r($result, true)."</pre>";