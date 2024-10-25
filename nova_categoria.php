<?php include "cabecalho.php"; ?>

<?php
    if (isset($_POST["nome"])) {
        if (empty($_POST["nome"])) {
            echo "<br><div class='alert alert-danger'>O campo nome não pode estar vazio</div>";
        }
    else {
        include "conexao.php";

        $nome = $_POST["nome"];

        $query = "INSERT INTO categoria (nome) VALUES ('$nome')";

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
    $nome = "";
}
?>

<div class="row">
    <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">Cadastrar nova categoria</div>
                <div class="card-body">
                    <form action="nova_categoria.php" method="post">
                        <label>Nome</label>
                        <input class="form-control" type="text" name="nome" value="<?php echo $nome; ?>" />
                        <br>
                        <button type='submit' class='btn btn-success'>Enviar os dados</button>
                    </form>
                </div>
            </div>
        </div>
    <div class="col-4"></div>
</div>

<?php include "rodape.php"; ?>