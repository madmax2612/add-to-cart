<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'addtocart');
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$sql="SELECT * FROM user where email='$email' and password='$password'";
$result=mysqli_query($con,$sql) or die(mysqli_error());

if(mysqli_num_rows($result)>0){
	$row=mysqli_fetch_array($result);
	$_SESSION['user_name']=$row['email'];
	$_SESSION['user_pass']=$row['password'];
	die(header("Location:addcart.php"));
	
	
	//echo "<a href='mainpage.html'/></a>";
	mysqli_close($con);
}
else{
	echo "<h2> user not found</h2> You might have entered invalid user information.";
}
?>
	
	