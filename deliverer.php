<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<title>REalTime MEssage</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<body onload="autoReady()">
	<div class="container">
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
			 	, 1000);

		}

		</script>
		<div id="chatBox">
			<iframe src="friendlychat/web-start/index.html" height="500">
  			<p>Your browser does not support iframes.</p>
			</iframe>
		</div>
</body>
</html>