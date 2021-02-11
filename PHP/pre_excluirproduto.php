<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once '../Banco/conexao.php'; ?>
    <link rel="shortcut icon" href="../img/bored.png" type="image/x-icon">
    <title>Deletar</title>
</head>
<body>
    <?php
        $cod = $_GET['id'];
        $consulta = "select *from tbproduto where cod_prod = '$cod'";
        $executar = mysqli_query($conn, $consulta); 
        $linha = mysqli_fetch_array($executar);
    ?>
    <h2>Tem certeza que deseja Excluir esse Cliente ? </h2>
    <br/>
    <button><a href="excluirproduto.php?id=<?php echo $cod;?>">SIM</a></button>
    <button><a href="../cadproduto.php">NÃO</a></button>
</body>
</html>
