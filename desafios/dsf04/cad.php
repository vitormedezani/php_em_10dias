<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 05</title>
</head>
<header>
  <h1>Analisador de Número Real</h1>
  <?php 
    $numero = $_REQUEST["numero_real"];
    $prt_inteira = (int) $numero;
    $prt_fracionada = round(($numero - $prt_inteira) * 1000) / 1000;
    //
    echo "Analisando número <strong> $numero </strong> que você informou:";
    // exibindo valores
    echo "<ul>
      <li>Parte inteira: <strong> $prt_inteira </strong></li>
      <li>Parte fracionária <strong> $prt_fracionada </strong></li>
    </ul>";
  ?>
</header>
<body>
  
</body>
</html>