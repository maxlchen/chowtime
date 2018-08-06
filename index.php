<!DOCTYPE html>
<html lang = "en">

<div id = "header">
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="./style/style.css">
<link rel="icon" href="favicon.ico"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<div class="container fixed-top">
	<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      	<a class="navbar-brand" href="http://intellegostudio.com/index.php">intellegoStudio</a>
      	<div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="./index.php">Chowtime Home<span class="sr-only">(current)</span></a>
          </li>
      	</ul>
  		</div>
	</nav>
</div>
<title>Chowtime</title>

</head>
</div>
<center>
<div id = "intro">
<font color = "black"><h1>Chowtime</h1>
</div>
<body>

<p id = "first">
	<div style="display: none;">Country: <span id="country"></span></div>
    <div style="display: none;">State: <span id="state"></span></div>
    <div style="display: none;">City: <span id="city"></span></div>
    <div style="display: none;">Postal: <span id="postal"></span></div>
    <div style="display: none;">Latitude: <span id="latitude"></span></div>
    <div style="display: none;">Longitude: <span id="longitude"></span></div>
    <div style="display: none;">IP address: <span id="ipv4"></span></div>
	
	<form action = "script.php" method = "get">
		<input type="hidden" name = "submitted">
		Location:

		<input type="text" name="location" id = "location" value="Wait for location or change to your choice" >
		<br>
		Maximum Distance:<br>1mi<input type="range" name="distance" id = "distance" min="1" max="25">25mi
		<br>
		<select name = "cuisine" id = "cuisine">
			<option value = "food">All Food</option>
			<option value = "acaibowls">Acai Bowls</option>
			<option value = "chinese">Chinese</option>
			<option value = "french">French</option>
			<option value = "german">German</option>
			<option value = "greek">Greek</option>
			<option value = "italian">Italian</option>
			<option value = "japanese">Japanese</option>
			<option value = "korean">Korean</option>
			<option value = "mediterranean">Mediterranean</option>
			<option value = "mexican">Mexican</option>
			<option value = "mideastern">Middle Eastern</option>
			<option value = "soup">Soup</option>
			<option value = "southern">Southern</option>
			<option value = "steak">Steakhouses</option>
			<option value = "taiwanese">Taiwanese</option>
			<option value = "tapasmallplates">Tapas/Small Plates</option>
		</select>
		<br>
		Price Range:
		<input type="radio" name ="price" id = "price" value = "0" checked>Any <input type="radio" name ="price" id = "price" value = "1" >$ <input type="radio" name ="price" id = "price" value = "2" >$$ <input type="radio" name ="price" id = "price" value = "3" >$$$ <input type="radio" name ="price" id = "price" value = "4" >$$$$  <br>

		<button type = "submit">Chowtime!</button>
	</form>
</p>

</body>
<script>

    var country = document.getElementById('country');
    var state = document.getElementById('state');
    var city = document.getElementById('city');
    var postal = document.getElementById('postal');
    var latitude = document.getElementById('latitude');
    var longitude = document.getElementById('longitude');
    var ip = document.getElementById('ipv4');

    function callback(data)
    {
        country.innerHTML = data.country_name;
        state.innerHTML = data.state;
        city.innerHTML = data.city;
        postal.innerHTML = data.postal;
        latitude.innerHTML = data.latitude;
        longitude.innerHTML = data.longitude;
        ip.innerHTML = data.IPv4;
        document.getElementById("location").value = data.city
    }

    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'https://geoip-db.com/json/geoip.php?jsonp=callback';
    var h = document.getElementsByTagName('script')[0];
    h.parentNode.insertBefore(script, h);

</script>

<footer>
</footer>
</html>
