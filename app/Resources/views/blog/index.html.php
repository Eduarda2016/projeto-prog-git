<!DOCTYPE html>
<html>
<head>
	<title>Faça seu login aqui!</title>
</head>
<body>
<form action="<?php echo $view['router']->path('home_page') ?>" method="POST">
	<label>Digite seu nome, por favor:</label>
	<input type="text" name="nome">
	<label>E uma senha segura:</label>
	<input type="password" name="senha">
	<input type="submit" name="enviar">
</form>
</body>
</html>