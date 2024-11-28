<?php
session_start();
include("../service/conexao.php");

$nome =  trim($_POST["nome"]);
$email  =  trim($_POST["email"]);
$senha =  trim($_POST["senha"]);


$sql = " SELECT * FROM cadastro WHERE email = '$email'";
// $sql_code = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";
$result = $conn->prepare($sql);
$row = $result->execute();
$test = $row->fetchAll(PDO::FETCH_ASSOC);   

print_r($test);

if($row == 1) {
$_SESSION['usuario_existe'] = true;
// header('Location: cadastro.php');
exit;
}

$sql = "INSERT INTO cadastro (nome, email, senha, senhaconfirm) VALUES ('$nome', '$email', '$senha', '$senhaconfirm', NOW())";

if(conexao->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;

?>