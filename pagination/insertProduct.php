<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'addtocart');
$name=$_REQUEST['name'];
$ptype=$_REQUEST['ptype'];
$brand=$_REQUEST['brand'];
$image=$_FILES['file']['name'];
$desc=$_REQUEST['desc'];
$cost=$_REQUEST['cost'];
				
				
				//echo "stored in:".$_FILES["file"]["tmp_name"];
	move_uploaded_file($_FILES['file']['tmp_name'],"images/" .$_FILES['file']['name']);
			
$sql="insert into product(product_name,product_type,brand_type,upload_image,product_desc,cost)
values('$name','$ptype','$brand','$image','$desc','$cost')";
//$result=mysqli_query($con,$sql) or die(mysqli_error($con));


if(mysqli_query($con, $sql)){
	//echo "1 row inserted";
	$_SESSION['user_id']=$row['pid'];
	
	die(header("Location:homepage.php"));
	
  //echo "<a href='user login.html'/></a>";
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
	mysqli_close($con);


?>
	
	