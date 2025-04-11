<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Moto</title>
   

</head>

<body>
    <fieldset>

    <nav class="navbar bg-body-tertiary">
  <div class="container-fluid" >
    <a class="navbar-brand" href="#" >Registros de Moto</a>
  </div>
</nav>


        <form action="/Moto/form/save" method="post">

            <!-- <input type="hidden" name="id" readonly value="<?= $model->id ?>">

            <label for="marca">Marca da Moto:</label>
            <input type="text" id="Marca" name="Marca" value="<?= $model->Marca ?>">

            <label for="nomeMoto">Nome do Moto:</label>
            <input type="text" id="nomeMoto" name="nomeMoto" value="<?= $model->nomeMoto ?>">

            <label for="Quilometro">Quilometragem da Moto:</label>
            <input type="number" id="Quilometros" name="Quilometros" value="<?= $model->Quilometros ?>">

            <label for="Ano">Ano:</label>
            <input type="number" id="Ano" name="Ano" value="<?= $model->Ano ?>">

            <button type="submit">Salvar</button> -->

        </form>



    </fieldset>

   
</body>
</html>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
      color: #fff;
      font-family: 'Segoe UI', sans-serif;
    }

    .form-container {
      background-color: #ffffff;
      color: #000;
      padding: 40px;
      border-radius: 15px;
      margin-top: 50px;
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.2);
    }

    .form-title {
      font-weight: 700;
      text-align: center;
      margin-bottom: 30px;
      color: #2c5364;
    }

    .form-label {
      font-weight: 500;
    }

    .btn-custom {
      background-color: #2c5364;
      border: none;
    }

    .btn-custom:hover {
      background-color: #203a43;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <div class="form-container">
          <h2 class="form-title">Cadastro de Moto</h2>
          <form action="/Moto/form/save" method="post"> 
            <div class="mb-3">
              <label for="marcaMoto" class="form-label">Marca da Moto</label>
              <input type="text" class="form-control" id="Marca" name="Marca" value="<?= $model->Marca ?>" placeholder="Ex: Honda, Yamaha" required>
            </div>

            <div class="mb-3">
              <label for="nomeMoto" class="form-label">Nome do Modelo</label>
              <input type="text" class="form-control"  id="nomeMoto" name="nomeMoto" value="<?= $model->nomeMoto ?>" placeholder="Ex: CG 160, MT-03" required>
            </div>

            <div class="mb-3">
              <label for="kmMoto" class="form-label">Quilometragem</label>
              <input type="number" class="form-control" id="Quilometros" name="Quilometros" value="<?= $model->Quilometros ?>" placeholder="Ex: 15000" min="0" required>
            </div>

            <div class="mb-3">
              <label for="anoMoto" class="form-label">Ano</label>
              <input type="number" class="form-control" id="Ano" name="Ano" value="<?= $model->Ano ?>" placeholder="Ex: 2022" min="1900" max="2099" required>
            </div>

            <button type="submit" class="btn btn-custom w-100">Salvar Moto</button>
          </form>
        </div>
      </div>
    </div>
  </div>

 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
