<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/bored.png" type="image/x-icon">
    <title>Login</title>
</head>
<body>
<br/><br/>
<h1 class="container-md">Tela de Login</h1>
<br/><br>
<div class="container-sm">
<div class="sm-flex">
<form action="../Banco/validar.php" method="POST">
    <div class="form-group">
    <label for="exampleInputEmail1">Usuário</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="login">
    <small id="emailHelp" class="form-text text-muted">Certifique-se de colocar seu email corretamente </small>
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="senha">
    </div>
    <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Lembre-me</label>
    <br/>
     <div class="form-check">
      <input class="form-check-input" type="radio" name="perfil" id="exampleRadios1" value="user" checked>
      <label class="form-check-label" for="exampleRadios1">
        Comum User
      </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="perfil" id="exampleRadios2" value="adm">
    <label class="form-check-label" for="exampleRadios2">
      Adm
    </label>
    </div>
    <br/>
    <button type="submit" class="btn btn-success">Entrar</button>
    </form>
    <button class="btn btn-warning"><a href="../index.html">Voltar</a></button>
</div>
</div>
</div>
</body>
</html>