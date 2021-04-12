<?php

$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
$result = $mysql->query("SELECT * FROM `users` WHERE id='5'");

 // запрос на выборку
while($row = $result->fetch_assoc()){
	 echo '<p>id='.$row['id'].'. Текст: '.$row['login'].'</p>';
}

if($row['id']=='5')// получаем все строки в цикле по одной
{
    echo '<p>id='.$row['id'].'. Текст: '.$row['login'].'</p>';// выводим данные
}
else
	 echo '<p>id='.$row['id'].'. Текст: '.$row['login'].'</p>';
$mysql->close();



?>