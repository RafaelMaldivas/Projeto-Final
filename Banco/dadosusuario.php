<?php

    if ($_POST['cxuser'] != "") {
        
        include_once '../Banco/conexao.php';

        $usuario = $_POST['cxuser'];
        $senha = $_POST['cxsenha'];
        $perfil = $_POST['perfil'];

        $sql = "insert into tbusuario(user, senha, perfil)
        values ('$usuario','$senha')";

        $query = mysqli_query($conn, $sql);

        echo "Dados Cadastrados com Sucesso !!";
    }
    else{
        echo "Não foi possível realizar o cadastro !!";
    }
   
    echo"<br/><a href='../PHP/login.php'>Voltar</a>";
?>