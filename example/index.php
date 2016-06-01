<?php

require 'mclogin.class.php';

$auth = new minecraftAUTH();

$result = $auth->login("username", "password");

echo "<pre>".print_r($result, true)."</pre>";