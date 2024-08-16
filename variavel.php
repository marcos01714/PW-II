<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial do site</title>
    <link href="bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
<nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Aula PW 2</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Página Inicial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="variavel.php">Variável</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="while.php">While</a></li>
            <li><a class="dropdown-item" href="for.php">For</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="foreach.php">Foreach</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="bootstrap.php">Bootstrap</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" >Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <div class="container">
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
  </div>
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>