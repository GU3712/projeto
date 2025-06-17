<?php
include 'db_config.php';
$result = $conn->query("SELECT * FROM planos");
echo '<h2>Lista de Planos</h2>';
while($row = $result->fetch_assoc()) {
echo '<p>';
foreach($row as $k => $v) echo "$k: $v<br>";
echo "<a href='editar_plano.php?id={$row['id']}'>Editar</a> | ";
echo "<a href='excluir_plano.php?id={$row['id']}'>Excluir</a>";
echo '</p><hr>'; }
?>