<?php 
	// подключение библиотек
	require_once "inc/lib.inc.php";
	require_once "inc/config.inc.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Каталог товаров</title>
</head>
<body>
<p>Товаров в <a href="basket.php">корзине</a>: <?php echo "$count";?></p>
<table border="1" cellpadding="5" cellspacing="0" width="100%">
<tr>
	<th>Название</th>
	<th>Автор</th>
	<th>Год издания</th>
	<th>Цена, грн.</th>
	<th>В корзину</th>
</tr>
<?php
 $goods = selectAllItems();
if(!$goods){
    echo "Произошла ошибка!";
    exit;
}
foreach($goods as $item){
?>
     <tr>
        <td><?= $item['title']?></td>
        <td><?= $item['author']?></td>
        <td><?= $item['pubyear']?></td>
        <td><?= $item['price']?></td>
        <td><a href="add2basket.php?id=<?=$item['id']?>">В корзину</a></td>
    </tr>

</table>
</body>
</html>