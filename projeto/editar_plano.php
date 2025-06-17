<?php
include 'db_config.php';
$id = $_GET['id'];
$r = $conn->query("SELECT * FROM planos WHERE id=$id");
$row = $r->fetch_assoc();
?>
<form action='atualizar_plano.php' method='POST'>
<input type='hidden' name='id' value='<?php echo $row['id']; ?>'>
Nome: <input type='text' name='nome' value='<?php echo $row['nome']; ?>'><br>
Descricao: <input type='text' name='descricao' value='<?php echo $row['descricao']; ?>'><br>
Duracao: <input type='text' name='duracao' value='<?php echo $row['duracao']; ?>'><br>
Tipo: <input type='text' name='tipo' value='<?php echo $row['tipo']; ?>'><br>
Instrutor_id: <input type='text' name='instrutor_id' value='<?php echo $row['instrutor_id']; ?>'><br><input type='submit' value='Atualizar'></form>