<?php include "cabecalho.php"; ?>

<?php

    if (isset($_POST['id']) && !empty($_POST['id']) &&
        isset($_POST['descricao']) && !empty($_POST['descricao']) &&
        isset($_POST['valor']) && !empty($_POST['valor']) &&
        isset($_POST['codigo_barras']) && !empty($_POST['codigo_barras'])) {

            include 'conexao.php';
            $sql = "UPDATE produtos SET descricao = '$_POST[descricao]', valor = $_POST[valor], codigo_barras = $_POST[codigo_barras], categoria_id = $_POST[categoria_id] WHERE id = $_POST[id]";
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
        $sql = "SELECT id, descricao, valor, codigo_barras, categoria_id FROM produtos WHERE id = $_GET[id]";
        $resultado = $conexao->query($sql);
        if ($resultado) {
            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
                    $id = $row["id"];
                    $descricao = $row["descricao"];
                    $valor = $row["valor"];
                    $codigo_barras = $row["codigo_barras"];
                    $categoria_id = $row["categoria_id"];
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

<div class="row">
    <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">Editar produto</div>
                <div class="card-body">
                    <form action="editar_produto.php?id=<?php echo $id; ?>"method="post">
                        <label>Id</label>
                        <br>
                        <input class="form-control" name="id" value="<?php echo $id ?>"/>
                        <br>
                        <label>Descrição</label>
                        <br>
                        <input class="form-control" name="descricao" value="<?php echo $descricao ?>"/>
                        <br>
                        <label>Valor</label>
                        <br>
                        <input class="form-control" name="valor" value="<?php echo $valor ?>"/>
                        <br>
                        <label>Código de barras</label>
                        <br>
                        <input class="form-control" name="codigo_barras" value="<?php echo $codigo_barras ?>"/>
                        <br>
                        <label>Categoria</label>
                        <br>
                        <select class="form-control" name="categoria_id" id="">
                            <?php
                                $sql_categorias = "SELECT id, nome FROM categoria";
                                $resultado_categoria = $conexao -> query($sql_categorias);
                                if ($resultado_categoria -> num_rows > 0) {
                                    while ($row = $resultado_categoria -> fetch_assoc()) {
                                        if ($categoria_id == $row[id]) {
                                            echo "<option selected value='$row[id]'>$row[nome]</option>";
                                        }
                                        else {
                                            echo "<option value='$row[id]'>$row[nome]</option>";
                                        }
                                    }
                                }
                                else {
                                    echo "<option value='0'> Não tem categoria cadastrada </option>";
                                }
                            ?>
                            
                        </select>
                        <br>
                        <button type="submit" class='btn btn-success'>Salvar alterações</button>
                    </form>
                </div>
            </div>
        </div>
    <div class="col-4"></div>
</div>

<?php include "rodape.php"; ?>