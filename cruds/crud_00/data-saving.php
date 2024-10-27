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
      echo "<script>alert('Cadastro CRIADO com sucesso!!')</script>";
      echo "<script>location.href='?page=read';</script>";
    }
    else {
      echo "<script>alert('Não foi possível CRIAR o cadastro!!')</script>";
      echo "<script>location.href='?page=read';</script>";
    }
  break;
  //
  case 'updating':
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $data_nasc = $_POST["data_nasc"];

    $sql = "UPDATE usuarios  SET 
            nome='{$nome}', 
            email='{$email}', 
            senha='{$senha}', 
            data_nasc='{$data_nasc}' 
            WHERE
            id=". $_REQUEST["id"];
    $res = $conexao->query($sql);

    if ($res==true) {
      echo "<script>alert('Cadastro ALTERADO com sucesso!!')</script>";
      echo "<script>location.href='?page=read';</script>";
    }
    else {
      echo "<script>alert('Não foi possível ALTERAR o cadastro!!')</script>";
      echo "<script>location.href='?page=read';</script>";
    }

  break;
  //
  case 'deleting':
    # code...
  break;
}
?>