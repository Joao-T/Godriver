<?php
session_start();
$idProduto = $_GET['id'];

{
    if(isset($_GET['remover']) && $_GET['remover']== "carrinho")
unset($_SESSION['itens'][$idProduto]);
echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=carrinho.php"/>';

}


?>