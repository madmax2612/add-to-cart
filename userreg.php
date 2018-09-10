<?php
$con=mysqli_connect('localhost','root','1234');
mysqli_select_db($con,'addtocart');
$firstname=$_REQUEST['username'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$sql="insert into user(name,email,password)values('$firstname','$email','$password')";
//$result=mysqli_query($con,$sql) or die(mysqli_error($con));

if(mysqli_query($con, $sql)){
	//echo "1 row inserted";
	$_SESSION['user_name']=$row['email'];
	$_SESSION['user_pass']=$row['password'];
	die(header("Location:user login.html"));
	
  //echo "<a href='user login.html'/></a>";
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
	mysqli_close($con);


?>
	
	