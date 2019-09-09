<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InstaClone - Registro</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
    crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Roboto|Kaushan+Script" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  </head>
  <body>
    <section class="row">
      <main class=" col-12 col-s-12">
        <section class="registro-panel">
          <header>
            <h1 class="title">
              <i class="fas fa-camera-retro"></i> Insta  <span style="color:#2A4B7C;">Clone</span>
            </h1>

          </header>
          <div>
            <form method="POST" action="app/cadastro.php">
              <div>
                <input type="text" name="email" placeholder="Seu e-mail" required="required">
              </div>
              <div>
                <input type="text" name="nome" placeholder="Nome completo" required="required">
              </div>
              <div>
                <input type="text" name="usuario" placeholder="Nome de Usuário" required="required">
              </div>
              <div>
                <input type="password" name="senha" placeholder="Senha" required="required">
              </div>

              <div>
                <input type="checkbox" name="concordo">
                <label for="concordo"><span style="font-size: 13px;">Concordo com os termos,
                    Política de Dados e Política de Cookies.</span></label>
              </div>

              <div>
                <input type="submit" value="Cadastre-se" >
              </div>
            </form>
          </div>
          <footer class="optional-panel">
            <h3>__________________________</h3>
             <h3>Já tem uma conta? <a class="linkButton" href="login.php">Conecte-se</a></h3>
          </footer>
        </section>
      </main>
    </section>
  </body>
</html>
