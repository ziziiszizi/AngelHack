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
			<div class="item active" align="center" style="margin:auto">
					<h1 style="margin-top:100px">Feeling lazy?</h1> 
					<img src="image/citem1.jpg" style="width:600px">
		` 	</div>

			<div class="item" style="margin:auto">
				<div align="center">
					<h1 style="margin-top:100px">But feel like eating outside?</h3>
					<img src="image/citem2.jpg" >
				</div>      
			</div>
			
			<div class="item" style="margin:auto">
				<div align="center">
					<h1 style="margin-top:100px">Don't Worry</h1>
					<h1>We "tapao" for you</h1> 
					<img src="image/citem3.jpg">
					<button type="button" class="btn btn-success">Order Now!</button>
				</div>
			</div>
		</div>
		
	</div>
	
	<div id="about">
	</div>
	
	<div id="howto">
	</div>
	
	<div id="contact" class="text-center">
	  <h2>THE DEVELOPERS</h2>
	  <p><em>We love to hear from you!</em></p>
	  <p>If you have any feedback to us, feel free to contact us</p>
	  <p>We welcome your feedback so that we can provide a better platform for you</p>
	  <br>
	  <div class="row">
		<div class="col-sm-4">
		  <h3 class="text-center"><strong>Dr. Lam Chen Riang</strong></h3><br>
		  <a href="#demo" data-toggle="collapse">
			<img src="image/dev1.jpg" class="img-circle person" alt="lam" width="255" height="255">
		  </a>
		  <div id="demo" class="collapse">
			<h4>Main Developer</h4>
			<h4>Best programmer in the world</h4>
			<h4>lamchenriang@gmail.com</h4>
		  </div>
		</div>
		<div class="col-sm-4">
		  <h3 class="text-center"><strong>Ryan Lim Weng Thai</strong></h3><br>
		  <a href="#demo2" data-toggle="collapse">
			<img src="image/dev2.jpg" class="img-circle person" alt="ryan" width="255" height="255">
		  </a>
		  <div id="demo2" class="collapse">
			<h4>Co-Developer</h4>
			<h4>Second programmer in the world</h4>
			<h4>eloelo@gmail.com</h4>
		  </div>
		</div>
		<div class="col-sm-4">
		  <h3 class="text-center"><strong>Tristan Tan Yao Hui</strong></h3><br>
		  <a href="#demo3" data-toggle="collapse">
			<img src="image/dev3.jpg" class="img-circle person" alt="hui" width="255" height="255">
		  </a>
		  <div id="demo3" class="collapse">
			<h4>Co-developer</h4>
			<h4>Third best programmer in the world</h4>
			<h4>ttyh@yahoo.com</h4>
		  </div>
		</div>
	  </div>
	</div>
	
	<div id="joinus">
	<img src="image/joinus.jpg" alt="joinus" width="100%" height="auto"><br>
	<div class="col-md-6">
	<h1>Be part of our Beta Tester! </h1>
	</div>
	<div class="col-md-6">
	<button style="background-color:green; font-size:36px;">Join Us Now!</button>
	</div>
	</div>
</body>
</html>