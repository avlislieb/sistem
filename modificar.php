<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>sistem</title>

	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php
include_once('conexao.php');

$sql = "SELECT * FROM notas";

$res = mysqli_query($conn, $sql) or die ("Erro ao retornar consulta");
while ($registro = mysqli_fetch_array($res)) {
?>

<form>
	<input type="text" name="fempresa" value="<?php echo $registro['empresa'];?>">
</form>

<?php } ?>
</body>
</html>