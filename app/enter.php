<?php
require_once("util.php");
require_once("database/connection.php");

$data['senha'] = fromPost('senha');
$data['email'] = fromPost('email');
$messages = "";
$messages .= ((empty($data['senha']))?("<li>O campo senha é obrigatório</li>"):"");
$messages .= ((empty($data['email']))?("<li>O campo e-mail é obrigatório</li>"):"");


if (strlen($messages) > 0){
  $messages = "<ul>".$messages."</ul>";
  toSession("messages", $messages);
  toSession("data", $data);
  header("Location: ../login.php");
  exit();
}
$i-> $data;

$inscricoes = database_find("usuarios", "senha",  $data['senha']);


foreach ($inscricoes as $i) {
  if ($i['email'] == $data['email']){
    $inscricao = $i;
    break;
  }
}

if (!isset($inscricao)){
  $messages = "Sua conta não foi encontrada";
  toSession("messages", $messages);
  header("Location: ../login.php");
  exit();
}
header("Location: ../feed.php"); 
 ?>
