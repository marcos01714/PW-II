<?php include "cabecalho.php"; ?>

<?php
    if (   isset($_POST["descricao"])
        && isset($_POST["rolePermissao"])) {

        if (empty($_POST["descricao"])) {
            echo "<br><div class='alert alert-danger'>O campo descrição não pode estar vazio</div>";
        }

        else if (empty($_POST["rolePermissao"])) {
            echo "<br><div class='alert alert-danger'>O campo rolePermissao não pode estar vazio</div>";
        }

        else {
        include "conexao.php";

        $descricao = $_POST["descricao"];
        $rolePermissao = $_POST["rolePermissao"];
        
        $query = "INSERT INTO permissoes (descricao, rolePermissao) VALUES ('$descricao, $rolePermissao')";

        $resultado = $conexao->query($query);
        if ($resultado) {
            echo "<div class='alert alert-success'>Salvo no banco com sucesso!</div>";
        }
        else {
            echo "<div class='alert alert-danger'>Ocorreu algum erro ao salvar!</div>";
        }
    }    
}
else {
    $descricao = "";
}
?>

<div class="row">
    <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">Cadastrar nova permissão</div>
                <div class="card-body">
                    <form action="nova_permissao.php" method="post">
                        <label>Descrição</label>
                        <input class="form-control" type="text" name="descricao" value="<?php echo $descricao; ?>" />
                        <label>Role</label>
                        <input class="form-control" type="text" name="rolePermissao" value="<?php echo $rolePermissao; ?>" />
                        <br>
                        <button type='submit' class='btn btn-success'>Enviar os dados</button>
                    </form>
                </div>
            </div>
        </div>
    <div class="col-4"></div>
</div>

<?php include "rodape.php"; ?>