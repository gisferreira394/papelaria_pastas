<?php 
include "../includes/conexao.php";

$nome = $_POST ["nome"];
$email = $_POST ["email"];
$senha = $_POST ["senha"];
$cep = $_POST ["cep"];
$telefone = $_POST ["telefone"];
$cpf = $_POST ["cpf"];
$uf = $_POST ["uf"];

$sql = "Insert into funcionarios(nome, email, senha, cep, telefone, cpf, uf) values('$nome', '$email', '$senha', '$cep', '$telefone', '$cpf', '$uf')";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: selecionar.php");
?>