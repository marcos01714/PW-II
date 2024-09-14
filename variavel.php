<?php include "cabecalho.php"; ?>
      <h1>Variáveis em PHP</h1>
      <p> $Numero = 10; //Aqui é uma variável inteira. </p>
      <p> $String = "Marcos camisa 10"; </p>
      <p> $String1 = "Marcos camisa 10".$numero; </p>
      <p> $String2 = "Marcos camisa 10 $numero"; </p>
      <p> $ValorDecimal = 10.50; </p>
      <p> $Ativo = true; </p>
      <p> /* Aqui é um bloco de comentário */ </p>
      <?php //Tudo que está entre as tags "PHP", não aparece na tela. ?>

      <?php //A não ser que usemos a função echo com string.  ?>
        <?php 
            echo "Hello World"; 
            echo "<br>";
            $numero = 10;
            $nome = "Marcos";
            $frase1 = "<p> $nome camisa $numero Frase com parágrafo </p>";
            $frase2 = $nome."  camisa  ".$numero; //Concatenação das antigas
            echo $frase1;
            echo "$frase2 É o que tem dentro da variável";
        ?>
<?php include "rodape.php"; ?>