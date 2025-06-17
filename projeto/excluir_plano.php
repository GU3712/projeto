<?php
include 'db_config.php';
$id = $_GET['id'];
$conn->query("DELETE FROM planos WHERE id=$id");
header('Location: listar_planos.php');
?>