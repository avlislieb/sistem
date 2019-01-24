<?php 

$user = $senha = "";

$back = "<script>window.location.href='index.html';</script>";

$next = "<script>window.location.href='menu.php';</script>";

if(empty($_POST['fuser'])){
	echo "<script>alert('usuario não inserido!');</script>" . $back;

}
else{
	$user = $_POST['fuser'];
}
if(empty($_POST['fsenha'])){
	echo "<script>alert('senha não inserida!!');</script>" . $back;
}
else{
	$senha = $_POST['fsenha'];
}

session_start();
$user = $_POST['fuser'];
$_SESSION['usuario'] = $user;
echo $_SESSION['usuario'];

include_once("conexao.php");

$sql = "SELECT * FROM user WHERE nome = '$user' AND senha = '$senha'";
$res = mysqli_query($conn, $sql) or die("erro ao retornar consulta");

$registro = mysqli_fetch_array($res);
if(!$registro){
	echo "<script>alert('Usuario não encontrado!!');</script>" . $back;
}
else{
	echo $next;
}
mysql_close($conn);
?>