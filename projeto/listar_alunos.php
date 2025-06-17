<?php
include 'db_config.php';
$result = $conn->query("SELECT * FROM alunos");
echo '<h2>Lista de Alunos</h2>';
while($row = $result->fetch_assoc()) {
echo '<p>';
foreach($row as $k => $v) echo "$k: $v<br>";
echo "<a href='editar_aluno.php?id={$row['id']}'>Editar</a> | ";
echo "<a href='excluir_aluno.php?id={$row['id']}'>Excluir</a>";
echo '</p><hr>'; }
?>