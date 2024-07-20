
    <?php
// Conexão com o banco de dados (substitua com suas próprias credenciais)
$servidor = "localhost";
$dbusuario = "root";
$dbsenha = "senac";
$dbname = "GoDriver";

$con = new mysqli($servidor, $dbusuario, $dbsenha, $dbname);


if ($con->connect_error) {
    die("Conexão falhou: " . $con->connect_error);
}


$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha']; 


$sql = "INSERT INTO clientes (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if ($con->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro ao cadastrar: " . $con->error;
}

$con->close();
?>

</body>
</html>