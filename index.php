<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> 🚗GoDriver</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<style>
    body {
        background-color: #999999;
    }

    .image {
        flex-wrap: wrap;
        text-align: center;
    }

    .image img {
        width: 350px;
        height: 200px;
        margin: 5px;
        text-align: center;
    }

    h4 {
        text-align: center;
        color: black;


    }

    .catalogue-item {
        color: #fff;
        border: 2px solid rgb(110, 110, 110);
        background-color: #cccfcf;
        padding: 10px 40px;
        border-radius: 10px;
        font-weight: 300;
        margin-top: 10px;
        transition: all 0.3s;
        float: left;
    }

    .carros {
        margin: auto;
        max-width: 48.3%;
        text-align: center;
        display: flex;
    }

    .catalogue-item button {
        color: #fff;
        border: 2px solid darkgray;
        background-color: black;
        padding: 5px 10px;
        border-radius: 20px;
        font-weight: 700;
        margin-top: 10px;
        transition: all 0.3s;
    }

    h3 {
        text-align: center;
    }

    .aluga {
        text-align: center;
        color: black;
    }

    a {
        color: #fff;
        border: 2px solid darkgray;
        background-color: black;
        padding: 5px 10px;
        border-radius: 20px;
        font-weight: 700;
        margin-top: 10px;
        transition: all 0.3s;
        text-decoration: none;
    }
button{
        color: #fff;
        background-color: transparent;
        border: none;
        font-weight: 700;
        margin-top: 8px;
       
    }

    #logo {
        height: 104px;
        width: 105px;
        padding-top: 0px;
    }
</style>

