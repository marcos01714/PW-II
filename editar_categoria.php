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

<form action="editar_categoria.php?id=<?php echo $id; ?>"method="post">
    <input name="id" value="<?php echo $id ?>"/>
    <input name="nome" value="<?php echo $nome ?>"/>
    <button type="submit">Salvar alterações</button>
</form>

<?php include "rodape.php"; ?>