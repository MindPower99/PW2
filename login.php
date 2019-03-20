<?php  header("Content-Type: text/html; charset=utf-8"); ?> 
<html>
<body>
<?php
$login = $_POST['TxtLogin'];
$senha = $_POST['TxtSenha'];

if($login == 'admin123' && $senha == 'admin123') {
	echo "Acesso Concedido, bem vindo !";
}
else {
	echo "Usuário ou senha incorretos";
}
?>
</body>
</html>