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
			
			if ($username == "") {
				echo "<p>Username can't be empty</p>";
				echo "<p><a href='signup.php' data-role='button'> Back to sign up </a></p>";

			} else if ($password =="") {
				echo "<p>Password can't be empty</p>";
				echo "<p><a href='signup.php' data-role='button'> Back to sign up </a></p>";
			} else if ($password == $password2) {
				$entered_password = crypt($password, $salt);
				$query = "insert into users (username, email, password) values ('$username', '$email', '$entered_password')";
			
				$result = mysql_query($query);
			
				if ($result) {
					echo "<p>Thank you for signing up</p>";
				}
				?>
				<p><a href="home.php" data-role="button"> Home </a></p>	

				<?php
				
			} else {
					echo "<p>Passwords don't match</p>";
				?>
				<p><a href="signup.php" data-role="button"> Back to sign up </a></p>	

				<?php
					
			}
	?>
	

	</div><!-- /content -->

</div><!-- /page submit -->



</body>
</html>
