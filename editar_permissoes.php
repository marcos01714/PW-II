<?php include "cabecalho.php"; ?>
<?php
if (isset($_POST['id']) && !empty($_POST['id']) &&
    isset($_POST['descricao']) && !empty($_POST['descricao']) && 
    isset($_POST['rolePermissao']) && !empty($_POST['rolePermissao'])) {

            include 'conexao.php';
            $sql = "UPDATE permissoes SET descricao = '$_POST[descricao]', rolePermissao = '$_POST[rolePermissao]' WHERE id = $_POST[id]";
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
        $sql = "SELECT id, descricao, rolePermissao FROM permissoes WHERE id = $_GET[id]";
        $resultado = $conexao->query($sql);
        if ($resultado) {
            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
                    $id = $row["id"];
                    $descricao = $row["descricao"];
                    $rolePermissao = $row["rolePermissao"];
                }
            }
            else {
                header('location: permissoes.php?erro=Nenhum registro encontrado');
            }
        }
        else {
           header('location: permissoes.php?erro=Erro do if do resultado');
        }
    }
    else {
        header('location: permissoes.php?erro=Nenhum ID informado');
    }
?>

<div class="row">
    <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">Editar permissão</div>
                <div class="card-body">
                    <form action="editar_permissoes.php?id=<?php echo $id; ?>"method="post">
                        <label>Id</label>
                        <br>
                        <input class="form-control" name="id" value="<?php echo $id ?>"/>
                        <br>
                        <label>Descrição</label>
                        <br>
                        <input class="form-control" name="descricao" value="<?php echo $descricao ?>"/>
                        <br>
                        <label>Role</label>
                        <br>
                        <input class="form-control" name="rolePermissao" value="<?php echo $rolePermissao ?>"/>
                        <br>
                        <button type="submit" class='btn btn-success'>Salvar alterações</button>
                    </form>
                </div>
            </div>
        </div>
    <div class="col-4"></div>
</div>

<?php include "rodape.php"; ?>