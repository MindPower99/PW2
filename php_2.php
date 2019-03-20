<?php header("Content-Type: text/html; charset=utf-8"); ?>

<html>
<head>
</head>
<body>

<img src="imagens/logo.jpg">

<?php
$imagem = $_FILES["imagem"];

print_r($imagem);

echo "Obrigado pelo cadastro !<br> Confira seus dados abaixo:<br>
".$_POST['nome']."<br>".$_POST['end']."<br>"
.$_POST['n']."<br>".$_POST['email']." - "
.$_POST['cep']." - "
.$_POST['uf']. "<br>"
.$_POST['pais']. "<br>"
.$_POST['email']. "<br>"
.$_POST['rg']. "<br>"
.$_POST['cpf']. "<br>"
.$_POST['telefone']. "<br>"
.$_POST['time']. "<br>"
;

//echo "O meu nome e ".$_POST['nome']. ",tenho ".$_POST['end']. " anos e gosto de carros da marca ".$_POST['marca'];
?>
</body>
</html>