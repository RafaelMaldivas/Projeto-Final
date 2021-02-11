<?php 
    SESSION_START();
    if($_SESSION['user']){
        $user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="shortcut icon" href="img/nerd.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Lista de Funcionários</title>
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
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Lista de Funcionários</a>
                </li>
            </ul>
        </div>
        <?php
            $func = $_POST["busca_func"];
            if ($func != "") {
                $consulta = "select *from tbfuncionario where nome_func LIKE '%$func%'";
            }
            else{
                $consulta = "select *from tbfuncionario";
            }
            $executar = mysqli_query($conn, $consulta);
            $resultado = mysqli_num_rows($executar);
            if ($resultado == 0) {
               echo "<script>alert('Infelizmente não foi possível localizar o funcionário, favor digitar corretamente o nome que deseja localizar.')</script>";
            }
            while ($linha = mysqli_fetch_array($executar)) { 
        ?>
            <div class="row">
            <div class="col-sm">
            <div class="input-group mb-3">
                <div class="card-body" style="width: 18rem;">
                <form action="PHP/altera_func.php" method="post">
                    <p class="card-header">Cód :<input type="text" value="<?php echo $linha['cod_funcionario']; ?>" name="cod_func" readonly></p>
                    <h5 class="card-title">Nome :<input type="text" value="<?php echo $linha['nome_func']; ?>" name="cxnomefun"></h5>
                    <p class="card-text">Idade : <input type="number" value="<?php echo $linha['idade']; ?>" name="cxidade"></p>
                    <p class="card-text">CPF :<input type="number" value="<?php echo $linha['cpf']; ?>" name="cxcpf"></p>
                    <p class="card-text">Cargo :<input type="text" value="<?php echo $linha['cargo']; ?>" name="cxcargo"></p>
                    <p class="card-text">Salário :<input type="number" value="<?php echo $linha['salario']; ?>" name="cxsalario"></p>
                    <br/>
                    <button type="submit"><img src="img/pencil.png" alt="alterar" width="25" height="25" title="alterar"></button>
                    <a href="PHP/pre_excluirfuncionario.php?id=<?php echo $linha['cod_funcionario']; ?>"><img src="img/excluir.png" alt="excluir" width="25" height="25" title="excluir"></a>
                </form>   
                    
                   
                    <br/>
                    <a href="cadfuncionario.php">Voltar</a>
                </div>
            </div>
            </div>
            </div>

        <?php } ?>
    </div>
</body>
</html>

            <?php }else {
                echo "<script>alert('Usuário Não Autorizado !');
                window.location='PHP/login.php';
                </script>";
            }