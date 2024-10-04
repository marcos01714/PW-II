<?php include "cabecalho.php"?>

<?php
    if(isset ($_POST["nome"]) && isset ($_POST["valor"]) && isset ($_POST["codigobarras"]) && isset ($_POST["datavalidade"])){
        if( empty($_POST["nome"])) {
            echo "<div class='alert alert-danger'>Campo nome não pode estar em branco</div>";
        }
        else if( empty($_POST["valor"])) {
            echo "<div class='alert alert-danger'>Campo valor não pode estar em branco</div>";
        }
        else if( empty($_POST["codigobarras"])) {
            echo "<div class='alert alert-danger'>Campo código de barras não pode estar em branco</div>";
        }
        else if( empty($_POST["datavalidade"])) {
            echo "<div class='alert alert-danger'>Campo data de validade não pode estar em branco</div>";
        }
        else {
            include "conexao.php";

            $nome = $_POST["nome"];
            $valor = str_replace("," , "." , $_POST["valor"]);
            $codigobarras = $_POST["codigobarras"];

            $query = "INSERT INTO produtos (descricao, valor, codigo_barras, ativo) VALUES ('$nome', $valor, '$codigobarras', 1)";

            $resultado = $conexao->query($query);
            if ($resultado)
            {
                echo "<div class='alert alert-success'>Salvo no banco com sucesso</div>"
            }

            //Executa a lógica do programa
            //Salvar no banco 
            echo "<h1>Salvo no banco com sucesso</h1>"
        }
    }

?>
<form action="novo-produto.php" method="post">
    <label>Nome</label>
    <input type="text" name="nome"/>
    <br>
    <label>Valor</label>
    <input type="number" name="valor"/>
    <br>
    <label>Código de barras</label>
    <input type="text" name="codigobarras"/>
    <br>
    <label>Data</label>
    <input type="date" name="datavalidade"/>
    <br>
    <button type='submit' class='btn btn-success'>Enviar os dados</button>
</form>

<?php include "rodape.php"?>