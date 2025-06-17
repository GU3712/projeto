<?php
include 'db_config.php';
$id = $_GET['id'];
$r = $conn->query("SELECT * FROM instrutors WHERE id=$id");
$row = $r->fetch_assoc();
?>
<form action='atualizar_instrutor.php' method='POST'>
<input type='hidden' name='id' value='<?php echo $row['id']; ?>'>
Nome: <input type='text' name='nome' value='<?php echo $row['nome']; ?>'><br>
Especialidade: <input type='text' name='especialidade' value='<?php echo $row['especialidade']; ?>'><br>
Cref: <input type='text' name='cref' value='<?php echo $row['cref']; ?>'><br>
Telefone: <input type='text' name='telefone' value='<?php echo $row['telefone']; ?>'><br>
Email: <input type='text' name='email' value='<?php echo $row['email']; ?>'><br><input type='submit' value='Atualizar'></form>