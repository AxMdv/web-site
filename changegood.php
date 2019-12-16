<?php 
    error_reporting(0);
   
    $mysql = new mysqli('localhost','root','','mysql');
	
	$name=$_COOKIE['register'];
	$stmt = $mysql->prepare("SELECT `admin` FROM `register` WHERE `name`= ? "); 
            $stmt->bind_param('i', $name); 
            $stmt->execute(); 
            $stmt->bind_result($admin);
            $stmt->fetch();
	if(!empty($admin)):
    ?>
    <p><a href="addgood.php">Добавление продукта</a></p>
      <?php endif; 
	   $mysql->close();?> 