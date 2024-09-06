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
          <a class="nav-link" href="exercicios-array.php">Exercícios array</a>
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
                          0         1         2
        $frutas = array("maçã", "laranja", "banana");

        print_r($frutas);//Escreve na tela os dados básicos

        var_dump($frutas); //Detalha os dados do array
            
        echo count($frutas); //Escreve na tela a quantidade de itens que o array possui

        array_push($frutas, "kiwi"); //Adiciona um novo item ao array

        foreach($frutas as $fruta){
            echo $fruta;
        }

        Exercício
        Gere um Array que cada índice desse array receba um novo array com as chaves Nome, idade email com seus 
        respectivos valores inventados aleatoriamente
        
        <?php
            $pessoas = array(
                array(
                    "Nome" => "Marcos",
                    "Idade" => 18,
                    "Email" => "marcosvinicius@example.com"
                ),
                array(
                    "Nome" => "Jonas",
                    "Idade" => 17,
                    "Email" => "jonassouza@example.com"
                ),
                array(
                    "Nome" => "João",
                    "Idade" => 16,
                    "Email" => "joaovitor@example.com"
                ),
                array(
                    "Nome" => "Fabiano",
                    "Idade" => 29,
                    "Email" => "fabianocardoso@example.com"
                ),
                array(
                    "Nome" => "Raphael",
                    "Idade" => 27,
                    "Email" => "raphaelveiga@example.com"
                ),
                array(
                    "Nome" => "Leonardo",
                    "Idade" => 17,
                    "Email" => "leonardoforty@example.com"
                ),
                array(
                    "Nome" => "Marcos Neris",
                    "Idade" => 40,
                    "Email" => "marcosneris@example.com"
                ),
                array(
                    "Nome" => "Viviane",
                    "Idade" => 36,
                    "Email" => "vivianedefatima@example.com"
                ),
                array(
                    "Nome" => "Mariani",
                    "Idade" => 10,
                    "Email" => "marianisanches@example.com"
                ),
                array(
                    "Nome" => "Luíz Otavio",
                    "Idade" => 9,
                    "Email" => "luizotavio@example.com"
                ),
            );
            echo "<table border = '5'>";
            echo "<tr>";
            echo "<td>Nome</td>";
            echo "<td>Idade</td>";
            echo "<td>Email</td>";
            echo "</tr>";
            for($i = 0; $i < count($pessoas); $i++) {
                echo "<tr>";
                echo "<td>".$pessoas[$i]["Nome"]."</td>";
                echo "<td>".$pessoas[$i]["Idade"]."</td>";
                echo "<td>".$pessoas[$i]["Email"]."</td>";
                echo "</tr>";
            }
            echo "</table>";

            echo "<table border = '5'>";
            echo "<tr>";
            echo "<td>Nome</td>";
            echo "<td>Idade</td>";
            echo "<td>Email</td>";
            echo "</tr>";
            foreach($pessoas as $itemLista) {
                echo "<tr>";
                echo "<td>".$itemLista["Nome"]."</td>";
                echo "<td>".$itemLista["Idade"]."</td>";
                echo "<td>".$itemLista["Email"]."</td>";
                echo "</tr>";
            }
            echo "</table>";
        ?>
</div>
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>