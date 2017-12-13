<?php
	$host = "localhost:3316";
	$usu = "root";
	$senha = "";
	$banco = "banco1";
	$mysqli = new mysqli($host, $usu, $senha, $banco);
	if($mysqli->connect_errno)
		echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;	
?>