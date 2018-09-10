<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'addtocart');
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$sql="SELECT * FROM admin where name='$email' and password='$password'";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));

if(mysqli_num_rows($result)>0){
	$row=mysqli_fetch_array($result);
	session_start();
	$_SESSION['user_status']="logged_in";
	$_SESSION['user_name']=$row['name'];
	$_SESSION['user_pass']=$row['password'];
	die(header("Location:addproduct.php"));
	
	//echo "<a href='admin dashboard.html'/></a>";
	mysqli_close($con);
}
else{
	echo "<h2> user not found</h2> You might have entered invalid user information.";
}
?>

	
	