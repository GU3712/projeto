<?php
include 'db_config.php';
$id = $_GET['id'];
$conn->query("DELETE FROM instrutors WHERE id=$id");
header('Location: listar_instrutors.php');
?>