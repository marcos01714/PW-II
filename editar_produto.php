<?php include "cabecalho.php"; ?>

<?php
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        include 'conexao.php';
        $sql = 'SELECT id, descricao, valor, codigo_barras FROM produtos WHERE id = $_GET[id]';
        $resultado = $conexao->query($sql);
        if ($resultado) {
            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
                    $id = $row["id"];
                    $descricao = $row["descricao"];
                    $valor = $row["valor"];
                    $codigo_barras = $row["codigo_barras"];
                }
            }
            else {
                header('location: produtos.php');
            }
        }
        else {
            header('location: produtos.php');
        }
    }
    else {
        header('location: produtos.php');
    }
?>

<form action="editar_produto.php" method="post">
    <input name="id" value="<?php echo $id ?>"/>
    <input name="descricao" value="<?php echo $descricao ?>"/>
    <input name="valor" value="<?php echo $valor ?>"/>
    <input name="codigo_barras" value="<?php echo $codigo_barras ?>"/>
    <button type="submit">Salvar alterações</button>
</form>

<?php include "rodape.php"; ?>