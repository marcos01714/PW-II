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
      <h1>Laço de repetição While</h1>
        <p>O laço de repetição while necessita de 3 itens para se tornar um loop: </p>
        <ol>
            <li>Variável controladora</li>
            <li>Condição de continuação</li>
            <li>Incremento da variável controladora</li>
            </ol>
            <pre>
                $i = 0; //Declaração da variável controladora
                while ($i > 10) {
                    //Executa esse bloco de código
                    
                    //Incremento da variável controladora
                    $i = $i + 1;
                    $i ++;
                    $i += 1;
                }
            </pre>
                <p>A derivação "Do while" obrigatoriamente executa no mínimo uma vez o bloco de código</p>
                <pre>
                    $i = 0;
                    do{
                        $i ++;
                    }while($i < 10);
                </pre>
                    <?php 
                        $i = 1;
                        while($i < 21){
                            echo "<h1> $i ° h1 </h1>";
                            $i ++;
                        }
                    ?>
                    <p>Outra forma de implementação é: </p>
                    <?php
                        $i = 1;
                        do{
                            ?>        
                                <h2> HTML normal</h2>
                                <p> <?php echo $i; ?> </p>
                            <?php
                        $i ++;        
                        }while($i < 5);
                    ?>
  </div>
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>