<?php
	/*require "secure/session.inc.php";*/
	require "../inc/lib.inc.php";
	require "../inc/config.inc.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Поступившие заказы</title>
	<meta charset="utf-8">
</head>
<body>
<h1>Поступившие заказы:</h1>
<?php
$orders = getOrders();
    if(!$orders){
        echo "Заказов нет";
        exit;
    }
 foreach($orders as $order){
     $dt = date("d-m-Y H:i", $order["date"]);
?>
<hr>
<h2>Заказ номер:<?=$order["orderid"]?> </h2>
<p><b>Заказчик</b>:<?=$order["name"]?> </p>
<p><b>Email</b>: <?=$order["email"]?></p>
<p><b>Телефон</b>: <?=$order["phone"]?></p>
<p><b>Адрес доставки</b>: <?=$order["address"]?></p>
<p><b>Дата размещения заказа</b>:<?=$dt?> </p>

<h3>Купленные товары:</h3>
<table border="1" cellpadding="5" cellspacing="0" width="90%">
<tr>
	<th>N п/п</th>
	<th>Название</th>
	<th>Автор</th>
	<th>Год издания</th>
	<th>Цена, грн.</th>
	<th>Количество</t
</tr>


</table>
<p>Всего товаров в заказе на сумму:<?=$sum?> грн.</p>
<?php
    $i=1; $sum = 0;
	foreach($goods as $item){
        ?>
        <tr>
            <td><?=$i?></td>
            <td><?= $item['title']?></td>
            <td><?= $item['author']?></td>
            <td><?= $item['pubyear']?></td>
            <td><?= $item['price']?></td>
            <td><?= $item['quantity']?></td>
        </tr>
        <?php
        $i++;
        $sum += $item['price'] * $item['quantity'];
    } // конец цикла
?>


</body>
</html>