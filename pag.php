<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
</head>
<body>
	<?php 
		// Tipos de variáveis - arrays
		$vetor[] = 0;
		$vetor[] = 1;
		$vetor[] = 2;
		$vetor[] = 3;
		$vetor[] = 4;
		$vetor[] = 5;
		
		$vet2 = array (1, 2, 3, "nome" => "Cesar", 4 => "valor");
		echo $vet2["nome"] . "<br/>";
		echo $vet2[4];
	?>
</body>
</html>