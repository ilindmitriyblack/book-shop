<?php
require_once "lib.inc.php";
//Параметры базы данных
const DB_HOST = "localhost";
const DB_LOGIN = "root";
const DB_PASSWORD = "";
const DB_NAME = "eshop";
//Файл с данными пользователя
const ORDERS_LOG = "orders.log";

//Соединение с БД
$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);
if(!$link){
    echo 'Ошибка: '
        . mysqli_connect_errno()
        . ':'
        . mysqli_connect_error();
}
//Корзина
$basket = [];
$count = 0;//кол-во товара в корзине 
basketInit();//Создание корзины пользователя

?>