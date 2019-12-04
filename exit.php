<?php
setcookie('register', $register['login'], time()-3600,"/");
session_start();
session_unset();
 session_destroy();
  header('Location: auth.html');
 ?>
