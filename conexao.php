<?php


$servidor = "localhost";
$dbusuario = "root";
$dbsenha = "joao123";
$dbname = "godriver";

$con = mysqli_connect("localhost","root","joao123","godriver");
if(!$con){
    die('Falha na conexão. '.mysqli_connect_error());
}
?>