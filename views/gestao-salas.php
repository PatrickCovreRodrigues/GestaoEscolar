<?php 
require '../models/database.php'
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php include('layout/menu.php')?>
    <div class="container-salas">
      <div>Sala Maker</div>
      <div>Sala Laboratorio</div>
      <div>Sala Robotica</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

<style type="text/css">
  .container-salas{
    display: grid;
    justify-content: center;
    align-items: center;
    margin-left: 220px;
    gap: 10px;
    height: 100vh;
  }

  .container-salas div {
    width: 300px;
    height: 200px;
    padding: 20px;
    background-color: grey;
    border: 1px solid #ddd;
    border-radius: 8px;
    text-align: center;
  }
</style>