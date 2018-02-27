<?php
require_once "../inc/config.inc.php";
require_once "../inc/lib.inc.php";

    $title = strip_tags($_POST['title']);
    $author = strip_tags($_POST['author']);
    $pubyear = abs((int)($_POST['pubyear']));
    $price = abs((int)($_POST['price']));

if(!addItemToCatalog($title, $author, $pubyear, $price)){
    echo 'Произошла ошибка при добавлении товара в каталог';
    }else{
        header("Location: add2cat.php");
        exit;
}