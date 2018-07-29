

<?php
//your code here
/*
OUTPUT YOUR HTML, for HTML blocks I like
to close PHP, output and re-open (?>HTML<?php), but it is up to you
*/
//more code here
$input = $_GET["location"];
//$command = escapeshellcmd('chooserestaurant.py .$input');
//$output = shell_exec($command);
//Make this python3 on server, python on regular computer
$output = exec("python3 chooserestaurant.py .$input");
echo "<pre>";
//print_r($output);
echo "</pre>";

?>

<!doctype html>
<html>
<head>
<style>
body {
	background-color: mintcream;
	font-family: Georgia;
	font-size: 20px;
}
#restaurant{
	background-color: mintcream;
	text-align: center;
}
</style>
<meta charset="UTF-8">
<title>Chowtime</title>
</head>

<body>
<div id = "restaurant">
<p id="restaurant"></p>
<script type="text/javascript">
// Turning Python output into JavaScript String
var output = "<?php echo $output ?>"; 
document.getElementById("restaurant").innerHTML = output;
</script>
</div>

</body>
</html>
