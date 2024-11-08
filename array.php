<?php include "cabecalho.php"; ?>
    <h1>Array</h1>
    <p>As variáveis do tipo array são muito utilizadas quando vamos listar coisas.
        Os arrays em php são listas de qualquer tipo de dados.
    </p>
    <pre>
            $array = [];
            $array = Array();
            $array[0] = "OI";
            $array[2] = 10;
            $array["Fernando"] = "Professor";
            $array[$array[2]] = "Teste";
    </pre>
    <?php
                    //   1    2     3       4      5     6
        $array = Array("OI", 10, "Prof", "Teste", 1.99, true);
        echo "<h2>Como saber se deu certo? </h2>";
        Var_dump($array);
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        echo "<pre>";
        Var_dump($array);
        echo "</pre>";

        for($i = 0; $i < count($array); $i++){
            echo "$array[$i] <br>";
        }
    ?>

    <p>Existem diversas formas de criar uma variável array.</p>
    <pre>
        array(
            chave => valor;
            chave2 => valor2;
            chave3 => valor3;
            ...
        )
    </pre>
    <p>Esse tipo de Array (chave e valor) funciona da mesma forma porém não existem mais os índices com números passando a usar string com chave para os valores.</p>
    <?php
        $array = array(
            "foo" => "bar",
            "bar" => "foo",
        );

        // Utilizando a sintaxe curta
        $array = [
            "foo" => "bar",
            "bar" => "foo",
        ];
        echo "<pre>";
        print_r($array);
        echo "</pre>";

        $resultados = [
            "Id" => 1,
            "Nome" => "Marcos",
            "Idade" => 17,
            "Salário" => 5678.95,
        ];
        echo "<pre>";
        print_r($resultados);
        echo "</pre>";
    ?>
    <p>Para varrer todo o array de chave e valores precisamos de um laço de repetição exclusivo chamado foreach()</p>
        <pre>
            foreach($array as $CHAVE => $VALOR)
            {
                echo $array[$CHAVE];
                //ou
                echo $VALOR;
            }
        </pre>
        <?php    //  Variavel Array  Chave   valor
            foreach($resultados as $CHAVE => $VALOR)
            {
                echo "Valor pela Chave:".$resultados[$CHAVE]."<br>";
                //ou
                echo "Apenas Valor: ".$VALOR."<br>";
                echo "Apenas Chave: ".$CHAVE."<br>";
            }
            ?>
<?php include "rodape.php"; ?>