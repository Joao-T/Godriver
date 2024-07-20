<?php
session_start();
require 'conexao.php';
?>

<!doctype html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Editar cliente CRUD</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Editar cliente
                            <a href="sistema.php" class="btn btn-danger float-end">VOLTAR</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $client_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM cliente WHERE id_cliente='$client_id' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $client = mysqli_fetch_array($query_run);
                        ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="client_id" value="<?= $client['id_cliente']; ?>">

                                    <div class="mb-3">
                                        <label>Nome</label>
                                        <input type="text" name="nome" class="form-control" value="<?= $client['nome']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" value="<?= $client['email']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label>CPF</label>
                                        <input type="text" name="cpf" class="form-control" value="<?= $client['CPF']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label>Telefone</label>
                                        <input type="text" name="tel" class="form-control" value="<?= $client['tel']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <select name="sexo" class="form-select">
                                            <option value="M">Masculino</option>
                                            <option value="F">Feminino</option>
                                            <option value="N">Nao declarado</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label>Senha</label>
                                        <input type="text" name="senha" class="form-control" value="<?= $client['senha']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_client" class="btn btn-primary">
                                            Atualizar Cliente
                                        </button>
                                    </div>

                                </form>
                        <?php
                            } else {
                                echo "<h4>Nenhum ID encontrado</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>