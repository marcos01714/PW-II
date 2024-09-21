<?php
    echo "<h1>Exercício 1</h1>";

    $nome = "Marcos";
    $idade = 17;

    echo "<h3>Meu nome é ".$nome." e tenho ".$idade." anos.</h3>";
    echo "<br>";
    echo "<hr>";
?>

<?php
    echo "<h1>Exercício 2</h1>";

    $numero = rand(54, 185);

    if ($numero % 2 == 0) {
        echo "<h3>O número ".$numero." é par</h3>";
    }
    else {
        echo "<h3>O número ".$numero." é ímpar</h3>";
    }

    echo "<hr>"
?>

<?php
    echo "<h1>Exercício 3</h1>";

    for ($i = 584; $i <= 1970; $i++) {
        echo "<h3>Numero: ".$i."</h3>";
        if ($i % 2 == 0) {
            echo "<h3>Este número é par.</h3>";
        }
    }
    echo "<hr>";
?>

<?php
    echo "<h1>Exercício 4</h1>";

    $frutas = array('Maçã', 'Manga', 'Banana', 'Laranja', 'Uva');

    foreach ($frutas as $fruta) {
        echo "<h3>Fruta: ".$fruta."</h3>";
    }

    echo "<hr>";

    $clientes = array(
        array('nome' => 'Marcos', 'telefone' => '(14)99181-4476', 'cep' => '17283-100'),
        array('nome' => 'Matheus', 'telefone' => '(14)99890-7689', 'cep' => '16752-045'),
        array('nome' => 'Jonas', 'telefone' => '(14)99146-4597', 'cep' => '16768-098'),
        array('nome' => 'Wylliam', 'telefone' => '(14)99764-8428', 'cep' => '16675-015')
    );

    echo "<h1>Clientes:</h1>";
    foreach ($clientes as $cliente) {
        echo "<h3>Nome: ".$cliente['nome']."</h3><br>";
        echo "<h3>Telefone: ".$cliente['telefone']."</h3><br>";
        echo "<h3>CEP: ".$cliente['cep']."</h3><br>";
        echo "------------------------------------------";
    }
    echo "<hr>";
?>