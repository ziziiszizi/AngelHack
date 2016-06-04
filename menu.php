<!DOCTYPE html>
<html>
	<head>
		<title>Foodiliver - Menu</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/mainCSS.css">
	</head>
	
	<body>
		<?php include("navTop/navMember.php") ?>
		<div style="margin-top:50px;">
		<h2>Menu - Restaurant A</h2>
		<table>
			<tr>
				<th colspan = 2>Food</th>
				<th>Price</th>
				<th>Quantity</th>
				<th></th>
			</tr>
			<tr>
				<td><img src="https://storybookstorage.s3.amazonaws.com/items/images/000/134/326/original/english.jpg?1442235955" width="180px" height="120px"></td>
				<td>Nasi Lemak</td>
				<td>RM6</td>
				<td>Qty: 
					<select name="qty">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>   
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
				</td>
				<td><button type="submit" value="add" onclick="myFunction()">Add to cart</button></td>
			</tr>
			</form>
			<tr>
				<td><img src="https://sumptuousblog.files.wordpress.com/2011/03/img_4333.jpg" width="180px" height="120px"></td>
				<td>Hokkien Mee</td>
				<td>RM7</td>
				<td>Qty: 
					<select name="qty">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>   
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
				</td>
				<td><button type="submit" value="add" onclick="myFunction()">Add to cart</button></td>
			</tr>

			<tr>
				<td><img src="http://steamykitchen.com/wp-content/uploads/2009/08/hainanese-chicken-86.jpg" width="180px" height="120px"></td>
				<td>Chicken Rice</td>
				<td>RM5</td>
				<td>Qty: 
					<select name="qty">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>   
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
				</td>
				<td><button type="submit" value="add" onclick="myFunction()">Add to cart</button></td>
			</tr>
			
			<tr>
				<td><img src="http://www.friedchillies.com/images/gallery/KT-b.jpg" width="180px" height="120px"></td>
				<td>Char Kway Teow</td>
				<td>RM5</td>
				<td>Qty: 
					<select name="qty">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>   
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
				</td>
				<td><button type="submit" value="add" onclick="myFunction()">Add to cart</button></td>
			</tr>			
		
		</table>
		<div style="text-align: center;">
			<form action="cart.php">
				<button style="height:35px;width:150px;position:right">Go to your cart</button>
			</form>
		</div>
	</div>
		
		<script>
			function myFunction() {
				alert("Added Successfully!");
			}
		</script>
		
	</body>

</html>