<?php
header("Content-Type: text/html; charset=utf-8"); ?>

<html>
<head>
</head>
<body>


<?php

$n7a = 0;
$n7b = 0;
$n7a = $_POST["n7a"];
$n7b = $_POST["n7b"];


if ($n7a > $n7b) {
	echo "A maior que B";
}	
else 
	echo "B maior que a";




?>
</body>
</html>