<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <style>
body{
    background-color: #636262;
color:#fff;
font-family: 'Cabin', sans-serif;
}
.container{
    margin:auto;
    max-width: 600px;
text-align:center;
}

.titulo{
    margin:auto;
    text-align: center;
    margin-bottom: 50px;
}
.texto>h1{
      text-align:center;
      color:black;
  }
  #img1{
      max-width:30%;
      float:center;
      mix-blend-mode: multiply;
  }
  .title {
width:180px;
padding-bottom:20px;
  }
        </style>
</head>
<body>
<img class="title" src="tcc/logo.png"> 
<div class="container">
<div class="texto">
<h1>Aluguel Concluído</h1>
<img id="img1"src="tcc/concluido.png">
<h4 style=color:black;>Pagamento Efetuado com sucesso!</h4>
<p style=color:black;>Seu carro já está disponível.</p>
<span style=color:black;>Qualquer dúvida, entre em contato com um de nossos administradores via whatsapp. 👇 </span>
<h3 style=color:black;>(61)'''''''''''</h3>
<?php
 echo "<a style='background-color:lightblue'; href='index.html'> Voltar </a>";
?>
</div>
</div>
</body>
</html>