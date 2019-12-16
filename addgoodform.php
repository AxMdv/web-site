<?php
  $goodtype = filter_var(trim($_POST['goodtype']),
  FILTER_SANITIZE_STRING);
  $goodname = filter_var(trim($_POST['goodname']),
  FILTER_SANITIZE_STRING);
  $gooddescr = filter_var(trim($_POST['gooddescr']),
  FILTER_SANITIZE_STRING);
  $cost = filter_var(trim($_POST['cost']),
  FILTER_SANITIZE_STRING);
  $goodphoto = addslashes(file_get_contents($_FILES['goodphoto']['tmp_name']));
  
 $mysql1 = new mysqli('localhost','root','','mysql');
 
 $mysql1->query("INSERT INTO `goods` (`goodtype`,`goodname`,`gooddescr`,`cost`,`goodphoto`)
VALUES('$goodtype','$goodname','$gooddescr','$cost','$goodphoto')");
$mysql1->close();
 header('Location:info.php');
?>