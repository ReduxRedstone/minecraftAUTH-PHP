# minecraftAUTH-PHP
Verifies a users Minecraft login details and outputs data based on the success of the request.

Currently only contains one function, login();

Example code:

```php
require 'mclogin.class.php';
$auth = new minecraftAUTH();
$result = $auth->login("username", "password");

echo "<pre>".print_r($result, true)."</pre>";
```

##Error Codes and Handling:
* 1 = A blank username or password
* 2 = Invalid credentials
* 3 = The account is demo, has not paid
* 4 = An unknown/unexpected error. Not sure if anything will ever trigger this error, but its defined anyway just in case
