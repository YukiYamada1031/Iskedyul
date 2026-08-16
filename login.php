<?php
require_once('db.php');

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/login.css">
  <link rel="icon" href="img/icon.svg">
  <title>I-Skedul | Log in</title>
</head>
<body>
  <div class='container'>
    <div class='title'>ログイン</div>

    <div class='section-title'>
      <h2 class='main-title'>I-SKEDUL</h2>
      <p class='sub-title'>
        アカウントにログインして<br>
        あなたのTodoを管理しましょう
      </p>
    </div>

    <form class='form' action='login_register.php' method='POST'>
      <div class='form-group'>
        <!-- メールアドレス -->
        <label for='email'>メールアドレス</label>
        <input id='email' name='email' required>
      </div>
      <div class='form-group'>
        <!-- パスワード -->
        <label for='password'>パスワード</label>
        <input id='password' name='password' required>
      </div>
      <!-- ログインボタン -->
      <input type='submit' value='ログイン'>
    </form>

    <div class='new'>
      <p>アカウントをお持ちでない方は</p>
      <div class='button-new'>
        <a href='./new.php'>新規登録はこちら</a>
      </div>
    </div>
  </div>
</body>
</html>