<?php 
require_once('db.php');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password_validate'];

if ($password === $password2) {
  $sql = 'INSERT INTO login(name, email, password) VALUES(?, ?, ?)';
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$name, $email, $password]);
}

header('Location: index.php');
?>