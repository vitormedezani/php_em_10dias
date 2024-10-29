<?php 
  class DB
  {
    public static function connect()
    {
      $host = 'localhost';
      $user = 'root';
      $password = '';
      $base = 'db_crud_01';

      return new PDO("mysql:host={$host};dbname={$base};charset=UTF8;", $user, $password);
    }
  }
?>