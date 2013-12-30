<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
</head>
<body>
	<?php 
	// Operadores 
		// unários
			$contador = 0;
			echo $contador++; // mostra 0 e incrementa 0 -> 1
			echo ++$contador; // incrementa 1 -> 2 (depois mostra)
			echo --$contador; // decrementa 2 - 1 (depois mostra)
			echo $contador--; // mostra 1 e decrementa 1 -> 0
			
			// saida = 02110
			
			echo -$contador;
	?>
</body>
</html>