<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<title>Deliverer</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/mainCSS.css">
</head>

<body onload="autoReady()">
	<?php include("navTop/navMember.php") ?>
	<div class="container" style="margin-top:50px;">
		<h2 class="text-center">Food Status</h2>
		<div class="jumbotron">
			<h2 id="lblCurrentMessage" class="text-center"><h2>
		</div>

			<div class="col-sm-12">
    			<div class="text-center">
     				 <button class="btn btn-primary" id="btnPickUp" disabled>Pickup</button>
   				</div>
 			</div>
		</div>

		<script src="https://cdn.firebase.com/js/client/2.4.2/firebase.js"></script>
		<script>
		

		var rootRef= new Firebase('https://realtimetest123.firebaseio.com/'),
		currentMessageRef= rootRef.child('FoodStatus'),
		btnPickUp = document.getElementById('btnPickUp');


		btnPickUp.addEventListener('click',function (){
			currentMessageRef.set("On The Way");
		});

		currentMessageRef.on('value',function(snapshot){
			lblCurrentMessage.innerText= snapshot.val();
		})

		function autoReady(){
			setTimeout(function(){
				document.getElementById("lblCurrentMessage").innerText='Ready';
			 	document.getElementById("btnPickUp").disabled= false;
				currentMessageRef.set("Ready");
				 }
			 	, 3000);

		}

		</script>
		<div id="chatBox" class="col-sm-12" style="margin-top:15px;margin-left:50px;">
			<div class="text-center">
			<iframe src="friendlychat/web-start/index.html" height="500" width="800">
  			<p>Your browser does not support iframes.</p>
			</iframe>
		</div>
		</div>
</body>
</html>