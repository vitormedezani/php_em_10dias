<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<header><h1>Resultado Final</h1></header>
<body>
  <?php 
    $numero = $_REQUEST["numero"];
    if ($numero >= 4200000000000000000) {
      echo "Esse não aceito!!";
    } else {
      settype($numero, "int");
      //
      $n_antecessor = $numero - 1;
      $n_sucessor = $numero + 1;
      // trocando . por ,
      $numero = number_format($numero, 0, ",", ".");
      $n_antecessor = number_format($n_antecessor, 0, ",", ".");
      $n_sucessor = number_format($n_sucessor, 0, ",", ".");
      echo "O número escolhido foi $numero";
      echo "<br> Seu antecessor é $n_antecessor";
      echo "<br> Seu sucessor é $n_sucessor";
    }
  ?>
  <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
</body>
</html>