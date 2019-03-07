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
function pago($debito){
	if ($debito == "s") {
		echo "Sim";
	}
	else{
		echo "Não";
	}
}
include_once("conexao.php");
$sql = "SELECT * FROM notas";

$res = mysqli_query($conn, $sql) or die("Erro ao retornar consulta");

global $id;





?>
<table border="1">
	
	<?php 
		while ($registro = mysqli_fetch_array($res)){
			
	?>
	<form action="excluir.php" method="post">
	<tr>
			<th colspan="">Notas</th>

			<th colspan="">Empresa</th>
			
			<th colspan="2">Descrição</th>
			
			<th colspan="2">Valor</th>
			
			<th colspan="2">Entrega</th>

			<th colspan="">Pago</th>
	</tr>
		<tr>
			<td>
				</td>
			<td colspan="">
				<p><?php  $id = $registro['idNotas']; echo $id;  ?></p>
			
			</td>

			<td colspan="">
				<p> <?php echo $registro['empresa']; ?></p>
			</td>

			<td colspan="2">
				<p><?php echo $registro['descricao'];?></p>
			</td>

			<td colspan="2">
				<p><?php echo $registro['vtotal'] . "R$";?></p>
			</td>

			<td colspan="2">
				<p><?php $data = $registro['entrega']; echo date('d/m/Y', strtotime($data));?></p>
			</td>
			<td colspan="">
				<p><?php $debito = $registro['pago']; pago($debito); ?></p>
			</td>
			<td colspan="">
				<!-- <a href="excluir.php?idNotas=$id">modificar</a> -->
				<input type="hidden" name="idNotas" value="<?php echo $registro['idNotas']; ?>">
				<input type="submit" name="deletar" value="deletar">
			</td>
	</tr>
	</form>
	<br/>
	<?php } 
		
		?>
	<tr>
		<td colspan="11">
			<button><a href="menu.php">voltar</a></button>
		</td>
	</tr>

</table>
<?php  
		mysqli_close($conn);
		?>
</body>
</html>