<?php
//verificando caminho da api
if ($api == 'usuarios') {
  //verificando os metódos 
  switch (true) {
    case ($method == 'GET'):
      include __DIR__.'/get.php';
      break;
    case ($method == 'POST' && !isset($_POST['_method'])):
      include __DIR__.'/post.php';
      break;
    case ($method == 'POST' && isset($_POST['_method']) && @$_POST['_method'] == 'PUT'):
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