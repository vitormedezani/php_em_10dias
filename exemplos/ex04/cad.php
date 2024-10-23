<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
</head>
<body>
  <header>
    <h1>Resultado de Processamento</h1>
  </header>
  <main>
    <?php 
      // ?? só funciona quadno trocado na URL, para funcionar no envio usamos ?:
      // $nome = $_REQUEST["nome"] ?? "nome";
      $nome = $_REQUEST["nome"] ?: "nome";
      $sobrenome = $_REQUEST["sobrenome"] ?: "desconhecido";
      echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome</strong>! Este é o meu site!</p>"
    ?>
    <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
  </main>
  
</body>
</html>