<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "addtocart");


if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="addcart.php"</script>';
			}
		}
	}
}

?>
<html>
<head>
<style>
table,th,td{
	border:1px solid black;
}
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

</style></head>
	
	<body>
	 <div id="menu" style="padding-left:20px">
   <ul>
   <li><a href="ugallary.php">Home</a></li>
   <li><a href="user login.html">Log In</a></li>
    <li><a href="logout.php">Log Out</a></li>
  <br><br><hr>
  </div>
		
			<?php
				$query = "SELECT * FROM product ORDER BY pid ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="addcart.php?action=add&id=<?php echo $row["pid"]; ?>">
					<div style="border:1px solid #333; border-radius:5px; padding:16px;float:left" align="center">
						
<img src="images/<?php echo $row["upload_image"]; ?>" class="img-responsive" style="width:100px;height:150px;"/><br />
						<h4 class="text-info"><?php echo $row["product_name"]; ?></h4>

						<h4 class="text-danger">Rs. <?php echo $row["cost"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["product_name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["cost"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
			<h1 style="margin-left:600px">Order Details</h1>
			<div class="table-responsive">
				<table class="table table-bordered" style="border:1px solid black">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td ><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>Rs. <?php echo $values["item_price"]; ?></td>
						<td>Rs. <?php echo number_format($values["item_quantity"] * $values["item_price"]);?></td>
						<td><a href="addcart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">Rs.<?php echo number_format($total,2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
		</div>
	</div>
	<br />
	<button type="button" id="mybtn" style="color:white;background-color:pink;color:black;height:40px;width:100px;margin-left:600px"><a href="payment.php">Proceed To Payment</a></button>
	</body>
</html>

