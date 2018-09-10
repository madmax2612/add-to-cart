<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'addtocart');
$sql="select * from product";
$result=mysqli_query($con,$sql);

?>
<html>
	<head>
	
	
	
		<title>
			Mycart.com
		</title>
		
		<link rel='stylesheet' href='ugallary.css'>
	</head>	
	
	<body style="background-image:url('images/back1.jpg')">
		<center><h1>Welcome To Mycart</h1></center>
		 <div id="menu" style="padding-left:20px">
   <ul>
   <li><a href="ugallary.php">Home</a></li>
   <li><a href="user login.html">Log In</a></li>
   <li><a href="logout.php">Log Out</a></li>
  <br><br><hr>
  
				<center><table>
				
				
				<?php 
				while($row=mysqli_fetch_array($result))
				{
					?>
				<section class="section" style="display:flex;flex-wrap:wrap;float:left">
				<div style="border:1px solid #333; border-radius:5px; padding:16px;float:left" align="center">
				<!--<div id="image"style="float:left;border:1px solid black;margin-left:30px;margin-top:20px;height:280px;width:250px">-->
				<img src="images/<?php echo $row['upload_image'] ?>"  style="height:200px; width:150px;margin-left:20px"></img></a>
				<br><a href="description.php?pid=<?php echo $row['pid'] ?>">view description
				</div>
				</section>
				
				<?php
				}
				?>
				
				</tr>
				</table>
				</center>
			
			
			
		
	</body>
</html>