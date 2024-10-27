<?php
  //definindo as variáveis pra conexão
  define('HOST', 'localhost');
  define('USER', 'root');
  //PASSWORD, Senha
  define('PASS', '');
  define('BASE', 'db_crud_00');
  
  //chamando as variáveis
  $conexao = new MySQLi(HOST, USER, PASS, BASE);
?>