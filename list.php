<?php 
	require_once 'connect.php';
	echo "Просмотр товара с id = ";
	print_r($_GET['id']);
	$products_id = $_GET['id'];
	$products = mysqli_query($connect, "SELECT * FROM items WHERE id='$products_id'");
	$products = mysqli_fetch_assoc($products);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Просмотр товара</title>
</head>
<body>
	<h2>Название книги: <?= $products['title']?></h2>
	<h4>Цена: <?= $products['price']?></h4>
	<h4>Описание книги: <?= $products['description']?></h4>
</body>
</html>