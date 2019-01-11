<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user=scalable=no">
	<title>notas</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>


<?php 

include_once("conexao.php");
$sql = "SELECT * FROM notas";

$res = mysqli_query($conn, $sql) or die("Erro ao retornar consulta");



while ($registro = mysqli_fetch_array($res)){

?>
<table border="1">
	<tr>
		<tr>
			<th colspan="2">Empresa</th>
			
			<th colspan="2">Descrição</th>
			
			<th colspan="2">valor</th>
			
			<th colspan="2">Entrega</th>
		</tr>

		<td colspan="2">
			<p> <?php echo $registro['empresa']; ?></p>
		</td>
		
		

		<td colspan="2">
			<p><?php echo $registro['descricao']?></p>
		</td>

		
		
		<td colspan="2">
			<p><?php echo $registro['preco'] . "R$"?></p>
		</td>

		

		<td colspan="2">
			<p><?php $data = $registro['entrega']; echo date('d/m/Y', strtotime($data));?></p>
		</td>
	</tr>
	<br/>
	
<?php } ?>
	
	<tr>

		<td colspan="8">
			<button><a href="menu.php">voltar</a></button>
		</td>
	</tr>
</table>
</body>
</html>