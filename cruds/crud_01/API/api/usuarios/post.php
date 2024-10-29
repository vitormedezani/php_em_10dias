<?php 
  switch (true) {
    //verificando o caminho
    case ($acao == '' && $parametro == ''):
      echo json_encode(['ERRO' => 'Caminho não encontrado']);
      break;  
    case ($acao == 'adicionar' && $parametro == ''):
      // .= mantém o valor anterior e adicona outro valor, basicamente serve pra quebrar a linha
      //AUTOMATIZANDO a inserção de dados
      $sql = "INSERT INTO usuarios (";
      //automatizando os campos
      $contador = 1;
      foreach (array_keys($_POST) as $indice) {
        //retirando a vírgula do último loop
        if (count($_POST) > $contador) {
          $sql .= "{$indice},";
        } else {
          $sql .= "{$indice}";
        }
        $contador ++;
      }
      $sql .= ") VALUES (";
      //automatizando os valores
      $contador = 1;
      foreach (array_values($_POST) as $valor) {
        //retirando a vírgula do último loop
        if (count($_POST) > $contador) {
          $sql .= "'{$valor}',";
        } else {
          $sql .= "'{$valor}'";
        }
        $contador ++;
      }
      //encerrando alinha de texto do sql
      $sql .= ")";

      $db = DB::connect();
      $resulatdo = $db->prepare($sql);
      $executar = $resulatdo->execute();

      if ($executar) {
        echo json_encode(['dados' => 'Dados foram inseridos com sucesso.']);
      } else {
        echo json_encode(['dados' => 'Houve algum erro ao inserir os dados!!']);
      }

      break;
      default:
        echo json_encode(['ERRO' => 'Erro interno']);
      break;
  }
?>