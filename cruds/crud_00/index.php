<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD Simples</title>
</head>
<body>
  <h1>Página Inicial</h1>

  <div id="paginas">
    <ul>
      <li>
        <a href="?page=create">Novo usuario</a>
      </li>
      <li>
        <a href="?page=read">Lista de usuario</a>
      </li>
    </ul>
  </div>
  
  <div class="container">
    <?php 
      switch (@$_REQUEST["page"]) {
        case "create":
          include("create.php");
          break;
          case "read":
            include("read.php");
            break;
        default:
          echo "<h2>Bem-Vindo!</h2>";
          break;
      }
    ?>
  </div>

</body>
</html>