<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD Simples</title>
</head>
<body>
  <div id="paginas">
    <a aria-current="page" href="index.php">Home</a> 
    <a href="?page=create">Novo usuario</a>
    <a href="?page=read">Lista de usuario</a>
  </div>
  
  <div class="container">
    <?php
      include ("config.php"); 
      switch (@$_REQUEST["page"]) {
        case "create":
          include("create.php");
          break;
          case "read":
            include("read.php");
            break;
          case "create":
            include("update.php");
            break;
        default:
          echo "<header><h1>Página Inicial<h1></header>";
          echo "<h2>Bem-Vindo!</h2>";
          break;
      }
    ?>
  </div>

</body>
</html>