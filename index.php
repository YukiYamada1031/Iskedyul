<?php
require_once('db.php');

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <link rel="icon" href="img/icon.svg">
  <title>Document</title>
</head>
<body>
  <div class='flex-index'>
    <div class='left-block'>
      <nav>
        <h2></h2>
        <li><a></a></li>
        <li><a></a></li>
        <li><a></a></li>
        <li><a></a></li>
      </nav>

      <div class='image'>
        <img src='img/top.png'>
      </div>

      <p class='message'>
        毎日の小さな積み重ねが<br>
        大きな成果につながります。
      </p>

      <a href='./record.php'>今日のTodoを追加</a>
    </div>

    <div class='center-block'>
      <h2>一覧</h2>
      <div class='wrapper'></div>
      <div class='index'></div>
    </div>

    <div class='right-block'>
      <div class='mypage'></div>
      <div class='situation'></div>
      <div class='flex-situation'>
        <div class='item'></div>
        <div class='item'></div>
        <div class='item'></div>
        <div class='item'></div>
      </div>
      <div class='sonota'>
        <li><a>通知設定</a></li>
        <li><a>アプリに関して</a></li>
        <li><a>ヘルプ</a></li>
        <li><a>ログアウト</a></li>
      </div>
    </div>
  </div>
</body>
</html>