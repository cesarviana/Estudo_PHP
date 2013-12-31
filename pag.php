<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
</head>
<body>
	<?php 
	//Estruturas de controle
	// condicionais
		$nota = 5;
		if ($nota >= 7):
			echo "Aprovado";
		else:
			echo "Reprovado";
		endif;
		
		// switch
		$opcao = "SIM";
		switch ($opcao)
		{
			case "SIM" :
				echo "<br> Você aceitou os termos.";
				break;
			case "NAO" :
				echo "<br> Você rejetiou os termos.";
				break;
			default:
				echo "<br> A opção escolhida é inválida.";
		}
	?>
</body>
</html>