<?php

    if (!empty($_GET['id']) && isset($_GET['id'])) {
        //Lógica da exclusão
        include 'conexao.php';
        $sql = "DELETE FROM produtos WHERE id = $_GET[id]";
        $resultado = $conexao -> query($sql);
        if ($resultado) {
            header('location: produtos.php');
        }
        else {
            //Aqui vai uma lógica caso o delete from não funcione
            //Aqui fica o mesmo redirecionamento porem com a mensagem de erro
        }
    }
    else {
        header('location: produtos.php');
    }
?>