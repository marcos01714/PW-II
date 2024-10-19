<?php include "cabecalho.php"; ?>

<?php

    if (isset($_POST['id']) && !empty($_POST['id']) &&
        isset($_POST['descricao']) && !empty($_POST['descricao']) &&
        isset($_POST['valor']) && !empty($_POST['valor']) &&
        isset($_POST['codigo_barras']) && !empty($_POST['codigo_barras'])) {

            include 'conexao.php';
            $sql = "UPDATE produtos SET descricao = '$_POST[descricao]', valor = $_POST[valor], codigo_barras = $_POST[codigo_barras] WHERE id = $_POST[id]";
            $resultado = $conexao->query($sql);
            if ($resultado) {
                //lógica para mensagem de sucesso
            }                                    
            else {
                //caso o update dê false
            }    
        } 

    if (isset($_GET['id']) && !empty($_GET['id'])) {
        include 'conexao.php';
        $sql = "SELECT id, descricao, valor, codigo_barras FROM produtos WHERE id = $_GET[id]";
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
                header('location: produtos.php?erro=Nenhum registro encontrado');
            }
        }
        else {
           header('location: produtos.php?erro=Erro do if do resultado');
        }
    }
    else {
        header('location: produtos.php?erro=Nenhum ID informado');
    }
?>

<form action="editar_produto.php?id=<?php echo $id; ?>"method="post">
    <input name="id" value="<?php echo $id ?>"/>
    <input name="descricao" value="<?php echo $descricao ?>"/>
    <input name="valor" value="<?php echo $valor ?>"/>
    <input name="codigo_barras" value="<?php echo $codigo_barras ?>"/>
    <button type="submit">Salvar alterações</button>
</form>

<?php include "rodape.php"; ?>