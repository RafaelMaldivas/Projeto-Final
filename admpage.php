
<?php
  SESSION_START();
  if ($_SESSION['usuario']) {
    $user = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="shortcut icon" href="img/smile.png" type="image/x-icon">
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
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cadastrar
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="cadcliente.php">Clientes</a>
          <a class="dropdown-item" href="cadfuncionario.php">Funcionários</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="cadproduto.php">Produtos</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<br/><br/>
<div class="container-md">
  <h1>Seja Bem Vindo Administrador <span class="badge badge-primary"><?php echo $user; ?></span></h1>

  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="cadfuncionario.php">
          <img src="img/funcionario_carrossel.png" class="d-block w-100" alt="funcionario">
          <div class="carousel-caption d-none d-sm-block">
            <span class="badge badge-primary"><h5>Funcionário</h5></span>
            <p>Cadastrar Funcionários</p>
          </div>
        </a>
      </div>
      <div class="carousel-item">
        <a href="cadcliente.php">
        <img src="img/cliente_carrossel.png" class="d-block w-100" alt="clientes">
        <div class="carousel-caption d-none d-md-block">
          <span class="badge badge-primary"><h5>Clientes</h5></span>
          <p>Cadastrar Clientes</p>
        </a>
        </div>
      </div>
      <div class="carousel-item">
        <a href="cadproduto.php">
        <img src="img/produto_carrossel.png" class="d-block w-100" alt="produto">
        <div class="carousel-caption d-none d-md-block">
          <span class="badge badge-primary"><h5>Produto</h5></span>
          <p>Cadastrar Produtos</p>
        </a>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



</body>
</html>

  <?php }else{
    echo "<script> alert('falha ao logar, tente novamente!')
    window.location='PHP/login.php' </script>"; 
  }
  $user = ""; ?>