<?php
//$servername = "localhost";
//$database = "test";
//$username = "root";
//$password = "root";
// Создаем соединение
//$conn = mysqli_connect($servername, $username, $password, $database);
// Проверяем соединение
// if (!$conn) {
    // die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
// mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styleformenu.css">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<title>Регистрация</title>
</head>
<body>
			<div class="rectangle1"> <!--форма меню когда пользователь не авторизован -->
				<div class="circle2">
					<img src="img/circle.svg " alt="logo" >
					<img src="img/left.png"  class="left2">
					<img src="img/right.png" class="right2">	
				</div>
				<img src="img/TOXIN.png" class="toxin">
				<div class="header_burger">
					<span></span>
				</div>
				<div class="menu">
					<ul>
						<li><a href="" class="hov">О нас </a></li>
						<li><a href="cards.html">Услуги <img src="img/expand_more.png"></a></li>
						<li><a href="">Вакансии</a></li>
						<li><a href="">Новости</a></li>
						<li><a href="">Соглашения <img src="img/expand_more.png">  </a></li>
						<li><a href="enter.php" class="buttons" id="enter">Войти</a></li>
						<li><a href="index.php" class="buttons" id="login1">Зарегистрироваться</a></li>
						
					</ul>
					
				</div>
			</div>


	<div class="container mt-4">
		<div class="row">
			<div class="col-6 col-md-4"></div>
			<div class="col-6 col-md-4 ooo">
			 	<h1>Регистрация</h1>
					<form action="check.php" method="post">
						<input type="text" name="login" class="form-control" id="login" placeholder="Логин" required  ><br>
						<input type="text" name="name" class="form-control" id="name" required placeholder="Имя"><br>
						<input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль" required ><br>
						<button class="btn btn-success">Зарегистрироваться</button><br>
					</form> 
			</div>
  		 <div class="col-6 col-md-4"></div>
		</div>
		
	</div>
	
</body>
</html>