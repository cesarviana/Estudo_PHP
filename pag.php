<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
</head>
<body>
	<?php 
	// Operadores 
		// binários
			// ~ inverte os bits
			// & E
			// | Ou
			// ^ Ou exclusivo
			// op1 >> n Desloca op1 n bits à direita
			// op1 << n Desloca op1 n bits à esquerda
			
			$a = 10;
			$a = $a >> 1;
			echo $a;
			echo $a == 5 & $a != 4;
	?>
</body>
</html>