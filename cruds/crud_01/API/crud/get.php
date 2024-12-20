<?php 
  if ($api == 'usuarios') {
    if ($method == "GET") {

      switch (true) {
        //verificando o caminho
        case ($acao == '' && $parametro == ''):
          
          echo json_encode(['ERRO' => 'Caminho não encontrado']);
        break;
  
        //listando todos os registros do banco
        case ($acao == 'lista' && $parametro == ''):
          
          $db = DB::connect();
          $resultado = $db->prepare("SELECT * FROM usuarios ORDER BY nome");
          $resultado->execute();
          $obj = $resultado->fetchAll(PDO::FETCH_ASSOC);
          
          if ($obj) {
            echo json_encode(['dados' => $obj]);
          } else {
            echo json_encode(['dados' => 'Não exsitem dados para retornar']);
          }
        break;

        //listando um registro espcifico pelo id
        case ($acao == 'lista' && $parametro != ''):
          
          $db = DB::connect();
          $resultado = $db->prepare("SELECT * FROM usuarios WHERE id={$parametro}");
          $resultado->execute();
          $obj = $resultado->fetchObject();
          
          if ($obj) {
            echo json_encode(['dados' => $obj]);
          } else {
             echo json_encode(['dados' => 'Não exsitem dados para retornar']);
          }
        break;
        default:
          echo json_encode(['ERRO' => 'Erro interno']);
        break;
      }     
    }
  }
?>