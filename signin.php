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
	
<!-- Start of second page: #signin -->
<div data-role="page" id="signin" data-add-back-btn="true">
	<div data-role="header">
		<h1>Sign In</h1>
	</div><!-- /header -->
	
	
	<div data-role="content">
	
	
	
	<?php
	include("config.php");
	
	$username = $_POST["username"];
	$entered_password = $_POST["password"];
	
	$salt = "kr";

	// This saved_password would be saved in the database.

	$entered_password = $_POST["password"];
	
	$query = "select * from users where username = '".$username."'";
	$result = mysql_query($query);

	$row = mysql_fetch_assoc($result);
	$saved_password = $row["password"];
	
	$num_rows = mysql_num_rows($result);

	if ($num_rows > 0) {
		if (crypt($entered_password, $salt) == $saved_password) {
		?>
			<script type="text/javascript">
				// Save the username in local storage. That way you
				// can access it later even if the user closes the app.
				localStorage.setItem('username', '<?=$_POST["username"]?>');
			</script>
		<?php
		echo "<p>Thank you, <strong>".$_POST["username"]."</strong>. You are now logged in.</p>";
		echo "<p><a href='home.php' data-role='button'>Home</a></p>";

		
		} else {
			echo "<p>Invalid Password.</p>";
			echo "<p><a href='welcome.php' data-role='button'>Back to sign up again</a></p>";
		} 
	} else {
		echo "<p>Invalid User</p>";
		echo "<p><a href='welcome.php' data-role='button'>Back to sign up again</a></p>";
	}
	

?>

	<div data-role="fieldcontain">
</div><!-- /page signin -->



</body>
</html>