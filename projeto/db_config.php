<?php
$host = "localhost";
$user = "root";
$pass = "senai.123";
$db = "c";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>