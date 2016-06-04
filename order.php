<!DOCTYPE html>

<html>
<head>
  <title>Food Order</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/mainCSS.css">
</head>

<body>
	<?php include("navTop/navMember.php") ?>
	<?php include("mapjs/mapjs.php")?>
	
	<div class="container col-md-4" style="margin-top:50px;">
		<h2>Restaurant</h2>
		<p>Pick any one of the restaurants available</p>
		<p>*Markers indicate restaurants with available deliverer</p>
		<form>
		<input type="radio">Restaurant A</input>
		<input type="radio">Restaurant B</input>
		<input type="radio">Restaurant C</input>
		<input type="radio">Restaurant D</input>
		<a href="menu.php">PROCEED</a>
		</form>
	</div>
</body>

</html>