


<?php include_once "conexao.php"; ?>
<html>
    <body>
        <?php
        $img = $_POST["img"];
        $marca = $_POST["marca"];
        $nome = $_POST["nome"];
        $valor = $_POST["valor"];


        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($con, 'GoDriver');
        $sql = "INSERT INTO carros(img,marca,nome,valor) 
        VALUES ( ". "'$img',"
                . " '$marca', "
                . " '$nome', "
                . " '$valor')";
        if (mysqli_query($con, $sql)) {
            echo "<script>alert('Seus dados foram salvos !');
        window.location = 'aluguel.php';</script>";
        } else {
            echo "Deu erro: " . $sql . "<br>" . mysqli_error($con);
        }
        mysqli_close($con);
        ?>
    </body>
</html>
