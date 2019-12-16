<?php
session_start();
?>
<html>
	<head>
		<meta charset = "utf-8">
		<link rel="stylesheet" href="style1.css">
	</head>
<body>
<?php
if (isset($_SESSION['userID'])):
?>
<header class="logo">
	<h1 class="header-title"> Soft Goods<span class="title-description">(магазин мягких игрушек)</span></h1>
</header>
	
<div class="exit-button">
  <p><?=$_SESSION['userID'];?></p>
	<p><a href="exit.php">Выйти</a></p>
	<?php 
    if ($_SESSION['userID'] == "Admin123"):
    ?>
    <p><a href="addgood.php">Добавление продукта</a></p>
      <?php endif; ?>
</div>

<div class="content">
  <nav class="menu">
  	<ul>
      <li class="menu-list-item"><a class="menu-item-link" href="info.php">Главная</a></li>
      <li class="menu-list-item"><a class="menu-item-link" href="buy.php">Купить</a></li>
      <li class="menu-list-item"><a class="menu-item-link" href="delivery.php">Доставка</a></li>
      <li class="menu-list-item"><a class="menu-item-link" href="about_us.php">О нас</a></li>
  	</ul>
  </nav>
  
  <main class="main">
  	<h2 class="greetings">Мы открылись!</h2>
    
   
      
       <?php
$mysql = new mysqli('localhost','root','','mysql');
$query ="SELECT `goodphoto`,`goodtype`,`goodname`,`gooddescr`,`cost` FROM `goods`"; 
$result = mysqli_query($mysql, $query); 
if($result)
 $rows = "";
    while($rows = $result->fetch_assoc()){
		?> 
		<div class='good1'>
		<?php
		$name=$rows['goodname'];
		$type=$rows["goodtype"];
		$descr=$rows["gooddescr"];
		$cost=$rows["cost"];
		echo "<img src=\"data:image/png;base64,".base64_encode($rows["goodphoto"])."\" />";
		?>
		</br>		
		</div>
		<div class="good2">
		<?php
		echo "Название товара: " , $name;  ?></br>  <?php
        echo "Тип товара: " , $type;  ?></br>  <?php
        echo "Описание: ", $descr ;   ?></br>  <?php
        echo "Цена: ",  $cost ;	
	}
		?>
		</div>
		<?php
    mysqli_free_result($result);
mysqli_close($mysql);
?>    
  </main>
  
  <aside class="banner">
  	<p>Покупайте наш товар по низким ценам!</p>
	<img src="sale.jpg">
  	<p>Внимание, АКЦИЯ!!! <br>
  		При покупке двух игрушек - скидка 30%!!!</p>
		<img src="minus-thirty.jpg">
  	<p>Присоединяйтесь к нам в соц сетях: </br>
	Вступайте в нашу группу вконтакте: <a href="#0"> <img style="width: 5%" src="vk.png"> </a>  </br>
	Подписывайтесь на наш инстаграм: <a href="#0"> <img style="width: 5%" src="inst.jpg"> </a> 
	</p>
  </aside>
</div>

<footer class="footer"> 
  <p>Мы работаем 24/7</p>
  <address class="contacts">
    <ul class="contacts-list">
      <li class="contact-item"><a class="contact-link" href="#0">Техническая поддержка: 8-800-535-35-35</a></li>
      <li class="contact-item"><a class="contact-link" href="#0">www.vk.com/softgoods</a></li>
      <li class="contact-item"><a class="contact-link" href="#0">softgoods@gmail.com<</a></li>
    </ul>
  </address>  
</footer>
<?php
endif;
?>
</body>
</html>