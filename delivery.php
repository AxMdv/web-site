<?php
session_start();
?>

<html>
	<head>
		<meta charset = "utf-8">
		<link rel="stylesheet" href="style1.css">
	</head>
<body>

<header class="logo">
  <h1 class="header-title"> Soft Goods<span class="title-description">(магазин мягких игрушек)</span></h1>
</header>
	
<div class="exit-button">
  <p><?=$_SESSION['userID'];?></p>
	<p><a href="exit.php">Выйти</a></p>
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
   <div> 
		<h4> В нашем магазине вы можете забрать следующим образом:</h4>
			<ol>
				<li> <p> Самовывозом из пункта выдачи: бесплатно. Ходынская улица, 2 (метро Улица 1905 года) (10 минут пешком)</p>
				<img src="delivery1.png">	</li>
				<li> <p> Доставка курьером в пределах МКАД: 300рублей, за МКАД +10 рублей за 1 километр </p> 
				<img src="delivery2.jpg"> </li>
				<li> <p> Службой "Почта России": 500 рублей</p> 
				<img src="delivery3.jpg"> </li>
				
			</ol>
   </div>
    
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
</body>
</html>