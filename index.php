<!-- TODO1: PHP: Crie uma funcao que exiba o conteudo de uma variavel global -->

<!DOCTYPE html>
<html lang="bzs">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Comércio Eletrônico</title>

	<link rel="shortcut icon" href="favicon/favicon.ico" /> <!-- favicon.ico-->
	<link rel="stylesheet" type="text/css" href="css/estilos.css" />

	<!-- A ordem aqui eh importante: primeiro deve vir o 'jquery.js', depois scripts.js, porque este último utiliza 'jquery.js'-->
	<script src="js/jquery-3.7.1.js"></script>
	<script src="js/decimal.js"></script>
	<script src="js/scripts.js"></script>

</head>

<body>

	<!-- TODO1 -->
	<?php 
		//Variavel global
		$x = 111;

		function f1(){
			global $x;  //Adquire o valor da variável global

			echo 'Funcao f1(): ' . $x . '<br>';
			$x++;
		}

		f1(); //Invoca a funcao

		echo 'Funcao f1(): ' . $x . '<br>';
	?>
<br>
<br>

<!-- TODO2 -->
<!-- Nota: 'name' eh usado no servidor -->
<form action='calcular.php' method="get">
		Número1: <input name="n1" type="text" required autofocus />
		<br>
		Número2: <input name="n2" type="text" required />
		<br>
		<input type="submit">
</form>
	
</body>

</html>