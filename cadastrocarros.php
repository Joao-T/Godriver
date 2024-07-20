<?php include_once "../conexao.php"; ?>
<html>
    <body>
        <?php
        $nome = $_POST["nome"];
        $marca = $_POST["marca"];
        $cor = $_POST["cor"];
       $placa = $_POST["placa"];
       $img = $_POST["img"];
        

        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, 'GoDriver');
        $sql = "INSERT INTO tb_carros(nome, marca, cor, placa, img) VALUES ( '$nome',"
                . " '$nome',"
                . " '$marca',"
                . " '$cor',"
                . " '$placa',"
                . " '$img' )";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Seus dados foram salvos !'); window.location = 'aluguel.php';</script>";
        } else {
            echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </body>
</html>