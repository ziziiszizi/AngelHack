<!DOCTYPE html>
<html> 
<head> 
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
    <title>Deliverers Map</title> 
    <script src="http://maps.google.com/maps/api/js?" type="text/javascript"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/mainCSS.css">
</head> 
<body>
	<div id="map" style="width: 900px; height: 600px; margin-top:50px;" class="col-md-8">
	
	<script type="text/javascript">

	var locations = [
      ['User1', 3.1424, 101.7096],
	  ['User2', 3.1426, 101.7097],
	  ['User3', 3.1425, 101.7096],
	  ['User4', 3.1424, 101.7094],
	  ['User5', 3.1424, 101.7096],
	  ['User6', 3.1427, 101.7093],
	  ['User7', 3.1427, 101.7092],
	  ['User8', 3.1426, 101.7093],
      
    ];
	// coordinates of the deliverer
	
	function shuffleArray(array){
		for (var i = array.length -1; i >0; i--){
			var j = Math.floor(Math.random() * (i + 1));
			var temp = array[i];
			array[i] = array[j];
			array[j] = temp;
		}
		return array;
	}
	
	var newLocations = shuffleArray(locations);
	
	var j = (Math.floor(Math.random() * 9));
	
	if(j < 3){
		j = 3;
	}
	
    var image = "http://s33.postimg.org/843a0gmen/image.png"; 
	// images of the marker
	
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 20,
      center: new google.maps.LatLng(3.1426, 101.7096),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });
	
	var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < j; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(newLocations[i][1], newLocations[i][2]),
        map: map,
        icon: image
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(newLocations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
	</script>
  
	</div>
	

</body>
</html>