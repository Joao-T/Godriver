<?php
require 'conexao.php';
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Detalhes do cliente CRUD</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Dados do cliente
                            <a href="sistema.php" class="btn btn-danger float-end">VOLTAR</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $client_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM cliente WHERE id_cliente='$client_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $client = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>Nome</label>
                                        <p class="form-control">
                                            <?=$client['nome'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <p class="form-control">
                                            <?=$client['email'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Telefone</label>
                                        <p class="form-control">
                                            <?=$client['tel'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>CPF</label>
                                        <p class="form-control">
                                            <?=$client['CPF'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Sexo</label>
                                        <p class="form-control">
                                            <?=$client['sexo'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Senha</label>
                                        <p class="form-control">
                                            <?=$client['senha'];?>
                                        </p>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>Nenhum ID encontrado</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>
</html>