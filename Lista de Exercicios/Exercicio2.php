<?php
header("Content-Type: text/html; charset=utf-8"); ?>

<html>
<head>
</head>
<body>


<?php

$n2 = 0;
$n2 = $_POST["n2"];

$i = 0;
$result = 0;
for ($i = 1;$i < 11; $i++) {
		$result = $i * $n2;
		echo "<br> $i x $n2 = $result  <br>";
}




?>
</body>
</html>