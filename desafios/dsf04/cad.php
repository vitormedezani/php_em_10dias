<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 05</title>
</head>
<header>
  <?php 
    $numero = 7469.254;
    $prt_inteira = (int) $numero;
    $prt_fracionada = round(($numero - $prt_inteira) * 1000) / 1000;
    // $teste = $numero - $prt_inteira;
    // $prt_fracionada = round((float) $prt_fracionada);
    echo "Analisando número $numero";
    echo "<br> Parte inteira: $prt_inteira";
    echo "<br> Parte fracionária $prt_fracionada";
    // echo "<br> Parte fracionária " . round($teste * 1000) / 1000;
  ?>
</header>
<body>
  
</body>
</html>