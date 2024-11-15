<?php include "cabecalho.php"; ?>

<?php
    if(     isset($_POST["loginUser"]) 
         && isset($_POST["senha"])
      )
    {

        if( empty($_POST["loginUser"]) )
        {
            echo "<br><div class='alert alert-danger'>
                    Campo login não pode estar em branco
                    </div>";
        }
        else if(empty($_POST["senha"]) )
        {
            echo "<br><div class='alert alert-danger'>
                    Campo senha não pode estar em branco
                    </div>";
        }
        else
        {
            include "conexao.php";
            
            $loginUser = $_POST["loginUser"];
            $senha = $_POST["senha"];

            $query = "INSERT INTO usuarios (loginUser, senha, ativo) VALUES ('$loginUser', '$senha', 1) ";

            $resultado = $conexao->query($query);
            if($resultado)
            {
                echo "<div class='alert alert-success'>
                         Salvo no banco com sucesso 
                      </div>" ;
            }else{
                echo "<div class='alert alert-danger'>
                         Ocorreu algum erro ao salvar
                      </div>" ;
            }  
        }
        
    }else{
        $loginUser = "";
        $senha = "";
    }
?>
<div class="row">
    <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">Cadastrar novo usuário</div>
                <div class="card-body">
                    <form action="novo_usuario.php" method="post">
                        <label>Login</label>
                        <input class="form-control" type="text" name="loginUser" value="<?php echo $loginUser; ?>" />
                        <br>
                        <label>Senha</label>
                        <input class="form-control" type="text" name="senha" value="<?php echo $senha; ?>" />
                        <br>
                        <button type='submit' class='btn btn-success'>
                            Enviar os dados
                        </button>
                    </form>
                </div>
            </div>
        </div>
    <div class="col-4"></div>
</div>

<?php include "rodape.php"; ?>