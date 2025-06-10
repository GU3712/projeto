<?php
$host = "localhost";
$user = "root";
$pass = "senai.123";
$db = "sistem";
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) die("Erro: " . $conn->connect_error);

$id = $_GET['id'];
$conn->query("DELETE FROM fornecedores WHERE ID_Fornecedor=$id");
header("Location: lista_fornecedores.php");
?>
