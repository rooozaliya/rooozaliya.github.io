<?php 

$login = $_POST['login'] ;// Удаляет все лишнее и записываем значение в переменную //$login
$name = $_POST['name'];
$pass = $_POST['pass'];
// Создаем хэш из пароля
$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');

$result1 = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login'");
$user1 = $result1->fetch_assoc(); // Конвертируем в массив
if(!empty($user1)){
	echo "Данный логин уже используется!";
	exit();
}
$mysql->query("INSERT INTO `users` (`login`, `pass`, `name`)
	VALUES('$login', '$pass', '$name')");

$mysql->close();

header('Location: page.html');
?>

