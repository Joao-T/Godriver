<?php

$servidor = "localhost";
$dbusuario = "root";
$dbsenha = "senac";
$dbname = "GoDriver";

$con = new mysqli($servidor, $dbusuario, $dbsenha, $dbname);


if ($con->connect_error) {
    die("Conexão falhou: " . $con->connect_error);
}

$email = $_POST['email'];
$senha_atual = $_POST['senha_atual']; 
$nova_senha = $_POST['nova_senha']; 

// Verificar se a senha atual é válida (substitua com a lógica apropriada)
$verificar_senha = "SELECT senha FROM cliente WHERE email='$email' LIMIT 1";
$result = $con->query($verificar_senha);
$row = $result->fetch_assoc();

if ($result->num_rows > 0 && $row['senha'] === $senha_atual) {
    // Atualizar a senha no banco de dados
    $atualizar_senha = "UPDATE cliente SET senha='$nova_senha' WHERE email='$email'";
    if ($con->query($atualizar_senha) === TRUE) {
        echo "Senha atualizada com sucesso!";
    } else {
        echo "Erro ao atualizar a senha: " . $con->error;
    }
} else {
    echo "Senha atual incorreta.";
}

$con->close();
?>