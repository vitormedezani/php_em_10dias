<?php
//verificando caminho da api
var_dump($_SERVER['REQUEST_METHOD']);
if ($api == 'usuarios') {
  //verificando os metódos 
  switch (true) {
    case ($method == 'GET'):
      include __DIR__.'/get.php';
      break;
    case ($method == 'POST'):
      include __DIR__.'/post.php';
      break;
    case ($_SERVER['REQUEST_METHOD'] === 'PUT'):
      include __DIR__.'/put.php';
      break;
    case ($_SERVER['REQUEST_METHOD'] === 'DELETE'):
      include __DIR__.'/delete.php';
      break;    
    default:
      echo json_encode(['ERRO' => 'Caminho não encontrado']);
      break;
  }
 
}
?>