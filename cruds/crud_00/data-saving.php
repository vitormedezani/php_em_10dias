<?php
switch ($_REQUEST["crud_action"]) {
  case 'creating':
    // pegando os valores passados no formulário em create.php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $data_nasc = $_POST["data_nasc"];

    //verificando se estava recebendo os dados
    // echo "<p>$nome $email $senha $data_nasc</p>";

    // salando os dados no banco através dos comandos MySQL
    $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";
    
    //executando a query de conexão p/ salvar os dados no banco
    $res = $conexao->query($sql);

    if ($res==true) {
      echo "<script>alert('Cadastro feito com sucesso!!')</script>";
      echo "<script>location.href='?page=read';</script>";
    }
    else {
      echo "<script>alert('Não foi possível realizar o cadastro!!')</script>";
      echo "<script>location.href='?page=read';</script>";
    }
    break;
  case 'updating':
    # code...
    break;
  case 'deleting':
    # code...
    break;
}
?>