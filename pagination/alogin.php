<html>

<head>

		<link rel='stylesheet' href='pagination.css'>
</head>
	<body>
		<a href="homepage.php">Home</a><br><br><br>
		
		<center><form action="adminlogin.php" method="post">
			ID: <input type="text" id="id" name="id"><br><br>
			Password: <input type="password" id="pwd" name="pwd"><br><br>
			<input type="submit">
		</form></center>
	</body>
	
	<?php
	session_start();
	
	if(isset($_SESSION['aid']))
	{
		die(header("Location:admin.php"));
	}
	
	if(isset($_GET['status']))
	{
		echo $_GET['status'];
	}
	?>

</html>