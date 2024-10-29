<?php
//verificando caminho da api
if ($api == 'usuarios') {
  //verificando os metódos 
  switch (true) {
    case ($method == 'GET'):
      include __DIR__.'/get.php';
      break;
    case ($method == 'POST' && $_POST['_method'] == ''):
      include __DIR__.'/post.php';
      break;
    case ($_POST['_method'] == 'PUT' && $method == 'POST'):
      include __DIR__.'/put.php';
      break;
    case ($_POST['_method'] == 'DELETE' && $method == 'POST'):
      include __DIR__.'/delete.php';
      break;    
    default:
      echo json_encode(['ERRO' => 'Caminho não encontrado']);
      break;
  }
 
}
?>