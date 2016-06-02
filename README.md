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

##Error Codes and Handling
* 1 = A blank username or password
* 2 = Invalid credentials
* 3 = The account is demo, has not paid
* 4 = An unknown/unexpected error. Not sure if anything will ever trigger this error, but its defined anyway just in case

##Class usage
You are free to use this class for any projects you see fit. You are, however, **not** permitted to:

1. Remove the information at the top of the class (lines 2-11).
2. Claim this work as your own.
3. Edit a minute amount of code and call it "edited".

Other than that, this class is free to use in anyway. I would like to ask that credit be given where credit is due, but 90% of the internet doesnt do that anyway :P
