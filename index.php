<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login facebook</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <div class="center">
      <div class="logo">
       <h2>facebook</h2>
      </div><!--logo-->
      <form class="form-login" method="post">
        <div class="form-element">
          <p>E-mail ou telefone</p>
          <input type="email" />
        </div><!--form-element-->
        <div class="form-element">
          <p>Senha</p>
          <input type="password" />
        </div><!--form-element-->
        <div class="form-element"> 
          <input type="submit" name="acao" value="Enviar" />
        </div><!--form-element-->
      </form>
      <div class="clear"></div>
    </div><!--center-->
  </header>

  <section class="main">
    <div class="center">
      <div class="img-people">
        <img src="images/img1.png" />
      </div><!--img-people-->

      <div class="open-account">
        <h2>Abra sua conta</h2>
        <h3>É gratuito e sempre será.</h3>

        <form class="new-account">
          <div class="w50">
            <input type="text" placeholder="Nome" />
          </div><!--w50-->
          <div class="w50">
            <input type="text" placeholder="Sobrenome" />
          </div><!--w50-->
          <div class="w100">
            <input type="email" placeholder="Celular ou email" />
          </div><!--w100-->
          <div class="w100">
            <input type="password" placeholder="Nova senha" />
          </div><!--w100-->

          <div class="w100">
            <h2>Data de nascimento</h2>
            <select class="nascimento">
              <?php
                for($i = 1; $i <= 31; $i++){
              ?>
              <option name="nascimento-mes" value="<?php echo $i; ?>"><?php echo $i; ?></option>
              <?php } ?>
            </select>

            <select class="nascimento">
              
              <option name="nascimento-mes" value="janeiro">Janeiro</option>
              <option name="nascimento-mes" value="fevereiro">Fevereiro</option>
              <option name="nascimento-mes" value="marco">Março</option>
              <option name="nascimento-mes" value="abril">Abril</option>
              <option name="nascimento-mes" value="maio">Maio</option>
              <option name="nascimento-mes" value="junho">Junho</option>
              <option name="nascimento-mes" value="julho">Julho</option>
              <option name="nascimento-mes" value="agosto">Agosto</option>
              <option name="nascimento-mes" value="setembro">Setembro</option>
              <option name="nascimento-mes" value="outubro">Outubro</option>
              <option name="nascimento-mes" value="novembro">Novembro</option>
              <option name="nascimento-mes" value="dezembro">Dezembro</option>
              
            </select>

            <select class="nascimento">
              <?php
                for($i = 1960; $i <= 2023; $i++){
              ?>
              <option name="nascimento-mes" value="<?php echo $i; ?>"><?php echo $i; ?></option>
              <?php } ?>
            </select>
            <div class="clear"></div>
          </div><!--w100-->

          <div class="w100">
            <div class="input-radio">
              <input type="radio" name="sexo" value="masculino" />
              <h2>Masculino</h2>
            </div><!--input-radio-->
            <div class="input-radio">
              <input type="radio" name="sexo" value="feminino" />
              <h2>Feminino</h2>
            </div><!--input-radio-->
          </div><!--w100-->

          <div class="w100">
            <input type="submit" value="Cadastrar" />
          </div>

          <div class="clear"></div>
        </form><!--new-account-->
      </div><!--open-account-->
      <div class="clear"></div>
    </div><!--center-->
  </section>

  <section class="linguas">
    <div class="center">
      <a class="selected-lingua" href="#">Português (BR)</a>
      <a href="#">Lorem Ipsum</a>
      <a href="#">Lorem Ipsum</a>
      <a href="#">Lorem Ipsum</a>
      <a href="#">Lorem Ipsum</a>
      <a href="#">Lorem Ipsum</a>
      <a href="#">Lorem Ipsum</a>     
    </div>
  </section>
</body>
</html>