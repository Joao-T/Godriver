<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <style>
body{
background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 63%, rgba(10,212,255,40) 100%);
color:#fff;
font-family: 'Cabin', sans-serif;
}
.container{
    margin:auto;
    max-width: 600px;
}
.container a{
   text-decoration: none;
   background-color:aqua;
   padding:10px 30px;
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
        <h2> Pedido Realizado!</h2>
        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
    </div>
<div class="container">


<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="lime" class="bi bi-check-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
</svg>

<h4 style="color:lime"> Pedido concluido com sucesso! </h4>
<p><strong> Obrigado pela Compra!</strong> </p>
<p>Seu pedido será enviado para o endereço cadastrado!</p>
<p> Confira os itens registrados em seu pedido.</p>
<p>Pedido número: 45623</p>
<a href="index.php">Retornar a Home</a>
</div>
</body>
</html>