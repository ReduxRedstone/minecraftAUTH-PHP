<?php

require 'mclogin.class.php';

$username = $_POST["username"];
$password = $_POST["password"];

$auth = new minecraftAUTH();

$result = $auth->login("$username", "$password");

echo "<pre>".print_r($result, true)."</pre>";