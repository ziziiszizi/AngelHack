<!DOCTYPE html>

<html>
<head>
  <title>Foodiliver - Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/mainCSS.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50" style="position: relative;">
	<?php include("navTop/navTop.php") ?>

	<div id="home" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
		  <li data-target="#home" data-slide-to="0" class="active"></li>
		  <li data-target="#home" data-slide-to="1"></li>
		  <li data-target="#home" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="container carousel-inner" role="listbox">
			<div class="item active">
				<img src="image/citem1.jpg" alt="lazy">
				<div class="carousel-caption">
					<h1>Feeling lazy?</h1>
				</div>      
		` 	</div>

			<div class="item">
				<img src="image/citem2.jpg" alt="think">
				<div class="carousel-caption">
					<h1>But feel like eating outside?</h3>
				</div>      
			</div>
			
			<div class="item">
				<div style="right: 50%">
					<h1>Don't Worry</h1>
					<h1>We "tapao" for you</h1> 
				</div>
			</div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">			  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		  <span class="sr-only">Next</span>
		</a>
	</div>
	
	<div id="about">
	</div>
	
	<div id="howto">
	</div>
	
	<div id="contact">
	</div>
	
	<div id="account">
	</div>
</body>
</html>