<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>🚗GoDriver</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

  <style>
    body {
      background-color: #999999;

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

    .container {
      margin: auto;
      max-width: 33.3%;
      text-align: center;
      justify-content: center;
    }

    a{
      color: #fff;
      border: 2px solid darkgray;
      background-color: black;
      padding: 5px 10px;
      border-radius: 10px;
      font-weight: 600;
      text-align: center;
      transition: all 0.3s;
      text-decoration: none;
      top: -9px;
      
    
    /* position: relative;
    top: -10px;
    left: 190px;
    border-radius: 10px ;
    border: black 4px solid;
    background-color: #303030;
    color: #fff;
    text-decoration: none; */
    
}
    }

    #logo {
        height: 104px;
        width: 105px;
        padding-top: 0px;
    }

    .modal-body {
      width: 500px;
      text-align: center;
    }
    #tableConfigCard{
    background-color: transparent; 
    margin: 5px;
    position: relative;
    top: 250px;
    left: 20px;
}


aside {
    background-color:#999999;
    width:0vw;
    font-family:'Hepta Slab', Helvetica, Arial;
    transition:all ease .2s;
    overflow-x:hidden;
}

aside.show {
    width:30vw;
}

.cart {
  position: fixed;
  top: 12%;
  right: 10px;
  padding: 10px;
  background-color: #999999;
  box-shadow: -1px 1px 2px black;
  z-index: 9999;
  border-radius: 10px;
  display: block;
  border: 1px solid #999999;
}

.cart-items {
  list-style: none;
  margin: 0;
  padding: 0;
  max-height: 200px;
  overflow-y: auto;
  color:#999999;
  border-bottom: 1px;
}

.cart-item {
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-size: 14px;
  margin-bottom: 5px;
}
#div--img--card{
    width: 300px;
    height: 400px;
    border: black 2px solid;
    box-shadow: -2px 1px 5px black;
    background-color: #999999;
}

#img--card{
    height: 300px;
    width: 100%;
    border: 1px black solid;
}
*/
#tableConfigCard{
    background-color: transparent; 
    margin: 5px;
    position: relative;
    top: 250px;
    left: 20px;
    
}

#div--img--card{
    width: 460px;
    height: 410px;
    border: black 2px solid;
    box-shadow: -2px 1px 5px black;
    background-color: #999999;
    
}

#img--card{
    height: 250px;
    width: 100%;
    border: 1px black solid;
}

#comentarios--img--card{
    width: 98%;
    position: relative;
    left: 3px;
}

.testeLegend{
    line-height: 2px;
    padding: 5px;
    word-wrap: normal;
    font-size: 18px;
    color: black;
}

