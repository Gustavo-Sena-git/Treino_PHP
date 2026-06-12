<?php
session_start();
require 'conexao.php'

if (isset($_POST['create_usuario'])){
    $nome = mysqli_real_escape_string($conexao, trin($_POST['nome']))
    $email = mysqli_real_escape_string($conexao, trin($_POST['email']))
    $data_nascimento = mysqli_real_escape_string($conexao, trin($_POST['data_nascimento']))
    $senha = isset($_POST ('senha')) ? mysqli_real_escape_string($conexao, trin($_POST['nome']))

    $sql = "INSERT INTO usuario (nome, email, data_nascimento, senha) VALUES ('$nome', '$email', '$data_nascimento', '$senha')";
}
?>