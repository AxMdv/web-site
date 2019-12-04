<?php
$email = ($_POST["email"]);
$login = ($_POST["login"]);
$password = ($_POST["password"]);
$tpassword = ($_POST["tpassword"]);

if (strlen($login)>=6) {
if (preg_match('/^([a-zA-Z])+[a-zA-Z0-9_]{1,20}$/', $login)) {echo "Подходящий логин <br>";}
else {echo "Неподходящий логин <br>";exit();}}
else {echo "Неподходящий логин <br>";exit();};

if (preg_match('/^([a-zA-Z0-9._-])+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/', $email)) {echo "Подходящая почта <br>";}
else {echo "Неподходящая почта <br>";exit();};

if (strlen($password)>=8) {
if (preg_match('/[a-z]{1,}/', $password)&&preg_match('/[A-Z]{1,}/', $password)&&preg_match('/[0-9]{1,}/', $password)
	&&preg_match('/[\. , % $ # @ & * ^ | \\\ \/ ~ \[ \] { }]{1,}/', $password)) {echo "Подходящий пароль <br>";}
else {echo "Неверный пароль <br>";exit();}}
else {echo "Неверный пароль <br>";exit();};

if ($password!==$tpassword) {echo "Пароли не совпадают <br>";exit();}
else {
$password = md5($password);
$mysql = new mysqli('localhost','root', '','mysql');
    $mysql ->query("INSERT INTO `register` (`email`, `login`, `password`)
    VALUES('$email', '$login', '$password')");

$mysql->close();}

?>