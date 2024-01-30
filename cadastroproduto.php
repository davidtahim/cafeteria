<?php

include 'conexao.php';

$produto = $_POST['produto'];
$descricao = $_POST['descricao'];
$categoria = $_POST['categoria'];
$estoque = $_POST['estoque'];
$preco = $_POST['preco'];

        $sql = "INSERT INTO produtos ( produto, descricao, categoria, estoque, preco) VALUES ('$produto','$descricao','$categoria','$estoque','$preco')";

        $inserir = mysqli_query($conexao,$sql);



header('Location: formproduto.php');







?>