<?php
header("Content-Type: text/html; charset=utf-8"); ?>

<html>
<head>
</head>
<body>


<?php

$n8a = 0;
$n8b = 0;
$n8c = 0;
$n8a = $_POST["n8a"];
$n8b = $_POST["n8b"];
$n8c = $_POST["n8c"];

$notas[0] = $n8a;
$notas[1] = $n8b;
$notas[2] = $n8c;

$media = ($notas[0] + $notas[1] + $notas[2]) / 3;
if ($media >= '6') {
	echo "Aprovado parabéns";
}	
else  {
	echo "Desaprovado aff";
}



?>
</body>
</html>