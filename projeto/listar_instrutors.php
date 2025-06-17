<?php
include 'db_config.php';
$result = $conn->query("SELECT * FROM instrutors");
echo '<h2>Lista de Instrutors</h2>';
while($row = $result->fetch_assoc()) {
echo '<p>';
foreach($row as $k => $v) echo "$k: $v<br>";
echo "<a href='editar_instrutor.php?id={$row['id']}'>Editar</a> | ";
echo "<a href='excluir_instrutor.php?id={$row['id']}'>Excluir</a>";
echo '</p><hr>'; }
?>