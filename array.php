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
        <li class="nav-item">
        <a class="nav-link" href="if.php">If</a>
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
          <a class="nav-link" href="array.php">Array</a>
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
</div>
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>