<?php
$host = "localhost";
$user = "root";
$pass = "senai.123";
$db = "sistem";
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) die("Erro: " . $conn->connect_error);

$sql = "INSERT INTO fornecedores (Nome_Fantasia, Razao_Social, CNPJ, Inscricao_Estadual, Inscricao_Municipal, Telefone_Principal, Email_Contato)
VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssss", 
    $_POST['nome_fantasia'],
    $_POST['razao_social'],
    $_POST['cnpj'],
    $_POST['inscricao_estadual'],
    $_POST['inscricao_municipal'],
    $_POST['telefone_principal'],
    $_POST['email_contato']
);

if ($stmt->execute()) {
    echo "Fornecedor cadastrado com sucesso!<br><a href='formulario.html'>Voltar</a>";
} else {
    echo "Erro ao cadastrar: " . $stmt->error;
}
$conn->close();
?>