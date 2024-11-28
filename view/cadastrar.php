<?php
session_start();
include("../service/conexao.php");

$nome = trim($_POST["nome"]);
$sobrenome = trim($_POST["sobrenome"]);
$email = trim($_POST["email"]);
$senha = trim($_POST["senha"]);

$sql = "SELECT * FROM cadastro WHERE email = :email";
$result = $conn->prepare($sql);
$result->bindParam(':email', $email);
$result->execute();
$test = $result->fetchAll(PDO::FETCH_ASSOC);   

print_r($test);

if (count($test) > 0) { // Verifica se o email já existe
    $_SESSION['usuario_existe'] = true;
    // header('Location: cadastro.php');
    exit;
}

$sql = "INSERT INTO cadastro (nome, sobrenome, email, senha) VALUES (:nome, :sobrenome, :email, :senha)";
$result = $conn->prepare($sql);
$result->bindParam(':nome', $nome);
$result->bindParam(':sobrenome', $sobrenome);
$result->bindParam(':email', $email);
$result->bindParam(':senha', $senha);

if ($result->execute()) {
    $_SESSION['status_cadastro'] = true;
}

$conn = null; // Fecha a conexão com o banco

header('Location: login.php');
exit;
?>
