
<?php
// this file is called by the AJAX object
 
$pcode=$_REQUEST['pcode'];

//connect database
$con=mysqli_connect('localhost','root','') or die(mysqli_connect_error());
mysqli_select_db($con,"addtocart") or die(mysqli_error($con)) ;  


	$sql="select * from brandtype where pid='$pcode'";
	
	$res=mysqli_query($con,$sql) or die(mysqli_error($con));
	
	if(mysqli_num_rows($res)>0)
		{	
			
            echo '<tr>
<td>Brand TYPE</td>';
			echo '<select id="brands" name="brand">';
			while($row=mysqli_fetch_assoc($res))
			{
				echo'<option value="'.$row['bid'].'">'.$row['name'].'</option>'; 
				
			} 
		echo '</select>';
		}
		else
		{
			echo "<option>Wrong Choice</option>";
		}

?>