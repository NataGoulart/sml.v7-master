<?php
    $Id_produto = $_GET["idprod"];
    $quantidade      = $_GET["quantidade"];
    include("conecta.php");
    

    $comando = $pdo->prepare("INSERT INTO carrinho Values($idprod, $quantidade)");
    $resultado = $comando->execute();
    //para voltar no formulário:
    header("location: carrinho.php");
    ?>