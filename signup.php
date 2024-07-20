<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$sexo = $_POST["sexo"];
$senha = $_POST["senha"];
$cpf = $_POST["cpf"];

include_once 'conexao.php';

$sql = "INSERT into cliente(nome, email, senha, tel, CPF, sexo) values('".$nome."', '".$email."', '".$senha."', '".$tel."', '".$cpf."', '".$sexo."')";

if(mysqli_query($con, $sql)){
    $msg = "Cadastrado com sucesso!";
}else{
    $msg = "Erro no cadastro!";
}
mysqli_close($con);
header('location:index.php');
?>