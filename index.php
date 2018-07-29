<!DOCTYPE html>
<html lang = "en">
<style>
body{
	background-color: mintcream;
	font-family: Helvetica;
}
#intro{
	background-color: mintcream;
	font-family: Georgia;
	font-size: 20px;
}
#test{
	background-color: silver;
}
</style>
<div id = "header">
<head>


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
		<input type="text" name="location" id = "location" value="New York" >
		<br>
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
