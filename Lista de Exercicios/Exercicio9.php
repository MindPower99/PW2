<?php
header("Content-Type: text/html; charset=utf-8"); ?>

<html>
<head>
</head>
<body>


<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if ($idade >= 18) {
	echo "$nome é maior de 18 e tem $idade anos";
}

else 
	echo "$nome não é maior de 18 e tem $idade anos";


?>
</body>
</html>