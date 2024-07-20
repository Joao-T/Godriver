<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pag Alugueis</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <style>
 body{
    
    background-color: #999999;
color: black;
font-family: 'Cabin', sans-serif;
  
}
.container{
    margin:auto;
    max-width: 600px;
}
.container a{
   text-decoration: none;
   background-color:#87cefa;
   padding:5px;
   border-radius: 5px; 
}
.titulo{
    margin:auto;
    text-align: center;
    margin-bottom: 50px;
}

        </style>
</head>
<body>
    <div class="titulo">
        <h2> Alugueis</h2>
        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-car-front-fill" viewBox="0 0 16 16">
  <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17 1.247 0 3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"/>
</svg>
    </div>
<div class="container">

<?php
session_start();
$totalt = null;
if (!isset($_SESSION['itens'])){
$_SESSION['itens'] = array();
}
if (isset($_GET['add']) && $_GET['add'] =="carrinho"){
 //adiciona ao carrinho
    $idProduto = $_GET['id'];
    if (!isset ($_SESSION['itens'][$idProduto]))
    {
        $_SESSION['itens'][$idProduto] = 1;
    }else{
        $_SESSION['itens'][$idProduto] += 1;
    }
}
// exibe o carrinho
if (count($_SESSION['itens']) == 0) {
    echo "Carrinho está Vazio!<br><br><a href='aluguel.php'> Quero alugar!</a>";
}else{

    $_SESSION['dados']= array();
    //include('conexao.php');
    $conexao = new PDO('mysql:host=localhost;dbname=GoDriver','root','joao123');
    foreach($_SESSION['itens'] as $idProduto => $quantidade)
    {
    $select = $conexao -> prepare("select * from produtos where id=?");
    $select->bindParam(1,$idProduto);
    $select -> execute();
    $produtos = $select ->fetchAll();
    //var_dump($produtos);
    $total= $quantidade * $produtos[0]["preco"];
    $totalt +=  $total;
    echo   'Nome: '.$produtos[0]["nome"].'<br>
            Preço: '.number_format($produtos[0]["preco"] ,2,",",".").'<br>
            Quantidade: '.$quantidade.'<br>
            Total : '.number_format($total ,2,",",".").'<br><br>
  <a href="remover.php?remover=carrinho&id='.$idProduto.'">Remover</a><br><br><br><hr>';

  array_push($_SESSION['dados'],
  array('id_produto' => $idProduto,
  "quantidade" => $produtos[0]['quantidade'],
  'preco' =>$produtos[0]['preco'],
  'total' => $total
  )
    );
 }
 echo "<strong style='color: #303030'>Total = R$".number_format($totalt ,2,",",".").'<br><br></strong>';
 echo "<a style='background-color:##87cefa'; href='alugueis.php'> Adicionar mais produtos</a>";
//botão para finalizar o pedido
echo "<br><br><a href='finalizar.php' class='link'>Finalizar Pedido</a>";



}
?>

</div>
</body>
</html>