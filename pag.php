<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
</head>
<body>
	<?php 
		// Tipos de variáveis - Objetos
		class Teste
		{
			function saudacao()
			{
				echo "Oi pessoal!";
			}
		}
		$obj = new Teste;
		$obj -> saudacao();
	?>
</body>
</html>