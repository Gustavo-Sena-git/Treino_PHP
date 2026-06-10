<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', 'root');
define('DB', 'exercicio_php_treino_gustavoS');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Erro de conexão');
?>