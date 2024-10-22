<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exemplo 02</title>
</head>
<body>
  <h2>Shor Tag PHP</h2>
  <!-- declarando variável -->
  <?php
   $name = "Vitor Ayala"; 
   ?>
  <!-- usando short tag php -->
  <?= "<p>Meu nome é $name</p>" ?>

  <h2>Date and Time</h2>
  <?php
    // para mostra dia do mês é "d" e da semana "D" 
    echo "Hoje é dia " . date("d/M/Y");
    // mostrando a hora, o "T" mostra a zona
    echo " e a hora atual é " . date("G:i:s T");
  ?>
</body>
</html>