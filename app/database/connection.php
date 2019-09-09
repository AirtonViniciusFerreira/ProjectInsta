<?php
function getConnection(){
  //***** Database configuration *************************************************
  $dbvendor = 'mysql';
  $username = 'root';
  $password = '';
  $database = 'instaclone';
  $host = 'localhost';
  //******************************************************************************
  $connection = new PDO("$dbvendor:host=$host;dbname=$database;charset=utf8",  $username, $password);
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  return $connection;
}
function database_find($table, $field, $value) {
  $pdo =  getConnection();
  $sql = "select * from {$table} where {$field} = :{$field}";
  $find = $pdo->prepare($sql);
  $find->bindValue($field, $value);
  $find->execute();
  //dd($value);
  //dd($find);
  return $find->fetchAll();
}

 ?>
