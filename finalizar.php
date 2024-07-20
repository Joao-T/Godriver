<?php
session_start();
$conexao = new PDO('mysql:host=localhost;dbname=GoDriver', 'root', 'joao123');

foreach ($_SESSION['dados'] as $produtos) {
    $insert = $conexao->prepare("INSERT INTO pedidos (id_produto, quantidade, preco, total, data_pedido) VALUES (?,?,?,?,now())");
    $insert->bindParam(1, $produtos['id_produto']);
    $insert->bindParam(2, $produtos['quantidade']);
    $insert->bindParam(3, $produtos['preco']);
    $insert->bindParam(4, $produtos['total']);
    $insert->execute();
}

header('Location: pagamento.php');
exit();
?>