<body>
    <!-- Nav bar -->
    <nav class="navbar navbar-expand-md bg-dark text-white" data-bs-theme="dark">
        <div class="container-fluid px-3">
            <a class="navbar-brand fs-2" href="#"><img id="logo" src="tcc/logo.png"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-0">
                    <li class="nav-item">
                        <a class="nav-link active fs-4" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-4" href="aluguel.php">Alugar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-4" href="contato.html">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-4" href="sobre.html">Sobre</a>
                    </li>
                </ul>
                
                    
                <div class="dropdown-center">
                    <button class="btn dropdown-toggle fs-4 text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-fill mb-1" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                        </svg>
                        Conta
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="form_login.php">Login</a></li>
                        <li><a class="dropdown-item" href="index.html">Cadastro</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Nav bar -->
    <!-- Nav bar 2-->
    <nav class="nav">
        <div class="container-fluid justify-content-around-between my-2">
            <div class="row">
                <div class="col-3 text-center"><br>
                    <div class="row">
                        <h2 class="fs-4">Deseja alugar um veículo?</h2>
                    </div>
                    <a href="aluguel.php" class="btn btn-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-car-front" viewBox="0 0 16 16">
                            <path d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17 1.247 0 2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276Z" />
                            <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.807.807 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155 1.806 0 4.037-.084 5.592-.155A1.479 1.479 0 0 0 15 9.611v-.413c0-.099-.01-.197-.03-.294l-.335-1.68a.807.807 0 0 0-.43-.563 1.807 1.807 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3H4.82Z" />
                        </svg> 
                    </a>
                </div>
                <div class="col">
                    <form class="d-flex justify-content-around fs-5">
                        <div class="text-center">
                            <p class="mb-1">Local de retirada:</p>
                            <div class="input-group border border-dark rounded text-black">
                                <label class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-angle" viewBox="0 0 16 16">
                                        <path d="M9.828.722a.5.5 0 0 1 .354.146l4.95 4.95a.5.5 0 0 1 0 .707c-.48.48-1.072.588-1.503.588-.177 0-.335-.018-.46-.039l-3.134 3.134a5.927 5.927 0 0 1 .16 1.013c.046.702-.032 1.687-.72 2.375a.5.5 0 0 1-.707 0l-2.829-2.828-3.182 3.182c-.195.195-1.219.902-1.414.707-.195-.195.512-1.22.707-1.414l3.182-3.182-2.828-2.829a.5.5 0 0 1 0-.707c.688-.688 1.673-.767 2.375-.72a5.922 5.922 0 0 1 1.013.16l3.134-3.133a2.772 2.772 0 0 1-.04-.461c0-.43.108-1.022.589-1.503a.5.5 0 0 1 .353-.146zm.122 2.112v-.002.002zm0-.002v.002a.5.5 0 0 1-.122.51L6.293 6.878a.5.5 0 0 1-.511.12H5.78l-.014-.004a4.507 4.507 0 0 0-.288-.076 4.922 4.922 0 0 0-.765-.116c-.422-.028-.836.008-1.175.15l5.51 5.509c.141-.34.177-.753.149-1.175a4.924 4.924 0 0 0-.192-1.054l-.004-.013v-.001a.5.5 0 0 1 .12-.512l3.536-3.535a.5.5 0 0 1 .532-.115l.096.022c.087.017.208.034.344.034.114 0 .23-.011.343-.04L9.927 2.028c-.029.113-.04.23-.04.343a1.779 1.779 0 0 0 .062.46z" />
                                    </svg>
                                </label>
                                <select name="local" id="local" class="form-control text-black">
                                    <option selected>Onde Deseja?</option>
                                    <option value="1">Brasília-DF</option>
                                    <option value="2">Goiania-GO</option>
                                    <option value="3">Rio de Janeiro-RJ</option>
                                    <option value="4">São Paulo-SP</option>
                                    <option value="5">Belo Horizonte-MG</option>
                                </select>
                            </div>
                        </div>
                        <div class="text-center">
                            <p class="mb-1">Data e hora da retirada:</p>
                            <div class="input-group border border-dark rounded text-black">
                                <label class="input-group-text text-black">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                    </svg>
                                </label>
                                <input type="date" class="form-control">
                                <span><input type="time" class="form-control"></span>
                            </div>
                        </div>
                        <div class="text-center">
                            <p class="mb-1">Data de entrega:</p>
                            <div class="input-group border border-dark rounded text-black">
                                <label class="input-group-text text-black">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                    </svg>
                                </label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <button><a href="aluguel.php">Buscar</a></button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <!-- Nav bar 2-->
    <!-- Carrosel -->
    <div id="carouselExample" class="carousel slide pointer-event" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="tcc/Gol.png" class="mx-auto d-block h-50" alt="...">
            </div>
            <div class="carousel-item">
                <img src="tcc/l200.png" class="mx-auto d-block h-50" alt="...">
            </div>
            <div class="carousel-item">
                <img src="tcc/Volkswagen.png" class="mx-auto d-block h-50" alt="...">
            </div>
            <div class="carousel-item">
                <img src="tcc/Fiat strada.png" class="mx-auto d-block h-50" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <h4>Oferta do mês 2.000km </h4>
    <div class="carros">
        <div class="container">
            <div class="catalogue-item">
                <img src="tcc/Fiorino.png" style="width: 120%">
                <p style="color: rgb(68, 67, 67); font-weight: 900">Fiat Fiorino</p>
                <p style="color: rgb(68, 67, 67);; font-weight: 800; font-size: 14px; margin-bottom: 15px">
                    À Pronta-entrega </p>
                <p></p>
                <p style="color: rgb(68, 67, 67);; font-weight: 400; font-size: 10px">
                </p>
                <p style="color: rgb(68, 67, 67);; font-weight: 700; font-size: 14px; padding: 05px 20px; border-radius: 5px;"> A partir de:</p>

                <p style="color: rgb(68, 67, 67);; font-weight: 400">
                    R$ <span style="font-weight: 900; font-size: 34px">1.990,00</span>
                </p><span style="color: rgb(68, 67, 67);; font-weight: 700; font-size: 14px">Mensal</span>
                <p></p><?php
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
    echo "<br><br><a href='alugueis.php'> Quero lugar</a>";
}else{

    $_SESSION['dados']= array();
    //include('conexao.php');
    $conexao = new PDO('mysql:host=localhost;dbname=GoDriver','root','senac');
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
 echo "<strong style='color:orange'>Total = R$".number_format($totalt ,2,",",".").'<br><br></strong>';
 echo "<a style='background-color:green'; href='alugueis.php'> Adicionar mais produtos</a>";
//botão para finalizar o pedido
echo "<br><br><a href='finalizar.php' class='link'>Finalizar Pedido</a>";



}
?>
               
            </div>
        </div>


        <div class="container">
            <div class="catalogue-item">
                <img src="tcc/Jeep.png" style="width: 120%">
                <p style="color: rgb(68, 67, 67); font-weight: 900">Jeep Renegade</p>
                <p style="color: rgb(68, 67, 67); font-weight: 800; font-size: 14px; margin-bottom: 15px">
                    À Pronta-entrega </p>
                <p></p>
                <p style="color: rgb(68, 67, 67); font-weight: 400; font-size: 10px">
                </p>
                <p style="color: rgb(68, 67, 67); font-weight: 700; font-size: 14px; padding: 05px 20px; border-radius: 5px;"> A partir de:</p>

                <p style="color: rgb(68, 67, 67); font-weight: 400">
                    R$ <span style="font-weight: 900; font-size: 34px">2.900,00</span>
                </p><span style="color: rgb(68, 67, 67); font-weight: 700; font-size: 14px">Mensal</span>
                <p></p>
                <?php
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
    echo "<br><br><a href='alugueis.php'> Quero lugar</a>";
}else{

    $_SESSION['dados']= array();
    //include('conexao.php');
    $conexao = new PDO('mysql:host=localhost;dbname=GoDriver','root','senac');
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
 echo "<strong style='color:orange'>Total = R$".number_format($totalt ,2,",",".").'<br><br></strong>';
 echo "<a style='background-color:green'; href='alugueis.php'> Adicionar mais produtos</a>";
//botão para finalizar o pedido
echo "<br><br><a href='finalizar.php' class='link'>Finalizar Pedido</a>";



}
?>

            </div>

        </div>
        <div class="container">
            <div class="catalogue-item">
                <img src="tcc/Toyota.png" style="width: 120%">
                <p style="color: rgb(68, 67, 67); font-weight: 900">Toyota Corolla</p>
                <p style="color: rgb(68, 67, 67); font-weight: 800; font-size: 14px; margin-bottom: 15px">
                    À Pronta-entrega </p>
                <p></p>
                <p style="color: rgb(68, 67, 67);font-weight: 400; font-size: 10px">
                </p>
                <p style="color: rgb(68, 67, 67); font-weight: 700; font-size: 14px; padding: 05px 20px; border-radius: 5px;"> A partir de:</p>

                <p style="color: rgb(68, 67, 67); font-weight: 400">
                    R$ <span style="font-weight: 900; font-size: 34px">1.890,00</span>
                </p><span style="color: rgb(68, 67, 67); font-weight: 700; font-size: 14px">Mensal</span>
                <p></p>
                <?php
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
    echo "<br><br><a href='alugueis.php'> Quero lugar</a>";
}else{

    $_SESSION['dados']= array();
    //include('conexao.php');
    $conexao = new PDO('mysql:host=localhost;dbname=GoDriver','root','senac');
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
 echo "<strong style='color:orange'>Total = R$".number_format($totalt ,2,",",".").'<br><br></strong>';
 echo "<a style='background-color:green'; href='alugueis.php'> Adicionar mais produtos</a>";
//botão para finalizar o pedido
echo "<br><br><a href='finalizar.php' class='link'>Finalizar Pedido</a>";



}
?>
            </div>
        </div>
    </div>



    <div class="aluga container-fluid">
        <h3>Não encontrou o que estava procurando?</h3>
        <h5>Veja todos os carros de aluguel.</h5><br>
        <a href="aluguel.php">Ver todos os carros</a><br><br><br>
        <h6>GoDriver Locação De Veículos S.A.
CNPJ/MF nº 01.974.254/0003-80</h6>
    </div><br><br>


    <footer>
        <div class="container-fluid fixed-bottom text-center bg-dark text-white">
            <p class="fs-5 my-auto">© 2023 GoDriver Aluguel de Carros | Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>