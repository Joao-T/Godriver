<?php
session_start();
include('conexao.php');
if(empty($_POST['email']) || empty($_POST['senha'])){
    header('Location:form_login.php');
    exit();
}
$email = mysqli_real_escape_string($con, $_POST['email']);
$senha = mysqli_real_escape_string($con, $_POST['senha']);

$query = "SELECT * from cliente where email='$email' and senha = '$senha'";

$result = mysqli_query($con, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['email'] = $email;
    header('location: index.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location : form_login.php');
    exit();
}