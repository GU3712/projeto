<?php
$host = "localhost";
$user = "root";
$pass = "senai.123";
$db = "sistem";
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) die("Erro: " . $conn->connect_error);

if (isset($_POST['id'])) {
    $sql = "UPDATE fornecedores SET Nome_Fantasia=?, Razao_Social=?, CNPJ=?, Inscricao_Estadual=?, Inscricao_Municipal=?, Telefone_Principal=?, Email_Contato=? WHERE ID_Fornecedor=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssi",
        $_POST['nome_fantasia'],
        $_POST['razao_social'],
        $_POST['cnpj'],
        $_POST['inscricao_estadual'],
        $_POST['inscricao_municipal'],
        $_POST['telefone_principal'],
        $_POST['email_contato'],
        $_POST['id']
    );
    $stmt->execute();
    header("Location: lista_fornecedores.php");
}

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM fornecedores WHERE ID_Fornecedor=$id");
$row = $result->fetch_assoc();
?>

<h1>Editar Fornecedor</h1>
<form method="POST">
    <input type="hidden" name="id" value="<?= $row['ID_Fornecedor'] ?>">
    <input type="text" name="nome_fantasia" value="<?= $row['Nome_Fantasia'] ?>" required><br>
    <input type="text" name="razao_social" value="<?= $row['Razao_Social'] ?>" required><br>
    <input type="text" name="cnpj" value="<?= $row['CNPJ'] ?>" required><br>
    <input type="text" name="inscricao_estadual" value="<?= $row['Inscricao_Estadual'] ?>"><br>
    <input type="text" name="inscricao_municipal" value="<?= $row['Inscricao_Municipal'] ?>"><br>
    <input type="text" name="telefone_principal" value="<?= $row['Telefone_Principal'] ?>"><br>
    <input type="email" name="email_contato" value="<?= $row['Email_Contato'] ?>"><br><br>
    <button type="submit">Salvar Alterações</button>
</form>
