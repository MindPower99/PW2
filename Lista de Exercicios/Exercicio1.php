<?php
header("Content-Type: text/html; charset=utf-8"); ?>

<html>
<head>
</head>
<body>


<?php

$n1 = 0;

$n1 = $_POST["n1"];

if ($n1 > 0) {
	echo "Valor Positivo";
}	

else if ($n1 < 0) {
	echo "Valor Negativo";
}

else  {
	echo "Igual a zero";
}




?>
</body>
</html>