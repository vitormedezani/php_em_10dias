<?php
  switch (true) {
    
    case ($acao == '' && $parametro == ''):
      echo json_encode(['ERRO' => 'Caminho não encontrado']);
    break;

    case ($acao == 'update' && $parametro == '' ):
      echo "teste";
      echo json_encode(['ERRO' => 'É necessário informar o id do usuário']);
    break;
    
    case ($acao == 'update' && $parametro != ''):
      array_shift($_POST);
      
      // "UPDATE usuarios SET nome = 'novo nome', telefone = 'novo tel' WHERE id=2"

      $sql = "UPDATE usuarios SET ";
      
      //automatizando o comando sql de UPDATE
      $contador = 1;
      foreach (array_keys($_POST) as $indice) {
        
        if (count($_POST) > $contador) {
          $sql .= "{$indice} = '{$_POST[$indice]}', ";
        } else {
          $sql .= "{$indice} = '{$_POST[$indice]}' ";
        }
        $contador ++;
      }
      $sql .= "WHERE id={$parametro} ";

      $db = DB::connect();
      $resultado = $db->prepare($sql);
      $executar = $resultado->execute();

      if ($executar) {
        echo json_encode(['dados' => 'Dados atualizados com sucesso.']);
      } else {
        echo json_encode(['dados' => 'Houve algum erro ao atualizar os dados!!']);
      }

    break;

    default:
        echo json_encode(['ERRO' => 'Erro interno']);
    break;
  }
?>