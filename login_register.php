<?php 
session_start();

require_once('db.php');

$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($email) && !empty($password)) {
  $sql = 'SELECT id, name, password FROM login WHERE email=?';
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$email]);
  // カラム名をキーとした連想配列として取得する。
  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($user && ($password == $user['password'])) {
    // セッション固定攻撃（Session Fixation）対策：セッションIDを再生成
    session_regenerate_id(true);

    $_SESSION = $user['id'];
    $_SESSION = $user['name'];

    header('Location: index.php');
  } else {
    echo 'IDまたはパスワードが違います。';
  }
}

?>