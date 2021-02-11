<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="shortcut icon" href="img/pencil.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Lista de Produtos</title>
    <?php include_once 'Banco/conexao.php'; ?>
</head>
<body>
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admpage.php">Adm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Lista de Produtos</a>
                </li>
            </ul>
        </div>
        <?php

            $prod = $_POST['busca_prod'];
            if ($prod != "") {
                $consulta = "select *from tbproduto where tipo LIKE '%$prod%';";
            }
            else{
                $consulta = "select *from tbproduto";
            }
            $executar = mysqli_query($conn, $consulta);
            $resultado = mysqli_num_rows($executar);
            if ($resultado == 0) {
                echo "<script>alert('Infelizmente não foi possível localizar o produto, favor digitar corretamente o tipo que deseja localizar.')</script>";
            }
            while ($linha = mysqli_fetch_array($executar)) { ?>
            
            <div class="col-sm">
            <div class="input-group mb-3">
                <div class="card-body" style="width: 18rem;">
                    <form action="PHP/altera_prod.php" method="post">
                        <p class="card-header">Código :<input type="text" value="<?php echo $linha['cod_prod']; ?>" name="cod_prod" readonly></p>
                        <h5 class="card-title">Tipo :<input type="text" value="<?php echo $linha['tipo']; ?>" name="tipo" ></h5>
                        <p class="card-text">Gênero : <input type="text" value="<?php echo $linha['genero']; ?>" name="genero" ></p>
                        <p class="card-text">Tamanho :<input type="number" value="<?php echo $linha['tamanho']; ?>" name="tamanho" ></p>
                        <p class="card-text">Cor :<input type="text" value="<?php echo $linha['cor']; ?>" name="cor" ></p>
                        <p class="card-text">Preço :<input type="number" value="<?php echo $linha['preco']; ?>" name="preco" ></p>
                        <p class="card-text">Quantidade :<input type="number" value="<?php echo $linha['quantidade']; ?>" name="qtd"></p>
                        <button type="submit" style="border:none"><img src="img/pencil.png" alt="alterar" width="25" height="25" title="alterar"></button>
                        <a href="PHP/pre_excluirproduto.php?id=<?php echo $linha['cod_prod']; ?>"><img src="img/excluir.png" alt="excluir" width="25" height="25" title="excluir"></a>
                    </form>
                   
                    
                    <br/>
                    <a href="cadproduto.php">Voltar</a>
                </div>
            </div>
            </div>

        <?php } ?>
    </div>
</body>
</html>