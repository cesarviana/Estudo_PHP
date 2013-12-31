<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
</head>
<body>
	<?php 
	//Estruturas de controle
	// Comandos de repetição			
		
		// while
		
		$var = 1;
		while ($var != 5) :
			if($var % 2 == 0) :
				echo "<h2> $var </h2>";
			else :
				echo "<h1> $var </h1>";
			endif;
			$var++;
		endwhile;
		
		// for
		
		for($i = 0; $i <= 20; $i++) :
			echo "$i, ";
		endfor;
		
		// foreach
		
		$vetor = array(1,2,3,4);
		foreach ($vetor as $v) :
			echo "<br> O valor atual do vetor é $v.";
		endforeach;
		
		foreach ($vetor as $chave => $valor){
			echo "<br> vetor[$chave] = $valor";
		}
	?>
	
	<select>
	<?php
		foreach ($vetor as $chave => $valor) :
			echo "<option value='$chave'>$valor</option>";
		endforeach;
	?>
	</select>
</body>
</html>