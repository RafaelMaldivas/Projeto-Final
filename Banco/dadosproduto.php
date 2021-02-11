<?php

    if ($_POST['cxtipo'] != "") {
        
        include_once '../Banco/conexao.php';

        $tipo = $_POST['cxtipo'];
        $genero = $_POST['cxgenero'];
        $tamanho = $_POST['cxtamanho'];
        $cor = $_POST['cxcor'];
        $preco = $_POST['cxpreco'];
        $qtd = $_POST['cxqtd'];
        

        $sql = "insert into tbproduto(tipo, genero, tamanho, cor, preco, quantidade)
        values ('$tipo','$genero', '$tamanho', '$cor', '$preco', '$qtd')";

        $query = mysqli_query($conn, $sql);

        echo "Dados Cadastrados com Sucesso !!";
    }
    else{
        echo "Não foi possível realizar o cadastro !!";
    }
   
    echo"<br/><a href='../cadproduto.php'>voltar</a>";
?>