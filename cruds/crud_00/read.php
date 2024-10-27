<h1>Listar Usuários</h1>
<?php 
  $sql = "SELECT * FROM usuarios";

  $res = $conexao->query($sql);

  //obtendo a quantidade de resultados da minha tabela
  $qtd = $res->num_rows;

  if ($qtd > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>NOME</th>";
    echo "<th>EMAIL</th>";
    echo "<th>DATA DE NASCIMENTO</th>";
    echo "</tr>";
    // $row está funcionado como uma array, recebendo os obejtos da tabela usuários 
    while ($row = $res->fetch_object()) {
      echo "<tr>";
      echo "<td>$row->id</td>";
      echo "<td>$row->nome </td>";
      echo "<td>$row->email </td>";
      echo "<td>$row->data_nasc </td>";
      echo "</tr>";
    }
    echo "</table>";
  } else {
    echo "<p class='alert'>Não foi possível encontrar resultados!!</p>";
  }
?>