<?php

    include_once '../Banco/conexao.php';

    $cod = $_POST['cod_prod'];
    $tipo = $_POST['tipo'];
    $genero = $_POST['genero'];
    $tamanho = $_POST['tamanho'];
    $cor = $_POST['cor'];
    $preco = $_POST['preco'];
    $qtd = $_POST['qtd'];

    $alterar = "
        update tbproduto set 
        tipo = '$tipo', genero = '$genero', tamanho = '$tamanho',
        cor = '$cor', preco = '$preco', quantidade = '$qtd'
        where
        cod_prod = '$cod';
    ";

    $executar = mysqli_query($conn, $alterar);
    if ($alterar) {
        echo "<script>
            alert('dados alterados com sucesso !')
            window.location='../cadproduto.php';
        </script>";
    }else {
        echo "<h1>Não Foi Possível alterar os Dados</h1>";
        echo "<br/><a href='../cadproduto.php'>Voltar</a>";
    }




?>