<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,inital-sacle=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <title>SITEFLOW</title>
  </head>
  <body>
    <div class="conteiner mt-4">
      <?php 
      if($_COOKIE['user'] == '') :
      ?>
      <div class="row">
        <div class="col">
          <h1>Регистрация</h1>
          <form action="check.php" method="post">
            <input
              type="text"
              class="form-control"
              name="login"
              id="login"
              placeholder="Введите логин"
            /><br />
            <input
              type="text"
              class="form-control"
              name="name"
              id="name"
              placeholder="Введите имя"
            /><br />
            <input
              type="password"
              class="form-control"
              name="pass"
              id="pass"
              placeholder="Введите пароль"
            /><br />
            <button class="btn btn-success" type="submit">Зарегистрировать</button>
          </form>
        </div>
        <div class="col">
          <h1>Авторизция</h1>
          <form action="auth.php" method="post">
            <input
              type="text"
              class="form-control"
              name="login"
              id="login"
              placeholder="Введите логин"
            /><br />
            <input
              type="password"
              class="form-control"
              name="pass"
              id="pass"
              placeholder="Введите пароль"
            /><br />
            <button class="btn btn-success" type="submit">Авторизовася</button>
          </form>
        </div>
      </div>
      <?php else:?>
        <p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите здесь <a href="/exit.php">здесь</a>.</p>
      <?php endif;?>
    </div>
  </body>
</html>
