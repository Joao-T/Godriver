<?php
$img = $_POST["img"];
$marca = $_POST["marca"];
$nome = $_POST["nome"];
$valor = $_POST["valor"];


include_once 'conexao.php';

$sql = "INSERT into carros(img, nome, marca, valor,) values('".$img."', '".$marca."', '".$nome."', '".$valor."')";

if(mysqli_query($con, $sql)){
    $msg = "Cadastrado com sucesso!";
}else{
    $msg = "Erro no cadastro!";
}

?>