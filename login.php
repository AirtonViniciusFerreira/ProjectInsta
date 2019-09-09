<?php
  require_once "app/util.php";
  $data = fromSession('data');
  $messages = fromSession('messages');
  $senha = isset($data['senha'])?$data['senha']:'';
  $email = isset($data['email'])?$data['email']:'';
  
 ?>

<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InstaClone - Login</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
    crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Roboto|Kaushan+Script" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <meta charset="utf-8">
  </head>
  <body>
    <section class"">
      <main >
        <section>
          <section class="col-12 col-s-12">
            <header>
              <h1 class="title">
                <i class="fas fa-camera-retro"></i><span style="color:black;"> Insta </span>  <span style="color:#2A4B7C;">Clone</span>
              </h1>
              <h3>Faça Login para ver fotos e vídeos dos seus amigos</h3>
            </header>
            <?php
              session_start();
              if(isset($_SESSION['unauthenticated'])):
            ?>
            <div>
                <p>ERRO: Usuario ou senha Invalidos.</p>
            </div>
            <?php
            endif;
            ?>
            <form method="POST" action=app/enter.php>
              <div>
                <input type="text" name="email" placeholder="Seu e-mail" required="required">
              </div>
              <div>
                <input type="password" name="senha" placeholder="Senha" required="required">
              </div>
              <div>
                <input type="submit" value="Login" >
              </div>
            </form>
            <footer class="optional-panel">
              <h3>Ainda não tem uma conta? <a class="linkButton" href="registro.php">Cadastre-se</a></h3>
            </footer>
          </section>
        </section>
      </main>
    </section>
  </body>
</html>
