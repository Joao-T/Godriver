<?php

include("conexao.php");

$recid= filter_input(INPUT_GET, 'forn');




  if(mysqli_query($conn, "DELETE FROM carros WHERE id_carros=$recid")) {

    echo "<script>alert('Dados excluidos com sucesso!'); window.location = 'aluguel.php';</script>";

  }else {

    echo "Não foi possível excluir os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>