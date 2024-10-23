<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 02</title>
</head>
<header>
  <h1>Trabalhando com números aleatórios</h1>
  <?php

  function NumeroAletorio()
  {
    return $numero_rdn = random_int(0, 100);
  } 
    echo NumeroAletorio();
  ?>
</header>
<body>
  <br>
  <input type="button" value="Gerar outro número" onclick="window.location.reload()">
</body>
</html>