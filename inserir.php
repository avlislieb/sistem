<?php 

$empresa = $descri  = $vTotal = $vUnitario = "";
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

include_once("conexao.php");
$sql = "INSERT INTO notas (empresa, descricao, entrega, vUnitario, vTotal) VALUES ('$empresa', '$descri','$entrega', '$valor')";
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