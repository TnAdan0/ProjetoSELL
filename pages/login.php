<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Joyce Galvão Modas</title>
  <link rel="stylesheet" href="../css/login.css" />
  <link rel="icon" href="../img/iconJGM.png">
  </link>
</head>

<body>
  <section class="container">

    <div class="image-section">
      <div class="image-wrapper">
        <img src="../img/roupas.jpg" alt="">
      </div>

      <div class="content-container">
        <h1 class="section-heading"><img id="logoLogin" src="../img/LogoJGM.png" alt=""></h1>
      </div>
    </div>

    <div class="form-section">

      <div class="form-wrapper">

        <h2>Log-in</h2>
        <p>Insira suas credenciais para acessar sua conta.</p>
        <form method="post">
          <div class="input-container">
            <div class="form-group">
              <label for="email">Email</label>
              <input name="email" type="email" id="email" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="password">Senha</label>
              <input name="senha" type="password" id="password">
            </div>
          </div>

          <button class="login-btn">Entrar</button>
        </form>
        <div class="or-divider">não possui conta?</div>
        <button class="google-signin">

          <span><a href="cadastro.php">Cadastre-se</a></span>
        </button>
      </div>

    </div>

  </section>
</body>

</html>