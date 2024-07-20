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

<body>
    <a href="index.php" class="btn btn-danger">Voltar</a>
    <div class="login__container">
        <div class="login__title-text">
            <div class="login__title login">
                Log in
            </div>
            <div class="login__title signup">
                Sign up
            </div>
        </div>
        <div class="login__div-form">
            <div class="login__slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="login__slide login">Log in</label>
                <label for="signup" class="login__slide signup">Sign up</label>
                <div class="login__slider-tab"></div>
            </div>
            <div class="login__form-campos">
                <form action="logincliente.php" method="post" class="login">
                    <div class="login__campo">
                        <input type="email" placeholder="Endereço de Email" name="email" required>
                    </div>
                    <div class="login__campo">
                        <input type="password" placeholder="senha" name="senha" required>
                    </div>
                    <div class="login__senha-link">
                        <a href="#">Esqueceu a senha?</a>
                    </div>
                    <div class="login__campo btn">
                        <div class="login__btn-layer"></div>
                        <input type="submit" value="Login">
                    </div>
                    <div class="login__signup-link">
                        Não possui conta? <a href="">cadastre-se agora</a>
                    </div>
                </form>
                <form name="cadastro" action="signup.php" method="post" class="signup">
                    <div class="login__campo">
                        <input type="text" placeholder="Nome" name="nome" required>
                    </div>
                    <div class="login__campo">
                        <input type="email" placeholder="Endereço de Email" name="email" required>
                    </div>
                    <div class="login__campo">
                        <input type="text" placeholder="CPF" name="cpf" required>
                    </div>
                    <div class="login__campo">
                        <input type="text" placeholder="Telefone" name="tel" required>
                    </div>
                    <div class="login__campo">
                        <select name="sexo">
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                            <option value="N">Nao declarado</option>
                        </select>
                    </div>
                    <div class="login__campo">
                        <input type="password" placeholder="Senha" name="senha" required>
                    </div>
                    <div class="login__campo btn">
                        <div class="login__btn-layer"></div>
                        <input type="submit" value="Signup">
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