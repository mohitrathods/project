<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Product</title>
	<link rel="stylesheet" href="styleform.css">
</head>

<body>
	<form action="product_insert.php" method="post">
	<div class="main">
		<div class="header">
			<div class="title">
				<label>ADD PRODUCT</label>
			</div>
			<div class="title_btn">
				<a href="product.php">Cancel</a>
				<input type="submit" >
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
						<input type="text" name="name"></input>
					</td>
				</tr>
				<tr>
					<td>
						<label>SKU:</label>
					</td>
					<td class="color">
						<input type="text" name="sku"></input>
					</td>
				</tr>
				<tr>
					<td>
						<label>Cost:</label>
					</td>
					<td>
						<input type="number" name="cost"></input>
					</td>
				</tr>
				<tr>
					<td>
						<label>Price:</label>
					</td>
					<td class="color">
						<input type="number" name="price"></input>
					</td>
				</tr>
				<tr>
					<td>
						<label>Quantity:</label>
					</td>
					<td>
						<input type="number" name="quantity"></input>
					</td>
				</tr>
				<tr>
					<td>
						<label>Description:</label>
					</td>
					<td  class="color">
					<input type="text" name="description"></input>

						<!-- <textarea type="text" name="description"></textarea> -->
					</td>
				</tr>
				<tr>
					<td>
						<label>Status:</label>
					</td>
					<td >
						<select name="status">
							<option>Please Select</option>
							<option value="1">Yes</option>
							<option value="02">No</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label>Color:</label>
					</td>
					<td class="color ">
						<select name="color">
							<option>Please Select</option>
							<option>Black</option>
							<option>Blue</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label>Material:</label>
					</td>
					<td>
						<select name="material">
							<option>Please Select</option>
							<option>Hard</option>
							<option>Soft</option>
						</select>
					</td>
				</tr>
			</table>
		</div>
	</div>
</form>
</body>

</html>