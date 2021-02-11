<?php

    include_once '../Banco/conexao.php';

    $cod = $_POST['cod_cliente'];
    $nome_cli = $_POST['cxnomecli'];
    $data_nasc = $_POST['cxdatnasc'];
    $sexo = $_POST['cxsexo'];
    $email = $_POST['cxemail'];
    $celular = $_POST['cxcel'];
    
    $alterar = "
        update tbcliente set 
        nome = '$nome_cli', data_nasc = '$data_nasc', sexo = '$sexo',
        email = '$email', celular = '$celular'
        where
        cod_cliente = '$cod';
    ";

    $executar = mysqli_query($conn, $alterar);
    if ($alterar) {
        echo "<script>
            alert('dados alterados com sucesso !')
            window.location='../cadcliente.php';
        </script>";
    }else {
        echo "<h1>Não Foi Possível alterar os Dados</h1>";
        echo "<br/><a href='../cadcliente.php'>Voltar</a>";
    }




?>