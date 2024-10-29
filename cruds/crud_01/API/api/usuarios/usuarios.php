<?php
if ($api == 'usuarios') {
  if ($method == "GET") {
    //verificando o caminho
    if ($acao == '' && $parametro == '') { echo json_encode(['ERRO' => 'Caminho não encontrado!!']); }

    //verifcando a ação
    if ($acao == 'lista' && $parametro == '') {
      $db = DB::connect();
      $resulatdo = $db->prepare("SELECT * FROM usuarios ORDER BY nome");
      $resulatdo->execute();
      $obj = $resulatdo->fetchAll(PDO::FETCH_ASSOC);
      
      if ($obj) {
        echo json_encode(['dados' => $obj]);
      } else {
        echo json_encode(['dados' => 'Não exsitem dados para retornar']);
      }
    }
     if ($acao == 'lista' && $parametro != '') {
      $db = DB::connect();
      $resulatdo = $db->prepare("SELECT * FROM usuarios WHERE id={$parametro}");
      $resulatdo->execute();
      $obj = $resulatdo->fetchObject();
      
      if ($obj) {
        echo json_encode(['dados' => $obj]);
      } else {
        echo json_encode(['dados' => 'Não exsitem dados para retornar']);
      }
    }
  }
}
