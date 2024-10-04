<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "PW_BD";

$script = "
    CREATE DATABASE PW_BD;
    USE PW_BD;
    CREATE TABLE produtos (
        id INT PRIMARY KEY AUTO_INCREMENT,
        descricao VARCHAR(150) NOT NULL,
        codigo_barras VARCHAR(25) NOT NULL,
        valor DECIMAL(10,2) NOT NULL,
        imagem VARCHAR(70),
        ativo BIT NOT NULL
    );
";

$conexao = new mysqll($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
?>