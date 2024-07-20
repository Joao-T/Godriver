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
<div class="container mt-4">
<h2>Olá, <?php echo $_SESSION['email'];?></h2>
<h2><a href="logout.php" class="btn btn-danger">Sair</a>
<span><a href="sistemacarros.php" class="btn btn-warning">VeÍculos</a></span></h2>
<?php include('message.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Detalhes do cliente
                    <a href="cadastro.php" class="btn btn-primary float-end">Adicionar Cliente</a>
                </h4>
            </div>
            <div class="card-body">

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>CPF</th>
                            <th>Sexo</th>
                            <th>Senha</th>
                            <th>Registro</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT * FROM cliente";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $client)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $client['id_cliente']; ?></td>
                                        <td><?= $client['nome']; ?></td>
                                        <td><?= $client['email']; ?></td>
                                        <td><?= $client['tel']; ?></td>
                                        <td><?= $client['CPF']; ?></td>
                                        <td><?= $client['sexo']; ?></td>
                                        <td><?= $client['senha']; ?></td>
                                        <td><?= $client['data_cad']; ?></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="visualizar.php?id=<?= $client['id_cliente']; ?>" class="btn btn-info btn-sm mx-1">Visualizar</a>
                                                <a href="editar.php?id=<?= $client['id_cliente']; ?>" class="btn btn-success btn-sm">Editar</a>
                                                <form action="code.php" method="POST" class="mx-1">
                                                    <button type="submit" name="delete" value="<?=$client['id_cliente'];?>" class="btn btn-danger btn-sm">Deletar</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            else
                            {
                                echo "<h5> Nenhum cliente cadastrado </h5>";
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