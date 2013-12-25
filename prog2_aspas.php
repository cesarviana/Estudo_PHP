<!DOCTYPE html>
<html>
	<meta charset="utf-8"/>
	<head>
		
	</head>
	<body>
		<?php
		
			$teste = "Mostrando script <script>alert(\"oi\")</script>";
		
			echo 'Mostrando aspas duplas " <br/>';
			echo "Mostrando aspas simples ' <br/>";
			echo "Mostrando barra \\ <br/>";
			echo "Mostrando cifrão \$ <br/>";
			echo $teste;
			
		?>
	</body>
</html>