<?php

include 'Database.php';
include 'Contacto.php';

new Contacto ();
?>

<html>
<head>
	<title>Aprendendo PHP Orientado a Objecto</title>
</head>
<body>
	<h1>Aprendendo PHP OO</h1>
<form method="post">

Nome: <input type="text" name="nome" required><br>
Mensagem:<input type="text" name="mensagem" required><br>
<input type="submit" value ="Cadastrar"><br>
</form>
</body>
</html>