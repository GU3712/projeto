<?php
$host = "localhost";
$user = "root";
$pass = "senai.123";
$db = "sistem";
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) die("Erro: " . $conn->connect_error);

$result = $conn->query("SELECT * FROM fornecedores");

echo "<h1>Lista de Fornecedores</h1>";
echo "<a href='formulario.html'>Novo Cadastro</a><br><br>";
echo "<table border='1'>
<tr>
<th>ID</th><th>Nome Fantasia</th><th>Razão Social</th><th>CNPJ</th><th>Telefone</th><th>Email</th><th>Ações</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['ID_Fornecedor']}</td>
        <td>{$row['Nome_Fantasia']}</td>
        <td>{$row['Razao_Social']}</td>
        <td>{$row['CNPJ']}</td>
        <td>{$row['Telefone_Principal']}</td>
        <td>{$row['Email_Contato']}</td>
        <td>
            <a href='editar_fornecedor.php?id={$row['ID_Fornecedor']}'>Editar</a> |
            <a href='excluir_fornecedor.php?id={$row['ID_Fornecedor']}' onclick=\"return confirm('Deseja excluir?')\">Excluir</a>
        </td>
    </tr>";
}
echo "</table>";
$conn->close();
?>