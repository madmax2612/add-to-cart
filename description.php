
<html>
<head>

		
</head>
	<body>
	<?php
		
			session_start();
		
			$id=$_REQUEST['pid'];
				
			?>		
<?php			
	
			
			include("sql_helper.php");
			
			$res=$obj->select("*","product","pid=$id");
			
			
			if(count($res)>0)
				foreach($res as $row)
				{	
					$img=$row["upload_image"];
					$desc=$row["product_desc"];
					$model=$row["product_name"];
					//$type=$row["product_type"];
					//$brand=$row["brand_type"];
					$cost=$row["cost"];
				}
			else
				echo "No records found";
		?>
		
		<img src="images/<?php echo $img ?>" style="height:300px;width:200px"></img>
		
		<p>Model: <?php echo $model ?> </p>
		<p>Description: <?php echo $desc ?> </p>
		<p>Cost: Rs.<?php echo $cost ?> </p><br>
		
		<button type="button" id="mybtn" style="color:white;background-color:pink;color:black;height:40px;width:100px"><a href="user login.html">Add To Cart</a></button>
		
		
	</body>
</html>