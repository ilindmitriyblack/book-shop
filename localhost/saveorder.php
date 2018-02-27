<?php
	require "inc/lib.inc.php";
	require "inc/config.inc.php";
//Полученние данных из формы
$name =  $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$address = $_POST["address"];
//Получение идентификатора заказа
$format = "d-m-y-h-i";
$date = date($format);
$orderid = $basket["orderid"];
$order = "$name|имя пользователя $email|email $phone|телефон $address|адрес $date|время $orderid\n";
file_put_contents("admin/".ORDERS_LOG, $order, FILE_APPEND);
    saveOrder($dt);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Сохранение данных заказа</title>
</head>
<body>
	<p>Ваш заказ принят.</p>
	<p><a href="catalog.php">Вернуться в каталог товаров</a></p>
</body>
</html>