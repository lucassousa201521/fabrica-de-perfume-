<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Fabrica de Perfumes</title>		
	</head>
	<body>
		<h1>Preparar novo perfume</h1>
		<?php
		if (isset ($_SESSION['msg'])){
			echo $_SESSION ['msg'];
			unset ($_SESSION ['msg']);
		}
    ?>
    <form method="POST" action="processa.php">
			<label>Água: </label>
			<input type="number" name="agua" placeholder="informe em (ml)"><br><br>
			
			<label>Álcool: </label>
			<input type="number" name="alcool" placeholder="informe em (ml)"><br><br>

			<label>Fragrância: </label>
			<input type="number" name="fragrancia" placeholder="informe em (ml)"><br><br>
			
			<input type="submit" value="Cadastrar">
			<input type="button" value="Lista de perfumes fabricados"
			onclick="location.href='fabricado.php'">
			<input type="button" value="Tela inicial"
			onclick="location.href='index.php'">
		</form>
	</body>
</html>