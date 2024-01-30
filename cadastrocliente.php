<?php

include 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cpfcnpj = $_POST['cpfcnpj'];
$cep = $_POST['cep'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$arquivo = $_FILES['imagem'];

if($arquivo !== null) {
    preg_match("/\.(png|jpg|jpeg){1}$/i", $arquivo["name"],$ext);

    if($ext == true) {
        $nome_arquivo = md5(uniqid(time())) . "." . $ext[1];
        $caminho_arquivo = "imagens/".$nome_arquivo;
        move_uploaded_file($arquivo['tmp_name'],$caminho_arquivo);

        $sql = "INSERT INTO `clientes`(`nome`, `email`, `telefone`, `cpfcnpj`, `cep`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `imagem`) VALUES ('$nome','$email','$telefone','$cpfcnpj','$cep','$logradouro','$numero','$complemento','$bairro','$cidade','$uf','$nome_arquivo')";

        $inserir = mysqli_query($conexao,$sql);

    }
}



header('Location: formcliente.php');







?>