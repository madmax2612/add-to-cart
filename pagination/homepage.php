<html>
	<head>
		<title>
			Pagination
		</title>
		
		<link rel='stylesheet' href='pagination.css'>
	</head>	
	
	<body>
		<center><h1>Welcome To Website</h1></center>
		<?php
		
		    session_start();
			if(isset($_SESSION['aid']))
			{
			?>
			<center><a href="admin.php" class="top">Insert More Products</a>&nbsp;&nbsp;&nbsp;
			<a href="logout.php" class="top">Logout</a></center>
		
		<?php
			}
			
			else
			{
				?>
				<center><a href="homepage.php?page=1" class="top">Home</a>&nbsp;&nbsp;&nbsp;
				<a href="alogin.html" class="top">Admin Panel</a>&nbsp;&nbsp;&nbsp;
				<a href="alogout.php" class="top">Log Out</a></center>
				<?php
			}
			include("sql_helper.php");
			
			if(!isset($_GET['page']))
			{
				$pageno=1;
			}
			else
			{
				$pageno=$_GET['page'];
			}
			$result=5;
			
			$no_rows=$obj->select_count("*","product","1=1");
			
			//echo $no_rows;
		
			$totalPages=ceil($no_rows/$result);
			//echo $totalPages;
			
			$offset=($pageno-1)*$result;
			
			//echo $offset;
			
			$res=$obj->select_limit("*","product","$offset,$result");
			
			if(count($res)>0)
			foreach($res as $row)
			{	
			
			?>
				<center><table>
				<tr>
				<td>
				
				<a href="description.php?pid=<?php echo $row['pid'] ?>&pageid=<?php echo $pageno ?>">
				<img src="images/<?php echo $row['upload_image'] ?>" style="height:300px; width:200px"/></img></a>
				</td>
				
				<td></td>
				<td>
				<a href="description.php?pid=<?php echo $row['pid'] ?>&pageid=<?php echo $pageno ?>"><?php echo $row['product_name']?></a>
				<br><br>
				<?php echo $row['cost'] ?></td><br>
				
				</tr>
				</table>
				</center>
			<?php
			}
			else
			echo "No records found";
		
			
		    echo "<br><center>";
			
			if($pageno!=1)
			{
				echo "<a href='homepage.php?page=".($pageno-1)."'><<</a>&nbsp;&nbsp;&nbsp;";
			}
			
			for($i=1;$i<=$totalPages;$i++)
			{
				if($i==$pageno)
				{
					echo "<a href='homepage.php?page=".$i."'><font size='5'>".$i."</font></a>&nbsp;&nbsp;&nbsp;";
				}
				else
				{
					echo "<a href='homepage.php?page=".$i."'>".$i."</a>&nbsp;&nbsp;&nbsp;";
				}
			}
			
			if($pageno<$totalPages)
			{
				echo "<a href='homepage.php?page=".($pageno+1)."'>>></a>";
			}
			echo "</center>";
		?>
		
	</body>
</html>