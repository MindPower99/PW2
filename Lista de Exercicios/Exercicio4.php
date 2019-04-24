<?php
header("Content-Type: text/html; charset=utf-8"); ?>

<html>
<head>
</head>
<body>


<?php

$n4 = 0;
$n4 = $_POST["n4"];

$i = 0;
$result = 0;
for ($i = 1;$i < 11; $i++) {
		$result = $i * $n4;
		echo "<br> $i x $n4 = $result  <br>";
}




?>
</body>
</html>