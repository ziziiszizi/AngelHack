<!DOCTYPE html>
<html>
	<head>
		<title>Foodiliver - Registration</title>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/mainCSS.css">
	</head>
	
	<body>
	<?php include("navTop/navTop.php") ?>
	<div class="jumbotron container" style="margin-top:100px;">
		<h2>Registration Form</h2>
		<br>
	 	<form role="form">
		<div class="form-group">
			<label for="name">Username: </label>
			<input type="name" class="form-control" id="username" placeholder="Enter name">
		</div>
		<div class="form-group">
			<label for="email">Email: </label>
			<input type="email" class="form-control" id="email" placeholder="Enter email">
		</div>
		<div class="form-group">
			<label for="pwd">Password: </label>
			<input type="password" class="form-control" id="pwd" placeholder="Enter password">
		</div>
		<div class="form-group">
			<label for="repwd">Confirm password: </label>
			<input type="repassword" class="form-control" id="repwd" placeholder="Retype password">
		</div>
		<div class="radiobox">
			<label for="type">Account: </label>
			<input type="radio" name="account">Deliverer</label>
			<input type="radio" name="account">Restaurant</label>
		</div>
		<br>
		<button type="submit" class="btn btn-default">Submit</button>
	  </form>
	</div>
	</body>

</html>