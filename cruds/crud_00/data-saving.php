<?php
switch ($_REQUEST["crud_action"]) {
  case 'creating':
    // pegando os valores passados no formulário em create.php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $data_nasc = $_POST["data_nasc"];

    echo "<p>$nome $email $senha $data_nasc</p>";

    // salando os dados no banco através dos comandos MySQL
    $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";
    
    //executando a query de conexão p/ salvar os dados no banco
    $res = $conexao->query($sql);
    break;
  case 'updating':
    # code...
    break;
  case 'deleting':
    # code...
    break;
}
?>