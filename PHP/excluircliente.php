

<?php
    include_once '../Banco/conexao.php';
    
    $cod = $_GET["id"];

    $excluir = "delete from tbcliente where cod_cliente = '$cod'";
    $executar = mysqli_query($conn, $excluir);
    if ($executar) {
        echo "<script> 
        alert('Cliente Excluído com Sucesso !!');
        window.location='../cadcliente.php';
        </script>";
    }else {
        echo "ERRO !! Cliente NÃO excluído !! <br/>";
        echo "<a href='../admpage.php'>Voltar</a>";
    }  

?>


