<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 03</title>
</head>
<header>
  <h1>Conversor de Moedas v1.0</h1>
  <?php 
    $reais = $_REQUEST["reais"];
    round($reais);
    $dolares = (float) $reais / 5.71;
    echo "Seus R$ $reais equivalem a <strong> US$ " . number_format($dolares, 2, ".", ",") . "</strong>";
  ?>
</header>
<body>
  <p>
    <strong>*Cotação fixa de R$5,71</strong> informada durante o código
  </p>
  <p>
    <button  onclick="javascript:history.go(-1)">Voltar</button>
  </p>
  <!-- <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p> -->
</body>
</html>