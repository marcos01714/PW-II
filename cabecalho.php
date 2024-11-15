<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Anotações
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="variavel.php">Variável</a></li>
            <li><a class="dropdown-item" href="if.php">If</a></li>
            <li><a class="dropdown-item" href="while.php">While</a></li>
            <li><a class="dropdown-item" href="for.php">For</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="foreach.php">Foreach</a></li>
            <li><a class="dropdown-item" href="bootstrap.php">Bootstrap</a></li>
            <li><a class="dropdown-item" href="array.php">Array</a></li>
            <li><a class="dropdown-item" href="exercicios-array.php">Exercícios array</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="produtos.php">Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="novo_produto.php">Novo produto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="categoria.php">Categorias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="nova_categoria.php">Nova categoria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="usuarios.php">Usuários</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="novo_usuario.php">Novo Usuário</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container">