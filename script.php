<?php
//your code here
/*
OUTPUT YOUR HTML, for HTML blocks I like
to close PHP, output and re-open (?>HTML<?php), but it is up to you
*/
//more code here
$area = $_GET["location"];
$area = str_replace(' ', '', $area);;
$cost = $_GET["price"];
$type = $_GET["cuisine"];
$radius = $_GET["distance"];
//$command = escapeshellcmd('chooserestaurant.py .$input');
//$output = shell_exec($command);
//Make this python3 on server, python on regular computer
$output = exec("python3 chooserestaurant.py $area $cost $type $radius");
echo "<pre>";
//print_r($output);
echo "</pre>";
if (ctype_space($output) || $str == '') {
	$output = exec("python3 chooserestaurant.py $area $cost $type $radius");

}

?>

<!doctype html>
<html>
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
          <li class="nav-item">
            <a class="nav-link" href="./index.php">Chowtime Home<span class="sr-only">(current)</span></a>
          </li>
      </ul>
  </div>
</nav>
</div>

<meta charset="UTF-8">
<title>Chowtime</title>
</head>

<body>
<br>
<div id = "intro">

<center><script type="text/javascript">
// Turning Python output into JavaScript String
var output = "<?php echo $output ?>"; 
document.getElementById("intro").innerHTML = output;
document.getElementById("intro").style.fontSize = "x-large";
document.getElementById("intro").style.alignContent = "center";

</script></center>

</div>
<div id = "sec1">
	<script type="text/javascript">

	</script>

</div>

</body>
</html>
