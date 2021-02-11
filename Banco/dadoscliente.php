<?php

    if ($_POST['cxnomecli'] != "") {
        
        include_once '../Banco/conexao.php';

        $nome_cli = $_POST['cxnomecli'];
        $data_nasc = $_POST['cxdatanasc'];
        $sexo = $_POST['cxsexo'];
        $email = $_POST['cxemail'];
        $celular = $_POST['cxcel'];

        $sql = "insert into tbcliente(nome, data_nasc, sexo, email, celular)
        values ('$nome_cli','$data_nasc', '$sexo', '$email', '$celular')";

        $query = mysqli_query($conn, $sql);

        echo "Dados Cadastrados com Sucesso !!";
    }
    else{
        echo "Não foi possível realizar o cadastro !!";
    }
   
    echo"<br/><a href='../cadcliente.php'>Voltar</a>";
?>