<?php
    SESSION_START();
    
    $login = $_POST['login'];
    $senha = isset($_POST["senha"])?md5($_POST["senha"]):"";
    $perfil = $_POST['perfil'];
    include_once 'conexao.php';
    $log = mysqli_query($conn, "select *from tbusuario where user = '$login' and senha = '$senha' and perfil = '$perfil'")or die(mysql_error);
    
    $linha = mysqli_fetch_array($log);

    
    if ($login == "" || $senha == "") {
        
        echo "
            <script>
                alert('Erro ao efetuar o login, tente novamente')
                window.location = '../PHP/login.php';
            </script>
        ";
    }
    if($login != $linha['user'] && $senha != $linha['senha']) {
        echo "
            <script>
                alert('Erro ao efetuar o login, tente novamente')
                window.location = '../PHP/login.php';
            </script>
        ";
    }
    if($login == $linha['user'] && $senha == $linha['senha'] && $perfil == "adm") {
        $_SESSION["usuario"] = $login;
        echo "<script>
                alert('Bem Vindo ao login de administrador !')
                window.location='../admpage.php'
            </script>";

    }if($login == $linha['user'] && $senha == $linha['senha'] && $perfil == "user"){
         echo "<script>
                alert('Bem Vindo ao login de usuário !')
                window.location='../index.html'
            </script>";
    }

  
?>