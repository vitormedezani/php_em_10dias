<?php 
header('Acess-Control-Allow-Origin: *');
header('Content-type: application/json');

date_default_timezone_set("America/Sao_Paulo");

//declarando a array path
if (isset($_GET["path"])) {
  # code...
  $path = explode("/", $_GET["path"]);
} else {
  echo "Caminho não existe";
  exit;
}

//lendo o caminho, ações e ou parâmetros
if (isset($path[0])) {
  $api = $path[0];
} else {
  echo "Caminho não existe";
  exit;
}
//indentificando o ação
if (isset($path[1])) {
  $acao = $path[1];
} else {
  $acao = '';
}
//identificando o parâmetro
if (isset($path[2])) {
  $parametro = $path[2];
} else {
  $parametro = '';
}

$method = $_SERVER["REQUEST_METHOD"];

include_once __DIR__.'/Class/db.class.php';
include_once __DIR__.'/api/usuarios/usuarios.php';

?>