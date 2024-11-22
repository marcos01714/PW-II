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
    INSERT INTO produtos (descricao, valor, codigo_barras, ativo) VALUES ('Amendoim Verde', 5.50, '789872640096', 1), 
    ('Goiabinha Saborosa', 1.50, '7898045700725', 1),('Camiseta Estampada - 100% Algodão', 49.90, '1234567890123', 1),
    ('Tênis Esportivo - Conforto e Estilo', 299.90, '1234567890124', 1),
    ('Smartphone XPro - 128GB, Câmera 48MP', 1999.00, '1234567890125', 1),
    ('Caderno Universitário - 200 Folhas', 29.90, '1234567890126', 1),
    ('Mochila de Couro - Elegante e Espaçosa', 249.90, '1234567890127', 1),
    ('Fone de Ouvido Bluetooth - Cancelamento de Ruído', 149.90, '1234567890128', 1),
    ('Relógio Digital - À Prova D\'água', 199.90, '1234567890129', 1),
    ('Lavadora de Roupas - 10Kg', 1599.00, '1234567890130', 1),
    ('Batedeira Elétrica - 5 Velocidades', 399.90, '1234567890131', 1),
    ('Kit de Maquiagem - 12 Peças', 89.90, '1234567890132', 1),
    ('Cafeteira Elétrica - 12 Xícaras', 299.90, '1234567890133', 1),
    ('Conjunto de Panelas - Antiaderente', 349.90, '1234567890134', 1),
    ('TV LED 50 - Full HD', 2499.00, '1234567890135', 1),
    ('Geladeira Inverse - 450 Litros', 3499.00, '1234567890136', 1),
    ('Assento de Carro - Conforto e Segurança', 199.90, '1234567890137', 1),
    ('Conjunto de Facas de Cozinha - 6 Peças', 129.90, '1234567890138', 1),
    ('Roupão de Banho - Microfibra', 89.90, '1234567890139', 1),
    ('Aspirador de Pó - Sem Fio', 599.90, '1234567890140', 1),
    ('Secador de Cabelo - 2200W', 199.90, '1234567890141', 1),
    ('Jogo de Lençóis - 150 Fios', 159.90, '1234567890142', 1);

    CREATE TABLE categoria (
        id INT PRIMARY KEY AUTO_INCREMENT,
        nome VARCHAR(80) NOT NULL
    );
    
    ALTER TABLE produtos
    ADD COLUMN categoria_id INT;

    ALTER TABLE produtos
    ADD CONSTRAINT fk_produtos_categoria
    FOREIGN KEY (categoria_id) REFERENCES categoria (id);
    
    CREATE TABLE usuarios (
        id INT PRIMARY KEY AUTO_INCREMENT,
        loginUser VARCHAR(50) NOT NULL,
        senha VARCHAR(80) NOT NULL,
        ativo BIT DEFAULT 1
    );
    
    CREATE TABLE permissoes (
        id INT PRIMARY KEY AUTO_INCREMENT,
        descricao VARCHAR(150) NOT NULL,
        rolePermissao VARCHAR(50) NOT NULL
    );
    
    CREATE TABLE USUARIOS_PERMISSOES (
        ID INT PRIMARY KEY AUTO_INCREMENT,
        USUARIO_ID INT NOT NULL,
        PERMISSAO_ID INT NOT NULL,
        CONSTRAINT FK_USUARIO FOREIGN KEY (usuario_id) REFERENCES USUARIOS(ID) ON DELETE CASCADE,
        CONSTRAINT FK_PERMISSAO FOREIGN KEY (permissao_id) REFERENCES PERMISSOES(ID) ON DELETE CASCADE
    );";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
?>