<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="shortcut icon" href="img/bored.png" type="image/x-icon">
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
        <a class="nav-link" href="listarproduto.php">Listar Produtos<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admpage.php">Admin</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="post" action="listarproduto.php">
      <input class="form-control mr-sm-2" type="search" placeholder="Procurar" aria-label="Search" name="busca_prod">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
    </form>
  </div>
</nav>


<div class="container-md">
  <h1>Cadastro de Produtos</h1>
  <form action="Banco/dadosproduto.php" method="post">
    <div class="form-group">
      <span class="d-block p-2 bg-primary text-white">
        <div class="form-group">
          <label>Tipo :</label>
          <select class="form-control" name="cxtipo">
            <option>Escolha o tipo de Calçado</option>
            <option value="social">Sapato Social</option>
            <option value="salto alto">Sapato Salto Alto</option>
            <option value="sandalia">Sandália</option>
            <option value="chinelo">Chinelo</option>
            <option value="sapatenis">Sapatênis</option>
            <option value="tenis">Tênis</option>
          </select>
        </div>
      </span>
    Gênero :
    <div class="form-check">
      <input class="form-check-input" type="radio" name="cxgenero" id="exampleRadios1" value="masculino" checked>
      <label class="form-check-label" for="exampleRadios1">
        Masculino
      </label>
    </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="cxgenero" id="exampleRadios2" value="feminino">
    <label class="form-check-label" for="exampleRadios2">
      Feminino
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="cxgenero" id="exampleRadios3" value="infantil">
    <label class="form-check-label" for="exampleRadios3">
      Infantil
    </label>
  </div>

    </div>
    <span class="d-block p-2 bg-dark text-white">
    <label>Tamanho</label>
    <div class="form-group">
      <input class="form-control" type="number" name="cxtamanho">
    </div>
    </span>
    <span class="d-block p-2 bg-primary text-white">
        <div class="form-group">
          <label>Cor :</label>
          <select class="form-control" name="cxcor">
            <option>Escolha a cor</option>
            <option value="preto">Preto</option>
            <option value="marrom">Marrom</option>
            <option value="vernelho">Vermelho</option>
            <option value="verde">Verde</option>
            <option value="amarelo">Amarelo</option>
            <option value="rosa">Rosa</option>
            <option value="azul">Azul</option>
          </select>
        </div>
      </span>
     <span class="d-block p-2 bg-dark text-white">
      <label>Preço</label>
      <div class="form-group">
        <input class="form-control" type="number" name="cxpreco">
    </div>
    
      <div class="form-group">
        <label>Quantidade :</label>
        <input type="number" name="cxqtd" >
      </div>
     
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