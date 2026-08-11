<?php

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/new.css">
  <link rel="icon" href="img/icon.svg">
  <title>I-Skedul | New account</title>
</head>
<body>
  <div class='container'>
    <div class='title'>新規登録</div>

    <div class='section-title'>
      <h2 class='main-title'>I-SKEDUL</h2>
      <p class='sub-title'>
        アカウントを作成して<br>
        あなたのTodoを管理しましょう
      </p>
    </div>

    <form  class='form' action='new_login_register.php' method='POST'>
      <!-- ユーザー名 -->
      <label for='name'>ユーザー名</label>
      <input id='name' name='name' required>
      <!-- メールアドレス -->
      <label for='email'>メールアドレス</label>
      <input id='email' name='email' required>
      <!-- パスワード -->
      <label for='password'>パスワード</label>
      <input for='password'name='password' required>
      <!-- パスワード（確認用） -->
      <label for='password_validate'>パスワード（確認用）</label>
      <input id='password_validate' name='password_validate' required>
      <!-- 送信ボタン -->
      <input class='submit' type='submit' value='新規登録'>
    </form>
  </div>
</body>
</html>