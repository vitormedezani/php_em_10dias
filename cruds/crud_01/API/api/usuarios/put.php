<?php
var_dump("teste"); 
  switch (true) {
    case ($acao == '' && $parametro == ''):
      echo json_encode(['ERRO' => 'Caminho não encontrado']);
      break;
    case ($acao == 'update' && $parametro == '' ):
      echo "teste";
      echo json_encode(['ERRO' => 'É necessário informar o id do usuário']);
      break;
    case ($acao == 'update' && $parametro != ''):
      var_dump($_POST);
      break;
    default:
        echo json_encode(['ERRO' => 'Erro interno']);
    break;
  }
?>