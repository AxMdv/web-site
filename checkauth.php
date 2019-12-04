<?php
$email = ($_POST["email"]);
$login = ($_POST["login"]);
$password = ($_POST["password"]);
$tpassword = ($_POST["tpassword"]);

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

$password = md5($password);

$mysql = new mysqli('localhost','root','','register');

$result = $mysql ->query("SELECT * FROM `users` WHERE `login`='$login' AND `password`='$pass' ");
$user = $result -> fetch_assoc();
if(count($user) == 0)
{echo "Такой пользователь не найден";  }
?>