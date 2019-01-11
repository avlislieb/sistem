<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, user-scalable=no" >
	
	<title>sistem</title>
	
	<link rel="stylesheet" type="text/css" href="estilo.css">

</head>
<body >
	<?php 
		session_start();
			
		$user = $_SESSION['usuario'];
		echo $user;
		
	?>
	<table border=1>
		<tr>
			<td>
				<a href="insert.html">Inserir notas</a>
			</td>
		</tr>
		<br/>
		<tr>
			<td>
				<a href="verificar.php">Verificar notas</a>
			</td>
		</tr>

		<br/>
		<tr>
			<td>
				<a href="#">Excluir notas</a>
			</td>
		</tr>
		<br/>		
		<tr>
			<td>
			<a href="#">modificar notas</a>
			</td>
		</tr>
		<tr>
			<td><button><a href="index.html">sair</a></button></td>
		</tr>
	</table>
</body>
</html>