<html>
<head>
<style type="text/css">
#menu ul{
    list-style: none;
}

#menu ul li{
	background-color: orange;
	width: 150px;
	border: 1px solid white;
	height: 50px;
	line-height: 50px;
	text-align: center;
	float: left;
	font-size: 18px;
	color:white;
}

#menu ul li:hover{
	background-color: black;
}

#menu ul li:hover > ul{
	display: block;
}

#menu ul ul{
	display: none;
}
#menu ul li a{
	color:white;
}
#menu{
font-size:30px;;

background-repeat:no-repeat;
background-width:100%;
color:gray;
display:block;

}
body{
background-image:url("images/bg1.jpg");
}
h3{font-family: Calibri; font-size: 22pt; font-style: normal; font-weight: bold; color:slateblue;
text-align: center; text-decoration: underline }
table{font-family: Calibri; color:white; font-size: 11pt; font-style: normal;
text-align:; background-color: SlateBlue; border-collapse: collapse; border: 2px solid navy}
table.inner{border: 0px}
</style>
<script type="text/javascript">
		
		function show_btype(value)
		{	
			xmlhttp=xmlhttp=new XMLHttpRequest();
			
			xmlhttp.onreadystatechange=function()
			{	
				if(xmlhttp.readyState==4)
				{	
				document.getElementById('brand').innerHTML=xmlhttp.responseText;
				}
			}
			xmlhttp.open("GET","get_brand.php?pcode="+value,true);
			//the file get_city.php is their in this folder itself
			
			xmlhttp.send();
		}

	</script>
</head>
<body>

	 <div id="menu" style="padding-left:20px">
   <ul>
   <li><a href="addproduct.php">Home</a></li>
   <li><a href="logoutadmin.php">Log out</a></li>
 <br><br> <hr>

<form name="registration" action = "insertproduct.php"  method="POST" enctype="multipart/form-data">
 
<table align="center" cellpadding = "10">
 
<!----- product Name ---------------------------------------------------------->
<tr>
<td> PRODUCT NAME</td>
<td><input type="text" name="name"/>

</td>
</tr>
 
<!----- city Name ---------------------------------------------------------->

 
<!----- product type -------------------------------------------------------->
<tr>
<td>PRODUCT TYPE</td>
 
<td>

<?php
		$con=mysqli_connect('localhost','root','') or die(mysqli_connect_error());
		mysqli_select_db($con,"addtocart") or die(mysqli_error($con)) ;  
		
	
		$sql="select * from producttype";
		$res=mysqli_query($con,$sql) or die(mysqli_error($con));
		if(mysqli_num_rows($res)>0)
		{	
		echo '<select name="ptype" id="ptype" onchange="show_btype(this.value)">';
		
		while($row=mysqli_fetch_assoc($res))
			{
			echo '<option value="'.$row['pid'].'">' .$row['name'].'</option>';
			}
			echo '</select>';
		}
?>
	

	<!--city dropdown-->
	<div id="brand" name="brand"></div><br />
	<div id="show_name"></div>  <!-- this div is optional -->
	
	
</td>
</tr>
</td>
</tr>
 

 

<tr>
<td>UPLOAD IMAGE</td>
<td>
<input type="file" name="file"  />

</td>
</tr>
 

<tr>
<td>PRODUCT DESC</td>
<td><textarea rows="5" cols="30" name="desc"></textarea></td>

</tr>
 

<tr>
<td>COST <br /><br /><br /></td>
<td><input type="text" name="cost" id="cost" /></td>
</tr>
 


 
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">


<input type = "submit" value = "Add Product">
<input type="reset" value="Reset">
</td>
</tr>
</table>
 
</form>