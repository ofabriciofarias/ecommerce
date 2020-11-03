<?php

//Command Injection, evitando


if($_SERVER["REQUEST_METHOD"] === 'POST'){

	//Tratar dados com system para evitar injections
	//Com proteção
	$cmd = escapeshellcmd($_POST["cmd"]);
	//Sem proteçåo abaixo
	//$cmd = $_POST["cmd"];

	var_dump($cmd);

	echo "<pre>";

	$comando = system($cmd, $retorno);

	echo "</pre>";

}


?>

<form method="post">
	
	<input type="text" name="cmd">
	<button type= "submit">Enviar</button>

</form>