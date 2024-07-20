<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Pagamento</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
</head>
<style>
  body {
    background-color: #9e9d9d;
  }

  .qrcode {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 154px;
    width: 400px;
    margin: 20px auto; /* Adicionado para centralizar verticalmente */
  }

  .carreg {
    width: 600px;
    margin: 0 auto; /* Centralizar horizontalmente */
  }
</style>
<body>
   
<div class="container mt-4">
    
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
               
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="tcc/Mobi.png" class="d-block w-100" alt="Carro 1">
                    </div>
                    <div class="carousel-item">
                        <img src="tcc/Chevrolet.png" class="d-block w-100" alt="Carro 2">
                    </div>
                    <div class="carousel-item">
                        <img src="tcc/Fiat strada.png" class="d-block w-100" alt="Carro 3">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </a>
            </div>
        </div>
    </div>
    
    <div class="row mt-4">
        <div class="col-lg-6 mx-auto">
            <form action="caminhopagamento.php" method="post">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" required>
                </div>
                <div class="mb-3">
                    <label for="numero_cartao" class="form-label">Número do Cartão</label>
                    <input type="text" class="form-control" id="numero_cartao" required>
                </div>
                <div class="mb-3">
                    <label for="validade_cartao" class="form-label">Validade do Cartão</label>
                    <input type="text" class="form-control" id="validade_cartao" required>
                </div>
                <div class="mb-3">
                    <label for="cvv" class="form-label">CVV</label>
                    <input type="text" class="form-control" id="cvv" required>
                </div>
                <div class="mb-3">
                    <label for="data" class="form-label">Data de devolução do veículo</label>
                    <input type="date" class="form-control" id="data" required>
                </div>


                <div class="col-lg-2 mx-auto">
    <form action="caminhopagamento.php" method="post">
        <button type="submit" class="btn btn-primary" name="pagar">Pagar</button>
    </form>
    <?php
    if(isset($_POST['pagar'])) {
        echo '<div class="alert alert-success mt-3" role="alert">
                  Aluguel realizado com sucesso
              </div>';
    }
    ?>
</div>
        </div>
    </div><br>

    <div class="carreg">
    <h4>Aguarde!</h4>
    <img src="tcc/carregando.gif">
    </div>
   
</div>
<div class="qrcode">
    <img src="tcc/Qrcode.png">
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>
