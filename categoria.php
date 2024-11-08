<?php include "cabecalho.php"; ?>
    <?php
        if(isset($_GET["pesquisa"])) {
            $pesquisa = $_GET["pesquisa"];
            if(empty($pesquisa)) {
                include "conexao.php";
                $sql = "SELECT id, nome FROM categoria ORDER BY id desc";
                $resultado = $conexao -> query($sql);
                $conexao -> close();
            } else {
                include "conexao.php";
                $sql = "SELECT id, nome FROM categoria WHERE nome LIKE '%$pesquisa%' ORDER BY id desc";
                $resultado = $conexao -> query($sql);
                $conexao -> close();
                }
        }
        else {
            $pesquisa = "";
            include "conexao.php";
            $sql = "SELECT id, nome FROM categoria ORDER BY id desc";
            $resultado = $conexao -> query($sql);
            $conexao -> close();
        }
    ?>
    <br>
    <?php 
        if (isset($_GET["erro"]) && $_GET["erro"] == 1) {
            echo "<div class='alert alert-danger' role='alert'>";
            echo $_GET["erro"];
            echo "</div>";
        }
    ?>
    <br>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Lista de Categorias
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <a href="nova_categoria.php" class="btn btn-success">
                                Nova categoria
                            </a>
                        </div>
                        <div class="col-8">
                            <form action="categoria.php" method="get">
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
                                    <th scope="col">Nome</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if ($resultado -> num_rows >0) {
                                            while ($row = $resultado -> fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . $row["id"] . "</td>";
                                                echo "<td>" . $row["nome"] . "</td>";
                                                echo "<td><a href='editar_categoria.php?id=$row[id]' class='btn btn-warning'>Editar</td>";
                                                echo "<td><a href='excluir_categoria.php?id=$row[id]' class='btn btn-danger'>Excluir</td>";
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