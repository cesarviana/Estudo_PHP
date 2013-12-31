<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
</head>
<body>
	<?php 
	// Operadores 
		// Ternário
		$frequencia = 0.74;
		$nota = 7;
		
		$nota = $frequencia >= 0.75 ? $nota + 1 : $nota - 1;
		
		echo $nota;
	?>
</body>
</html>