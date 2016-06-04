<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<title>REalTime MEssage</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<body>
	<div class="container">
		<h2 class="text-center">Food Status</h2>
		<div class="jumbotron">
			<h2 id="lblCurrentMessage" class="text-center"></h2>
		</div>

		<script src="https://cdn.firebase.com/js/client/2.4.2/firebase.js"></script>
		<script>

			var rootRef= new Firebase('https://realtimetest123.firebaseio.com/'),
			currentMessageRef= rootRef.child('FoodStatus');

			currentMessageRef.on('value',function(snapshot){
				lblCurrentMessage.innerText= snapshot.val();
			})

		</script>

		<div id="chatBox">
			<iframe src="friendlychat/web-start/index.html" height="500">
  			<p>Your browser does not support iframes.</p>
			</iframe>
		</div>
	</div>
</body>
</html>