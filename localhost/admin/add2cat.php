<?php
require"secure/session.inc.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Форма добавления в каталог</title>
</head>
<body>
	<form action="save2cat.php" method="POST">
		<p>Название:<input type="text" name="title" size="100">
		<p>Автор:<input type="text" name="author" size="50">
		<p>Год публикации:<input type="text" name="pubyear" size="4">
		<p>Цена:<input type="text" name="price" size="6">грн.
		<p><input type="submit" value="Add">
        <p><a href="localhost/catalog.php">Каталог</a></p>
	</form>
</body>
</html>