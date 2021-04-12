<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styleformenu.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	

	<title>Вход</title>
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
				<h1>Войти</h1>
				<form action="auth.php" method="post">
					<input type="text" name="login" class="form-control" id="login" required  placeholder="Логин" ><br>
					<input type="password" name="pass" class="form-control" id="pass" required  placeholder="Пароль"><br>
					<button class="btn btn-success">Авторизоваться</button>
					<a href="index.php">У вас нет аккаунта?</a>
				</form> 
			</div>
  			<div class="col-6 col-md-4"></div>
		</div>
		
	</div>
	
	
</body>
</html>