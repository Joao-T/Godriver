<?php
session_start();
require 'conexao.php';

if(isset($_POST['delete']))
{
    $client_id = mysqli_real_escape_string($con, $_POST['delete']);

    $query = "DELETE FROM cliente WHERE id_cliente='$client_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Cliente excluido com sucesso";
        header("Location: sistema.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Não foi possivel excluir o aluno";
        header("Location: sistema.php");
        exit(0);
    }
}

if(isset($_POST['update_client']))
{
    $client_id = mysqli_real_escape_string($con, $_POST['client_id']);

    $nome = mysqli_real_escape_string($con, $_POST['nome']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $tel = mysqli_real_escape_string($con, $_POST['tel']);
    $cpf = mysqli_real_escape_string($con, $_POST['cpf']);
    $sexo = mysqli_real_escape_string($con, $_POST['sexo']);
    $senha = mysqli_real_escape_string($con, $_POST['senha']);

    $query = "UPDATE cliente SET nome='$nome', email='$email', senha='$senha', tel='$tel', CPF='$cpf', sexo='$sexo' WHERE id_cliente='$client_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Cliente atualizado com sucesso";
        header("Location: sistema.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Cliente não atualizado";
        header("Location: sistema.php");
        exit(0);
    }

}


if(isset($_POST['save_client']))
{
    $nome = mysqli_real_escape_string($con, $_POST['nome']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $tel = mysqli_real_escape_string($con, $_POST['tel']);
    $cpf = mysqli_real_escape_string($con, $_POST['cpf']);
    $sexo = mysqli_real_escape_string($con, $_POST['sexo']);
    $senha = mysqli_real_escape_string($con, $_POST['senha']);

    $query = "INSERT into cliente(nome, email, senha, tel, CPF, sexo) values('".$nome."', '".$email."', '".$senha."', '".$tel."', '".$cpf."', '".$sexo."')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Cliente cadastrado com sucesso!";
        header("Location: cadastro.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Cliente não cadastrado";
        header("Location: Cadastro.php");
        exit(0);
    }
}

?>