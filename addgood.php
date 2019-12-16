<html>
<head>
	<meta charset="utf-8">
	<title> Добавление товара</title>
			
			<style> 
			body { background: url(auth.jpg_large); }
			.addgooodpage {
			width: 1000px;
			height: 1000px;
			position: absolute;
			top: 20%;
			left: 30%;
			margin: -125px 0 0 -125px;
			}
			</style>
</head>

<body>
	<div class="addgooodpage"> 
		<h1>  Добавление товара </h1>
		<form action="addgoodform.php" method="POST" enctype="multipart/form-data">
			<p>Тип товара:
				<select name="goodtype" size=1>
					<option value="Мягкая игрушка">Мягкая игрушка</option>
				</select>
			</p>
			<p>Наименование товара: <input type="text" name="goodname" required></p>
			<p>Краткое описание: <input type="text" name="gooddescr" style="width: 40%; height:30%" required> </p>
			<p> Цена: <input type="text" name="cost" required>  </p>
			<p> фото: <input type="file" name="goodphoto"> </p>
			<input type="submit" value="Добавить">
		</form>
	</div>
</body>
</html>