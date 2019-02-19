<?php 

$empresa = $descri  = $vTotal = $debito = "";
$entrega = date("d/m/Y");
$back = "<script>alert('Campo não inserido!');window.location.href='insert.html';</script>";

if(empty($_POST['fempresa'])){
	echo $back;
}
else{
	$empresa = $_POST['fempresa'];
}
if(empty($_POST['fdescri'])){
	echo $back;
}
else{
	$descri = $_POST['fdescri'];
}
if (empty($_POST['fdata'])) {
	echo $back;
}
else{
	$entrega = $_POST['fdata'];
}
if (empty($_POST['fvalor'])) {
	echo $back;
}
else{
	$vTotal = $_POST['fvalor'];
}

if (empty($_POST['fpago'])) {
	echo $back;
}
else{
	$debito = $_POST['fpago'];
}

include_once("conexao.php");
$sql = "INSERT INTO notas (empresa, descricao, entrega, pago, vtotal) VALUES ('$empresa', '$descri','$entrega', '$debito','$vTotal')";
// echo $sql;

$res = mysqli_query($conn, $sql) or die("Erro ao retornar consulta");

if ($res == true) {
	echo "<script>alert('nota inserida com sucesso!'); window.location.href='menu.php';</script>";
}
else{
	echo "<script>alert('Falha na inserção da nota!'); window.location.hreh='insert.html';</script>";
}
mysqli_close($conn);
?>