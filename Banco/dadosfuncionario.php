<?php

    if ($_POST['cxnomefun'] != "") {
        
        include_once '../Banco/conexao.php';

        $nome_fun = $_POST['cxnomefun'];
        $idade = $_POST['cxidade'];
        $cpf = $_POST['cxcpf'];
        $cargo = $_POST['cxcargo'];
        $salario = $_POST['cxsalario'];

        $sql = "insert into tbfuncionario(nome_func, idade, cpf, cargo, salario)
        values ('$nome_fun','$idade', '$cpf', '$cargo', '$salario')";

        $query = mysqli_query($conn, $sql);

        echo "Dados Cadastrados com Sucesso !!";
    }
    else{
        echo "Não foi possível realizar o cadastro !!";
    }
   
    echo"<br/><a href='../cadcliente.php'>Voltar</a>";
?>