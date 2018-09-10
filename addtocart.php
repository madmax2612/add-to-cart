<html>
<head>		
</head>
	<body>
	<?php
		
			session_start();
		$id=$_REQUEST['pid'];
			
			
			include("sql_helper.php");
			
			$res=$obj->select("*","product","pid=$id");
			
			
			if(count($res)>0)
				foreach($res as $row)
				{	
				    $id=$row["pid"];
					$desc=$row["product_desc"];
					$cost=$row["cost"];
				}
			else
				echo "No records found";
			
			if ( !isset($_SESSION["total"]) ) {

  $_SESSION["total"] = 0;

  for ($i=0; $i< count($id); $i++) {
   $_SESSION["qty"][$i] = 0;
   $_SESSION["amounts"][$i] = 0;
 }
}
if ( isset($_GET["add"]) )
   {
   $i = $_GET["add"];
   $qty = $_SESSION["qty"][$i] + 1;
   $_SESSION["amounts"][$i] = $cost[$i] * $qty;
   $_SESSION["cart"][$i] = $i;
   $_SESSION["qty"][$i] = $qty;
 }

		?>
		 
 <h2>List of All Products</h2>
 <table>
   <tr>
   <th>Product</th>
   <th width="10px">&nbsp;</th>
   <th>Amount</th>
   <th width="10px">&nbsp;</th>
   <th>Action</th>
   </tr>
		</body>
		</html>
		
		