<?php

    include_once '../Banco/conexao.php';

    $cod = $_POST['cod_func'];
    $nome_fun = $_POST['cxnomefun'];
    $idade = $_POST['cxidade'];
    $cpf = $_POST['cxcpf'];
    $cargo = $_POST['cxcargo'];
    $salario = $_POST['cxsalario'];
    
    $alterar = "
        update tbfuncionario set 
        nome_func = '$nome_fun', idade = '$idade', cpf = '$cpf',
        cargo = '$cargo', salario = '$salario'
        where
        cod_funcionario = '$cod';
    ";

    $executar = mysqli_query($conn, $alterar);
    if ($alterar) {
        echo "<script>
            alert('dados alterados com sucesso !')
            window.location='../cadfuncionario.php';
        </script>";
    }else {
        echo "<h1>Não Foi Possível alterar os Dados</h1>";
        echo "<br/><a href='../cadfuncionario.php'>Voltar</a>";
    }




?>