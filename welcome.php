<!DOCTYPE html>
<html>

<head>
	<title>VoteCasterFail</title> 
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="jquery.mobile-1.2.0.css" />

	<link rel="stylesheet" href="style.css" />
	<link rel="apple-touch-icon" href="appicon.png" />
	<link rel="apple-touch-startup-image" href="startup.png">
	
	<script src="jquery-1.8.2.min.js"></script>
	<script src="jquery.mobile-1.2.0.js"></script>

</head> 


	<body>
	
	<!-- Start of first page: #one -->
<div data-role="page" id="one">
	<div data-role="header">
		<h1>Welcome</h1>
	</div><!-- /header -->
	
	<div data-role="content">	
	<h2>Welcome to SHAKE <span id="username"></span></h2>
		
		
	<form action="signin.php" method="post">
	<label for="foo">Username:</label>
	<input type="text" name="username" id="foo">
	<label for="bar">Password:</label>
	<input type="password" name="password" id="bar">
    <input type="submit" value="Login">
	</form>


	<p><a href="signup.php" data-role="button">Sign Up</a></p>	

	</div><!-- /content -->

</div>




</body>
</html>