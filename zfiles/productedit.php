<?php
//collect the id
//validate the id
// print_r($_POST);

$product =['product_id'=> 2, 'name' => 'nokia 1200','sku'=>'nk02', 'cost'=>1100,'price' => 1200,'quantity'=>50,'description'=>'nokia phone', 'status'=> 'yes','color'=>'blue','material'=>'hard' ];

?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Product</title>
	<link rel="stylesheet" href="styleform.css">
</head>

<body>
	<form action="product_insert.php" method="post">
		<div class="main">
			<div class="header">
				<div class="title">
					<label>EDIT PRODUCT</label>
				</div>
				<div class="title_btn">
					<a href="product.php">Cancel</a>
					<input type="submit">
				</div>
			</div>
			<div class="body">
				<table border="2">
					<thead>
						<td class="table_title" colspan="2">
							PRODUCT INFORMATION
						</td>
					</thead>

					<tr>
						<td>
							<label>Name:</label>
						</td>
						<td>
							<input type="text" value="<?php echo $product['name']?>"></input>
						</td>
					</tr>
					<tr>
						<td>
							<label>SKU:</label>
						</td>
						<td class="color">
							<input type="text" value="<?php echo $product['sku']?>"></input>
						</td>
					</tr>
					<tr>
						<td>
							<label>Cost:</label>
						</td>
						<td>
							<input type="number" value="<?php echo $product['cost']?>"></input>
						</td>
					</tr>
					<tr>
						<td>
							<label>Price:</label>
						</td>
						<td class="color">
							<input type="number" value="<?php echo $product['price']?>" />
						</td>
					</tr>

					<tr>
						<td>
							<label>Quantity:</label>
						</td>
						<td>
							<input type="text" value="<?php echo $product['quantity']?>"></input>
						</td>
					</tr>
					<tr>
						<td>
							<label>Description:</label>
						</td>
						<td class="color">
							<input type="text" value="<?php echo $product['description']?>"></input>

							<!-- <textarea type="text" value="<?php echo $product['description']?>"></textarea> -->
						</td>
					</tr>
					<tr>
						<td>
							<label>Status:</label>
						</td>
						<td>
							<input type="text" value="<?php echo $product['status']?>"></input>
						</td>
					</tr>
					<tr>
						<td>
							<label>Color:</label>
						</td>
						<td>
							<input type="text" value="<?php echo $product['color']?>"></input>
						</td>
					</tr>
					<tr>
						<td>
							<label>Material:</label>
						</td>
						<td>
							<input type="text" value="<?php echo $product['material']?>"></input>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</form>
</body>

</html>