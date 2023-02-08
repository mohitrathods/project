<?php
//fetch all entries from database
//display all entries
//set the delete and edit click


$products=[
['product_id'=> 1, 'name' => 'nokia 1100','sku'=>'nk01', 'cost'=>1000,'price' => 1100,'quantity'=>100,'description'=>'nokia phone', 'status'=> 'yes','color'=>'black','material'=>'hard' ],
['product_id'=> 2, 'name' => 'nokia 1200','sku'=>'nk02', 'cost'=>1100,'price' => 1200,'quantity'=>50,'description'=>'nokia phone', 'status'=> 'yes','color'=>'blue','material'=>'hard' ],
['product_id'=> 3, 'name' => 'samsung guru','sku'=>'sm01', 'cost'=>1100,'price' => 1300,'quantity'=>200,'description'=>'samsung phone', 'status'=> 'yes','color'=>'black','material'=>'sodft' ],
['product_id'=> 4, 'name' => 'samsung galaxy','sku'=>'sm02', 'cost'=>2000,'price' => 2200,'quantity'=>500,'description'=>'samsung phone', 'status'=> 'yes','color'=>'blue','material'=>'sodft' ],
['product_id'=> 5, 'name' => 'nokia 1300','sku'=>'nk03', 'cost'=>1400,'price' => 1500,'quantity'=>70,'description'=>'nokia phone', 'status'=> 'yes','color'=>'blue','material'=>'sodft' ],
]

?>	


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Product</title>
	<link rel="stylesheet" href="style.css">
	<style>
		*{
			margin: 0;
		}
		header{
			padding: 20px;
			background-color: #0E259A;
		}
		header a{
			margin-right: 30px;
			color: #ffffff;
			text-decoration: none;
		}
		header a:hover{
			border-bottom: 1px solid #ffffff;
		}
	</style>
</head>

<body>
<header>
		<a href="product.php">Product</a>
		<a href="/project/category/category.php">Category</a>
		<a href="/project/customer/customer.php">Customer</a>
		<a href="/project/vendor/vendor.php">Vendor</a>
		<a href="/project/salesman/salesman.php">Salesman</a>
		<a href="/project/shipping_method/shipping_method.php">Shipping Method</a>
		<a href="/project/payment_method/payment_method.php">Paymemt Method</a>
	</header>
	<div class="main">
		<div class="header">
			<div class="title">
				<label>MANAGE PRODUCT</label>
			</div>
			<div class="title_btn">
				<a href="productadd.php">ADD PRODUCT</a>
			</div>
		</div>
		<div class="body">
			<table border="2">
				<thead class="table_data">
					<td>Product_id</td>
					<td>Name</td>
					<td>SKU</td>
					<td>Cost</td>
					<td>Price</td>
					<td>Quantity</td>
					<td>Description</td>
					<td>Status</td>
					<td>Color</td>
					<td>Material</td>
					<td></td>
					<td></td>
				</thead>

				<tbody>
					<?php
					foreach($products as $product){
					?>
					<tr>
						<td><?php echo $product['product_id'] ?></td>
						<td><?php echo $product['name'] ?></td>
						<td><?php echo $product['sku'] ?></td>
						<td><?php echo $product['cost'] ?></td>
						<td><?php echo $product['price'] ?></td>
						<td><?php echo $product['quantity'] ?></td>
						<td><?php echo $product['description'] ?></td>
						<td><?php echo $product['status'] ?></td>
						<td><?php echo $product['color'] ?></td>
						<td><?php echo $product['material'] ?></td>
						<td><a href="productedit.php">Edit</a></td>
						<td><a href="product_delete.php">Delete</a></td>
					</tr>
					<?php
				}
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>

</html>