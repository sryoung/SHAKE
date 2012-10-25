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
	

<!-- Start of second page: #signup -->
<div data-role="page" id="signup" data-add-back-btn="true">
	<div data-role="header">
		<h1>Sign Up</h1>
	</div><!-- /header -->
	
	<div data-role="content">	

    	<form action="#submit" method="post">
	<label for="foo">Username:</label>
	<input type="text" name="username" id="foo">
	<label for="foo">Email:</label>
	<input type="email" name="email" id="foo">
	<label for="bar">Password:</label>
	<input type="password" name="password" id="bar">
	<label for="bar">Reenter Password:</label>
	<input type="password" name="password2" id="bar">
    <input type="submit" value="Login">
	</form>
	</div><!-- /content -->
	

</div><!-- /page signup -->

<div data-role="page" id="submit" data-add-back-btn="true">
	<div data-role="header">
		<h1>Sign Up</h1>
	</div><!-- /header -->
	<div data-role="content">	

	<?php	
			include("config.php");
			$salt = "kr";
			
			$username = $_POST["username"];
			$password = $_POST["password"];
			$password2 = $_POST["password2"];
			$email = $_POST["email"];
			
			if ($password == $password2) {
				$entered_password = $_POST["password"];
			}
			
			$t = time();
						
			$query = "insert into users (username, email, password) values ('$username', '$email','$password')";
			
			$result = mysql_query($query);
			
			if ($result) {
				
				echo "<p>Thank you for signing up</p>";
					
			}
			
			
	?>
	</div><!-- /content -->



</div><!-- /page submit -->




</body>
</html>