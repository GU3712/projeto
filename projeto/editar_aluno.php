<?php
include 'db_config.php';
$id = $_GET['id'];
$r = $conn->query("SELECT * FROM alunos WHERE id=$id");
$row = $r->fetch_assoc();
?>
<form action='atualizar_aluno.php' method='POST'>
<input type='hidden' name='id' value='<?php echo $row['id']; ?>'>
Nome: <input type='text' name='nome' value='<?php echo $row['nome']; ?>'><br>
Cpf: <input type='text' name='cpf' value='<?php echo $row['cpf']; ?>'><br>
Nascimento: <input type='text' name='nascimento' value='<?php echo $row['nascimento']; ?>'><br>
Telefone: <input type='text' name='telefone' value='<?php echo $row['telefone']; ?>'><br>
Plano: <input type='text' name='plano' value='<?php echo $row['plano']; ?>'><br><input type='submit' value='Atualizar'></form>