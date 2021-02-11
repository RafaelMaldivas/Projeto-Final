<?php
  SESSION_START();
  if ($_SESSION["user"]) {
    $user = $_SESSION['user'];
  ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="shortcut icon" href="img/kiss.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Sapataria Papatinho</title>
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.html">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="listarfunc.php">Listar Funcionário <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admpage.php">Admin</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="listarfunc.php" method="post">
      <input class="form-control mr-sm-2" type="search" placeholder="Procurar Funcionário" name="busca_func" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
    </form>
  </div>
</nav>
<div class="container-md">
  <h1>Cadastro de Funcionários</h1>
  <form action="Banco/dadosfuncionario.php" method="post">
    <div class="form-group">
      <span class="d-block p-2 bg-primary text-white">
      <label>Nome Completo :</label>
      <input type="text" class="form-control" name="cxnomefun" placeholder="nome completo">
      <label >Idade :</label>
      <input type="number" name="cxidade" class="form-control">
      </span>
    </div>
    <span class="d-block p-2 bg-dark text-white">
    <label>CPF</label>
    <div class="form-group">
      <input class="form-control" type="number" name="cxcpf">
    </div>
    </span>
    <div class="form-group">
    <span class="d-block p-2 bg-primary text-white">
      <div class="form-group">
        <label>Cargo :</label>
        <input type="text" name="cxcargo">
      </div>
      <div class="form-group">
        <label>Salário :</label>
        <input type="number" name="cxsalario" >
      </div>
      </span>
    </div>
      <span class="border-bottom">
     <div class="col-sm-10">
      <button type="submit" class="btn btn-success">Cadastrar</button>
      </span> 
    </div>
 
  </form>
</div>

</body>
</html>

 <?php }else {
                echo "<script>alert('Usuário Não Autorizado !');
                window.location='PHP/login.php';
                </script>";
            }