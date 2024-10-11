<?php 
$servidor = "localhost"; 
$usuario = "root"; 
$senha = ""; 
$banco = "PW_BD"; 

$script = "
    CREATE DATABASE pw_bd;
    USE pw_bd;
    CREATE TABLE produtos (
        id INT PRIMARY KEY AUTO_INCREMENT,
        descricao VARCHAR(150) NOT NULL,
        codigo_barras VARCHAR(25) NOT NULL,
        valor DECIMAL(10,2) NOT NULL,
        imagem VARCHAR(50),
        ativo BIT NOT NULL
    );
    INSERT INTO produtos (descricao, codigo_barras, valor, ativo) VALUES ('Amendoim Verde', '789872640096', 5.50, 1), 
    ('Goiabinha Saborosa', '7898045700725', 1.50, 1);
";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
?>