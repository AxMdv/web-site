<?php
session_start();
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

$password = md5($password);

$mysql = new mysqli('localhost','root','','mysql');

$check = $mysql ->query("SELECT * FROM `register` WHERE `login`='$login' AND `password`='$password' ");
$register = $check -> fetch_assoc();
if(count($register) == 0)
{echo "Такой пользователь не найден"; exit();  }
session_start();

$name = $_POST['login'];
$_SESSION['userID'] = $name;

setcookie('register', $register['login'], time() + 300, "/");

  $mysql->close();

  header('Location: info.php');

?>
