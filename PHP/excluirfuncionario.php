<?php
        include_once '../Banco/conexao.php';
      
        $cod = $_GET["id"];

        $excluir = "delete from tbfuncionario where cod_funcionario = '$cod'";
        $executar = mysqli_query($conn, $excluir);
        if ($executar) {
            echo "<script> 
            alert('Funcionário Excluído com Sucesso !!');
            window.location='../cadfuncionario.php';
            </script>";
        }else {
            echo "ERRO !! Funcionário NÃO excluído !! <br/>";
            echo "<a href='../cadfuncionario.php'>Voltar</a>";
        }  
    
    ?>
