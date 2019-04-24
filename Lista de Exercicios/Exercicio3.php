<?php
header("Content-Type: text/html; charset=utf-8"); ?>

<html>
<head>
</head>
<body>


<?php

  $n3 = $_POST['n3'];
   $calc = 1;
    while ($n3 > 1){
        $calc *= $n3;
        $n3--;
   
    }
echo  "O resultado é $calc <br>";



?>
</body>
</html>