<?php
session_start();
require 'conexao.php';

if(isset($_POST['delete']))
{
    $car_id = mysqli_real_escape_string($con, $_POST['delete']);

    $query = "DELETE FROM carros WHERE id_carros='$car_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Veículo excluido com sucesso";
        header("Location: sistemacarros.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Não foi possivel excluir o aluno";
        header("Location: sistemacarros.php");
        exit(0);
    }
}

if(isset($_POST['update_car']))
{
    $car_id = mysqli_real_escape_string($con, $_POST['car_id']);

    $img = mysqli_real_escape_string($con, $_POST['img']);
    $marca = mysqli_real_escape_string($con, $_POST['marca']);
    $nome = mysqli_real_escape_string($con, $_POST['nome']);
    $valor = mysqli_real_escape_string($con, $_POST['valor']);

    $query = "UPDATE carros SET img='$img', marca='$marca', nome='$nome', valor='$valor' WHERE id_carros='$car_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Veículo atualizado com sucesso";
        header("Location: sistemacarros.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Veículo não atualizado";
        header("Location: sistemacarros.php");
        exit(0);
    }

}


if(isset($_POST['save_car']))
{
    $img = mysqli_real_escape_string($con, $_POST['img']);
    $marca = mysqli_real_escape_string($con, $_POST['marca']);
    $nome = mysqli_real_escape_string($con, $_POST['nome']);
    $valor = mysqli_real_escape_string($con, $_POST['valor']);

    $query = "INSERT into carros(img, marca, nome, valor) values('".$img."', '".$marca."', '".$nome."', '".$valor."')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Veículo cadastrado com sucesso!";
        header("Location: cadastrarcarro.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Veículo não cadastrado";
        header("Location: cadastrarcarro.php");
        exit(0);
    }
}

?>