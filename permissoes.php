<?php include "cabecalho.php"; ?>

<?php
    if(isset($_GET["pesquisa"])){
        $pesquisa = $_GET["pesquisa"];
        if(empty($pesquisa)){
            include "conexao.php";
            $sql = "SELECT id, descricao, rolePermissao FROM permissoes ORDER BY id desc";
            $resultado = $conexao -> query($sql);
            $conexao -> close();
        }
        else {
            include "conexao.php";
            $sql = "SELECT id, loginUser, senha FROM usuarios WHERE loginUser LIKE '%$pesquisa%' ORDER BY loginUser desc";
            $resultado = $conexao -> query($sql);
            $conexao -> close();
        }
    }
    else {
        $pesquisa = "";
        include "conexao.php";
        $sql = "SELECT id, loginUser, senha FROM usuarios ORDER BY id desc";
        $resultado = $conexao -> query($sql);
        $conexao -> close();
    }
?>

<br>

<?php
    if (isset($_GET["erro"]) && !empty($_POST["erro"])) {
        echo "<div class='alert alert-danger'>";
        echo $_GET["erro"];
        echo "</div>";
    }
?>

<br>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Lista de Produtos
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <a href="novo_usuario.php" class="btn btn-success">
                            Novo Usuário
                        </a>
                    </div>
                    <div class="col-8">
                        <form action="usuarios.php" method="get">
                        <div class="input-group mb-3">
                            <input type="text" name="pesquisa" value="<?php echo $pesquisa; ?>" class="form-control" placeholder="Digite sua pesquisa aqui...">
                            <button class="btn btn-primary" type="submit">
                                Pesquisar
                            </button>
                        </div>
                        </form>
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Login</th>
                                <th scope="col">Senha</th>
                                <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    if ($resultado -> num_rows > 0) {
                                        while ($row = $resultado -> fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>" . $row["id"] . "</td>";
                                            echo "<td>" . $row["loginUser"] . "</td>";
                                            echo "<td>" . $row["senha"] . "</td>";
                                            echo "<td><a href='editar_usuarios.php?id=$row[id]' class='btn btn-warning'>Editar</a></td>";
                                            echo "<td><a href='excluir_usuarios.php?id=$row[id]' class='btn btn-danger'>Excluir</a></td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='3'>Nenhum registro encontrado</td></tr>";
                                    }             
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "rodape.php"; ?>