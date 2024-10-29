<?php 
  switch (true) {
    case ($acao == '' && $parametro == ''):
      echo json_encode(['ERRO' => 'Caminho não encontrado']);
    break;

    case ($acao == 'delete' && $parametro == '' ):
      echo "teste";
      echo json_encode(['ERRO' => 'É necessário informar o id do usuário']);
    break;

    case ($acao == 'delete' && $parametro != ''):
      $db = DB::connect();
      $resultado = $db->prepare("DELETE FROM usuarios WHERE id={$parametro}");
      $executar = $resultado->execute();

      if ($executar) {
        echo json_encode(['dados' => 'Dados excluídos com sucesso.']);
      } else {
        echo json_encode(['dados' => 'Houve algum erro ao excluir os dados!!']);
      }
    break;

    default:
      echo json_encode(['ERRO' => 'Erro interno']);
    break;
  }
?>