#formConfig{
    position: relative;
    margin-top: 10%;
    margin-left: 50%;
    transform: translate(-50%, -1%);
    width: 650px;
    height: 600px;
}

  </style>

  <body>
    <!-- Nav bar -->
    <nav class="navbar navbar-expand-md bg-dark text-white" data-bs-theme="dark">
      <div class="container-fluid px-3">
        <a class="navbar-brand fs-2" href="#"><img id="logo" src="tcc/logo.png"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-0">
            <li class="nav-item">
              <a class="nav-link fs-4" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active fs-4" href="aluguel.html">Alugar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-4" href="contato.html">Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-4" href="sobre.html">Sobre</a>
            </li>
          </ul>
         
              
          <div class="dropdown-center">
            <button class="btn dropdown-toggle fs-4 text-white" type="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                class="bi bi-person-fill mb-1" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
              </svg>
              Conta
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="form_login.php">Login</a></li>
              <li><a class="dropdown-item" href="#">Cadastro</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <div class="row">
                    </div><br>
                    <a href="index.php" class="btn btn-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-car-front" viewBox="0 0 16 16">
                            <path d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17 1.247 0 2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276Z" />
                            <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.807.807 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155 1.806 0 4.037-.084 5.592-.155A1.479 1.479 0 0 0 15 9.611v-.413c0-.099-.01-.197-.03-.294l-.335-1.68a.807.807 0 0 0-.43-.563 1.807 1.807 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3H4.82Z" />
                        </svg> 
                    </a>
                </div>


        <table id="tableConfigCard">
            <tr>
                <?php
                include_once './conexao.php';
                $sql = "select * from carros";
                $query = mysqli_query($con, $sql) or die(mysqli_error($dbname));
                $dados = mysqli_fetch_array($query);
                if ($dados ) {
                    $cont = 0;
                    while ($dados  = mysqli_fetch_array($query)) {
                        if ($cont > 3) {
                            echo "</tr><tr>";
                            $cont = 0;
                        }
                        ?>
                        <td>
                            <div id="div--img--card">
                                <img id="img--card" src="<?php echo 'tcc/' . $dados ['img']; ?>"><br>
                                <div id="comentarios--img--card">
                                   
                                    <span class="testeLegend"><?php echo "Marca: " . $dados ["marca"]; ?></span><br>
                                    <span class="testeLegend"><?php echo "Nome:  " . $dados ["nome"]; ?></span><br>
                                    <span class="testeLegend"><?php echo "Valor: R$" . $dados ["valor"]; ?></span><br>
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
    echo "<br><br><a href='alugueis.php'> Mais Detalhes!</a>";





   
   
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
                        </td>
                        <?php
                        $cont++;
                    }
                    ?>
                    <?php
                }
                ?>
            </tr>
        </table>
        <br><br><br><br>




    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Fiat Mobi</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <img src="tcc/Mobi.png" style="width: 250px;">
          </div>
          <h5>
            ◉ Ar condicionado<br>
            ◉ Abs<br>
            ◉ Rodas liga leve<br>
            ◉ Manual<br>
            ◉ Direção Hidraulica<br>
            ◉ 4 Portas<br></h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary">Alugar</button>
        </div>
      </div>
    </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Fiat Argo</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <img src="tcc/argo.png" style="width: 250px;">
          </div>
          <h5>
            ◉ Ar condicionado<br>
            ◉ Abs<br>
            ◉ Rodas liga leve<br>
            ◉ Manual<br>
            ◉ Direção Hidraulica<br>
            ◉ 4 Portas<br>
            ◉ Motor 1.0<br>
            ◉ 5 Pessoas<br></h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary">Alugar</button>
        </div>
      </div>
    </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Fiat Strada</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <img src="tcc/Fiat strada.png" style="width: 250px;">
          </div>
          <h5>
            ◉ Ar condicionado<br>
            ◉ Abs<br>
            ◉ Airbag<br>
            ◉ Rodas liga leve<br>
            ◉ Manual<br>
            ◉ Direção Hidraulica<br>
            ◉ 2 Portas<br>
            ◉ Vidro elétrico
            <br>
          </h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary">Alugar</button>
        </div>
      </div>
    </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Hyundai Hb20</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <img src="tcc/hb20.png" style="width: 250px;">
          </div>
          <h5>
            ◉ Ar condicionado<br>
            ◉ Abs<br>
            ◉ Airbag<br>
            ◉ Rodas liga leve<br>
            ◉ Manual<br>
            ◉ Direção Hidraulica<br>
            ◉ 4 Portas<br>
            ◉ 5 Pessoas<br>
            ◉ Vidro elétrico<br>
            ◉ Motor 1.6
            <br>
          </h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary">Alugar</button>
        </div>
      </div>
    </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Fiat Cronos</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <img src="tcc/Fiat_Cronos.png" style="width: 250px;">
          </div>
          <h5>
            ◉ Ar condicionado<br>
            ◉ Abs<br>
            ◉ Airbag<br>
            ◉ Rodas liga leve<br>
            ◉ Manual<br>
            ◉ Direção Hidraulica<br>
            ◉ 4 Portas<br>
            ◉ 5 Pessoas<br>
            ◉ Vidro elétrico<br>
            ◉ Motor 1.6
            <br>
          </h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary">Alugar</button>
        </div>
      </div>
    </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Chevrolet Tracker</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <img src="tcc/Chevrolet.png" style="width: 250px;">
          </div>
          <h5>
            ◉ Ar condicionado<br>
            ◉ Abs<br>
            ◉ Airbag<br>
            ◉ Rodas liga leve<br>
            ◉ Automático<br>
            ◉ Direção Hidraulica<br>
            ◉ 4 Portas<br>
            ◉ 5 Pessoas<br>
            ◉ Vidro elétrico<br>
            ◉ SUV<br>
            ◉ Motor 1.6
            <br>
          </h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary">Alugar</button>
        </div>
      </div>
    </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Citroen C3</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <img src="tcc/Citroern.png" style="width: 250px;">
          </div>
          <h5>
            ◉ Ar condicionado<br>
            ◉ Abs<br>
            ◉ Airbag<br>
            ◉ Rodas liga leve<br>
            ◉ Manual<br>
            ◉ Direção Hidraulica<br>
            ◉ 4 Portas<br>
            ◉ 5 Pessoas<br>
            ◉ Vidro elétrico<br>
            ◉ Motor 1.0
            <br>
          </h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary">Alugar</button>
        </div>
      </div>
    </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Audio Q3</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <img src="tcc/Audi__Q3.png" style="width: 250px;">
          </div>
          <h5>
            ◉ Ar condicionado<br>
            ◉ Abs<br>
            ◉ Airbag<br>
            ◉ Automático<br>
            ◉ Direção Eletrica<br>
            ◉ 4 Portas<br>
            ◉ 5 Pessoas<br>
            ◉ Vidro elétrico<br>
            ◉ Motor 1.6<br>
            ◉ SUV
            <br>
          </h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary">Alugar</button>
        </div>
      </div>
    </div>
    </div>

    <div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Gol G9</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <img src="tcc/Gol.jpg" style="width: 250px;">
          </div>
          <h5>
            ◉ Ar condicionado<br>
            ◉ Abs<br>
            ◉ Airbag<br>
            ◉ Manual<br>
            ◉ Direção Eletrica<br>
            ◉ 4 Portas<br>
            ◉ 5 Pessoas<br>
            ◉ Vidro elétrico<br>
            ◉ Motor 1.6<br>
           
            <br>
          </h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary">Alugar</button>
        </div>
      </div>
    </div>
    </div>





<script src="js/jsCart.js"></script>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"></script>
  </body>

</html>