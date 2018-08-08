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
//$output = passthru("python chooserestaurant.py $area $cost $type $radius");

//passthru vs exe
echo "<pre>";
//print_r($output);
echo "</pre>";
//if (ctype_space($output) || $str == '') {
$output = shell_exec("python chooserestaurant.py $area $cost $type $radius");
$namepos = strpos($output, "\n");
$name = substr($output, 0, $namepos);
$rest = substr($output, $namepos + 1);
$idpos = strpos($rest, "\n");
$id = substr($rest, 0, $idpos);
$rest = substr($rest, $idpos + 1);
$addresspos = strpos($rest, "\n");
$address = substr($rest, 0, $addresspos);
$rest = substr($rest, $addresspos + 1);
$urlpos = strpos($rest, "\n");
$url = substr($rest, 0, $urlpos);
$rest = substr($rest, $urlpos + 1);
$imgpos = strpos($rest, "\n");
$img = substr($rest, 0, $imgpos);
$rest = substr($rest, $imgpos + 1);
//echo $output;
//}
//printf($output)
//echo $output;

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
var output = "<?php echo $name?>"; 
output = output.link("<?php echo $url?>");
console.log(output);
//document.getElementById("intro").innerHTML = output;
document.getElementById("intro").style.fontSize = "x-large";
document.getElementById("intro").style.textAlign = "center";
document.getElementById("intro").style.fontFamily = "Helvetica";
document.getElementById("intro").innerHTML = output;

</script></center>

</div>
<center><div id = "image" >
	<script type="text/javascript">
		//var output = "<?php echo $url?>"; 
	document.getElementById("image").style.alignText = "center";
		document.getElementById("image").innerHTML = " ";

/*
document.getElementById("sec1").style.fontSize = "medium";
document.getElementById("sec1").style.textAlign = "center";
document.getElementById("sec1").style.fontFamily = "Helvetica";
document.getElementById("sec1").innerHTML = "URL: " + output;*/
	var img = document.createElement('img');
	img.src = "<?php echo $img?>";
	img.width = 100;
	img.height = 100;

document.getElementById('image').appendChild(img)

	</script>

</div></center>	
<div id = "sec2">
	<script type="text/javascript">
		var output = "<?php echo $address?>"; 
console.log(output);
document.getElementById("sec2").innerHTML = "ID:" + output;
document.getElementById("sec2").style.fontSize = "large";
document.getElementById("sec2").style.textAlign = "center";
document.getElementById("sec2").style.fontFamily = "Helvetica";
document.getElementById("sec2").innerHTML = output;
	</script>
</div>

</body>
</html>
