<?php include "cabecalho.php"; ?>
<?php
if (isset($_POST['id']) && !empty($_POST['id']) &&
        isset($_POST['nome']) && !empty($_POST['nome'])) {

            include 'conexao.php';
            $sql = "UPDATE categoria SET nome = '$_POST[nome]' WHERE id = $_POST[id]";
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
        $sql = "SELECT id, nome FROM categoria WHERE id = $_GET[id]";
        $resultado = $conexao->query($sql);
        if ($resultado) {
            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
                    $id = $row["id"];
                    $nome = $row["nome"];
                }
            }
            else {
                header('location: categoria.php?erro=Nenhum registro encontrado');
            }
        }
        else {
           header('location: categoria.php?erro=Erro do if do resultado');
        }
    }
    else {
        header('location: categoria.php?erro=Nenhum ID informado');
    }
?>

<div class="row">
    <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">Editar categoria</div>
                <div class="card-body">
                    <form action="editar_categoria.php?id=<?php echo $id; ?>"method="post">
                        <label>Id</label>
                        <br>
                        <input class="form-control" name=id" value="<?php echo $id ?>"/>
                        <br>
                        <label>Nome</label>
                        <br>
                        <input class="form-control" name="nome" value="<?php echo $nome ?>"/>
                        <br>
                        <button type="submit" class='btn btn-success'>Salvar alterações</button>
                    </form>
                </div>
            </div>
        </div>
    <div class="col-4"></div>
</div>

<?php include "rodape.php"; ?>