<?php include "cabecalho.php"; ?>
<?php
if (isset($_POST['id']) && !empty($_POST['id']) &&
    isset($_POST['loginUser']) && !empty($_POST['descricao']) && 
    isset($_POST['senha']) && !empty($_POST['rolePermissao'])) {

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

<form action="editar_permissoes.php?id=<?php echo $id; ?>"method="post">
    <input name="id" value="<?php echo $id ?>"/>
    <input name="descricao" value="<?php echo $descricao ?>"/>
    <input name="rolePermissao" value="<?php echo $rolePermissao ?>"/>
    <button type="submit">Salvar alterações</button>
</form>

<?php include "rodape.php"; ?>