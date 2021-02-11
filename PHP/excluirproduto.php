
<?php
    include_once '../Banco/conexao.php';
    
    $cod = $_GET["id"];

    $excluir = "delete from tbproduto where cod_prod = '$cod'";
    $executar = mysqli_query($conn, $excluir);
    if ($executar) {
        echo "<script> 
        alert('Produto Excluído com Sucesso !!');
        window.location='../cadproduto.php';
        </script>";
    }else {
        echo "ERRO !! Produto NÃO excluído !! <br/>";
        echo "<a href='../admpage.php'>Voltar</a>";
    }  

?>