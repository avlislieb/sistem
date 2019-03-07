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
	include_once("conexao.php");
	
	

	$id = $_POST['idNotas'];

	echo $id;
	$sql = "DELETE FROM notas WHERE idnotas = '$id'";
	$res = mysqli_query($conn, $sql);

	if($res == true){
		echo"<script>alert('nota deletada com sucesso!'); window.location.href='verificar.php';</script>";
	}
	mysqli_close($conn);
	?>
</body>
</html>