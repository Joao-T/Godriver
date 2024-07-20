<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Sign in</title>
</head>
<style>
    html,body {
    font-family: 'Open Sans', serif;
    font-size: 15px;
    font-weight: 300;
  }
  .hero.is-success {
    background: #f2f7fa;
  }
  .hero .nav, .hero.is-success .nav {
    -webkit-box-shadow: none;
    box-shadow: none;
  }
  input {
    font-weight: 300;
  }
  p {
    font-weight: 700;
  }
</style>
<body>
    <a href="sistemacarros.php" class="btn btn-danger">Voltar</a>
    <div class="login__container">
        <div class="login__title-text">
        <?php include('message.php'); ?>
         
                <form name="cadastro" action="codecarro.php" method="post" class="signup">
                    <div class="login__campo">
                        <input type="file" placeholder="Img" name="img" required>
                    </div>
                    <div class="login__campo">
                        <input type="Marca" placeholder="Digite a marca do carro" name="marca" required>
                    </div>
                    <div class="login__campo">
                        <input type="Nome" placeholder="Nome" name="nome" required>
                    </div>
                    <div class="login__campo">
                        <input type="Valor" placeholder="Valor do carro" name="valor" required>
                    </div>
                    
                    <div class="login__campo btn">
                        <div class="login__btn-layer"></div>
                        <input type="submit" value="Cadastrar" name="save_car">
                    </div>
                </form>
            </div>
            <!-- <?php
            // if (isset($_SESSION['nao_autenticado'])) :
            // ?>
            //     <div class="notification is-danger">
            //         <p>ERRO: Usuário ou senha inválidos.</p>
            //     </div>
            // <?php
            // endif;
            // unset($_SESSION['nao_autenticado']);
            ?> -->
        </div>
    </div>
    <script src="js/login.js"></script>
</body>

</html>