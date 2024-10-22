<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exemplo 03 - Tipos primitivos</title>
</head>

<body>
  <h2>Escalares</h2>
  <?php 
    $nome = "Ayala";
    var_dump($nome);
    echo "<br>";
    //
    $num_inteiro = 10;
    var_dump($num_inteiro);
    echo "<br>";
    //
    $num_decimal = 10.5;
    var_dump($num_decimal);
    echo "<br>";
    //
    $booleana = true;
    var_dump($booleana);
    echo "a variável booleana é  $booleana";
    echo "<br>";
  ?>
  <h2>Compostas</h2>
  <?php 
    //
    $vet = [6, 2.5, "Maria", 3, false];
    var_dump($vet);
    echo "<br>";
    //
    class Classe {
      private string $nome;
    }
    $c = new Classe;
    var_dump($c);
    echo "<br>";
  ?>
</body>

</html>