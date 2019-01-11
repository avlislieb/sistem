<?php 

$conn = new mysqli("localhost", "root", "", "sistem");

if ($conn != true){
	echo "<script>alert('falha na conexão');</script>";
}
else{
	mysqli_query($conn, "SET NAMES 'UTF8'");
	//echo "<script>alert('conectado');</script>";
}
 
?>
