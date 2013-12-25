<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
</head>
<body>
	<?php 
		// Escopo de variáveis PHP
		$num = 5000;
		function testa_escopo1()
		{
			// invoca a variável global no array GLOBALS
			$GLOBALS["num"] += 5;
			echo $GLOBALS["num"] . "<br/>";
		}
		echo $num . "<br/>";
		testa_escopo1();
	?>
</body>
</html>