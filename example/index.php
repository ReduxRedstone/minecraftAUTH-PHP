<html>
<head>
	<title>Minecraft Auth - Example</title>
	<link rel="stylesheet" href="files/css/bootstrap.css">
	<link rel="stylesheet" href="files/css/bootstrap.min.css">

	<script src="files/js/jquery-2.1.4.min.js"></script>
	<script src="files/js/bootstrap.min.js"></script>
	<script src="files/js/main.js"></script>
</head>
<body>
<div class="container">
	<legend>Minecraft Login</legend>
	<div>
	  	<div class="form-group">
	    	<label for="userEmail">Email address</label>
	    	<input type="email" class="form-control" id="userEmail" placeholder="Email">
	  	</div>
	  	<div class="form-group">
	    	<label for="userPassword">Password</label>
	    	<input type="password" class="form-control" id="userPassword" placeholder="Password">
	  	</div>
	  	<button onclick="login()" class="btn btn-default">Login</button>
	</div>
	<div class="output"></div>
</div>
</body>
</html>