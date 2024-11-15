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

<form action="editar_usuarios.php?id=<?php echo $id; ?>"method="post">
    <input name="id" value="<?php echo $id ?>"/>
    <input name="loginUser" value="<?php echo $loginUser ?>"/>
    <input name="senha" value="<?php echo $senha ?>"/>
    <button type="submit">Salvar alterações</button>
</form>

<?php include "rodape.php"; ?>