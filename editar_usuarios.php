<?php include "cabecalho.php"; ?>
<?php
if (isset($_POST['id']) && !empty($_POST['id']) &&
    isset($_POST['loginUser']) && !empty($_POST['loginUser']) && 
    isset($_POST['senha']) && !empty($_POST['senha'])) {

            include 'conexao.php';
            $sql = "UPDATE usuarios SET loginUser = '$_POST[loginUser]', senha = '$_POST[senha]' WHERE id = $_POST[id]";
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
        $sql = "SELECT id, loginUser, senha FROM usuarios WHERE id = $_GET[id]";
        $resultado = $conexao->query($sql);
        if ($resultado) {
            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
                    $id = $row["id"];
                    $loginUser = $row["loginUser"];
                    $senha = $row["senha"];
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
                    <form action="editar_usuarios.php?id=<?php echo $id; ?>"method="post">
                        <label>Id</label>
                        <br>
                        <input class="form-control" name="id" value="<?php echo $id ?>"/>
                        <br>
                        <label>Login</label>
                        <br>
                        <input class="form-control" name="loginUser" value="<?php echo $loginUser ?>"/>
                        <br>
                        <label>Senha</label>
                        <br>
                        <input class="form-control" name="senha" value="<?php echo $senha ?>"/>
                        <br>
                        <button type="submit" class='btn btn-success'>Salvar alterações</button>
                    </form>
                </div>
            </div>
        </div>
    <div class="col-4"></div>
</div>

<?php include "rodape.php"; ?>