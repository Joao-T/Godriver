<?php
include('verifica_login.php');
require 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<a href="aluguel.php" class="btn btn-danger">Voltar</a>
<div class="container mt-4">
<h2>Olá, <?php echo $_SESSION['email'];?></h2>
<h2><a href="logout.php" class="btn btn-danger">Sair</a>
<span><a href="sistema.php" class="btn btn-warning">Clientes</a></span></h2>
<?php include('message.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Detalhes do veículo
                    <a href="cadastrarcarro.php" class="btn btn-primary float-end">Adicionar veículo</a>
                </h4>
            </div>
            <div class="card-body">

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Marca</th>
                            <th>Nome</th>
                            <th>Valor</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT * FROM carros";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $id_carros)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $id_carros['id_carros']; ?></td>
                                        <td><?= $id_carros['marca']; ?></td>
                                        <td><?= $id_carros['nome']; ?></td>
                                        <td><?= $id_carros['valor']; ?></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="visualizarcarro.php?id=<?= $id_carros['id_carros']; ?>" class="btn btn-info btn-sm mx-1">Visualizar</a>
                                                <a href="editarcarro.php?id=<?= $id_carros['id_carros']; ?>" class="btn btn-success btn-sm">Editar</a>
                                                <form action="codecarro.php" method="POST" class="mx-1">
                                                    <button type="submit" name="delete" value="<?=$id_carros['id_carros'];?>" class="btn btn-danger btn-sm">Deletar</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            else
                            {
                                echo "<h5> Nenhum veículo cadastrado </h5>";
                            }
                        ?>
                        
                    </tbody>
                </table>

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