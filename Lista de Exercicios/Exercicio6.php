<?php
header("Content-Type: text/html; charset=utf-8"); ?>

<html>
<head>
</head>
<body>


<?php

$n6a = 0;
$n6b = 0;
$n6a = $_POST["n6a"];
$n6b = $_POST["n6b"];


if ($n6a > $n6b) {
	echo "$n6b $n6a";
}	
else 
	echo "$n6a $n6b";




?>
</body>
</html>