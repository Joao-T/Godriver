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

    <title>Editar veículo CRUD</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Editar Veículo
                            <a href="sistema.php" class="btn btn-danger float-end">VOLTAR</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $car_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM carros WHERE id_carros='$car_id' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $id_carros = mysqli_fetch_array($query_run);
                        ?>
                                <form action="codecarro.php" method="POST">
                                    <input type="hidden" name="car_id" value="<?= $id_carros['id_carros']; ?>">

                                    <div class="mb-3">
                                        <label>Imagem</label>
                                        <input type="file" placeholder="img" name="img" value="<?= $id_carros['img']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label>Marca</label>
                                        <input type="text" name="marca" class="form-control" value="<?= $id_carros['marca']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label>Nome</label>
                                        <input type="text" name="nome" class="form-control" value="<?= $id_carros['nome']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label>Telefone</label>
                                        <input type="text" name="valor" class="form-control" value="<?= $id_carros['valor']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_car" class="btn btn-primary">
                                            Atualizar Veículo
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