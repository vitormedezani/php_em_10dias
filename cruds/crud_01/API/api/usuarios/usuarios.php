<?php
//verificando caminho da api
if ($api == 'usuarios') {
  //verificando os metódos  
  switch ($method) {
    case 'GET':
      include __DIR__.'/get.php';
      break;
    case 'POST':
      include __DIR__.'/post.php';
      break;
    default:
      echo json_encode(['ERRO' => 'Caminho não encontrado']);
      break;
  }
 
}
?>