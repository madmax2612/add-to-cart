<html>

<head>

		<link rel='stylesheet' href='pagination.css'>
</head>
	<body>
		<?php
		session_start();
		
		if(!isset($_SESSION['aid']))
		{
			die("Please Login to Continue");
		}
		
		if(isset($_SESSION['aid']))
		{
		?>
		<a href="homepage.php">Home</a>
		<a href="logout.php" style="float:right">Log Out</a><br><br>
		<?php
		}
		?>
		
		<form action="addproduct.php" method="post">
			Product Name: <input type="text" name="pname" id="pname"><br><br>
			Product Type: <select name="ptype">
						  <option value="Mobile">Mobile</option>
						  <option value="Camera">Camera</option>
						  </select><br><br>
			Brand: <select name="pbrand">
				   <option value="Sony">Sony</option>
				   <option value="Xolo">Xolo</option>
				   <option value="Samsung">Samsung</option>
				   <option value="Nokia">Nokia</option>
				   <option value="Lenovo">Lenovo</option>
				   <option value="Blackberry">Blackberry</option>
				   <option value="Canon">Canon</option>
				   <option value="Nikon">Nikon</option>
				   </select><br><br>
				   
			Upload Image: <input type="file" name="pimg" accept="image/*"><br><br>
			Product Description: <input type="textarea" name="pdesc"><br><br>
			Cost: <input type="number" name="pcost"><br><br>
			
			<input type="submit" value="Add Product">
			<input type="reset" value="Reset">
			
		</form>
	
	</body>

</html>