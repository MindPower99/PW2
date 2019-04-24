<?php
header("Content-Type: text/html; charset=utf-8"); ?>

<html>
<head>
</head>
<body>


<?php

$n5 = 0;
$n5 = $_POST["n5"];

if ($n5 == 0) {
	echo "igual a zero";
}	
else if (($n5 % 2) == 0) {
	echo "numero par blz";
}
else
	echo "numero impar";




?>
</body>
</html>