<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pag Alugueis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
   background-color: #565656;
   padding:5px;
   border-radius: 5px; 
   color: #fff;
}
.titulo{
    margin:auto;
    text-align: center;
    margin-bottom: 50px;
}
.imagens_produtos{
    height: 200px;
    width: 400px;
}
#nome{
    background-color: transparent;
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
 $conexao = new PDO('mysql:host=localhost;dbname=GoDriver','root','joao123');
$select = $conexao-> prepare("select * from carros");
$select -> execute();
$fet = $select-> fetchAll();
//var_dump($fet);
foreach ($fet as $produtos){
    echo "Marca do Carro: ".$produtos['marca'].'<br>';
    echo "Nome: ".$produtos['nome'].'<br>';
    echo "Preço do produto: ".$produtos['valor'].'<br>';
   
    

    //<img id="img--card" src="<?php echo 'tcc/' . $produtos['foto']; "
    



    echo '<a id="nome" href="#"><img src="tcc/' . $produtos['img'] . '" alt="' . $produtos['nome'] . '" class="imagens_produtos"></a><br><br>';

   
    
    echo '<a href="carrinho.php?add=carrinho&id='.$produtos['id_carros'].'">
    Quero Alugar</a><br><br><hr>';
    // var_dump($produto);
}

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</div>
</body>
</html>