<?php 
	require_once 'connect.php';
	echo "Вы хотите изменить товар с id=";
	print_r($_GET['id']);
	$products_id = $_GET['id'];
	$products = mysqli_query($connect, "SELECT * FROM items WHERE id='$products_id'");
	$products = mysqli_fetch_assoc($products);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Изменение товара</title>
</head>
<body>
	<h1>Изменение товара</h1>
	<form action="updatefunction.php" method='post'>
		<input type="hidden" name="id" value=<?= $products['id']?>>
 		<p>Название книги</p>
 		<input type="text" name="title" value=<?= $products['title']?>>
 		<p>Цена книги</p>
 		<input type="number" name="price" value=<?= $products['price']?>>
 		<p>Описание книги</p>
 		<input type="text" name="description" value=<?= $products['description']?>>
 		<br>
 		<br>
 		<button type="submit">Обновить данные</button>
 	</form>
</body>
</html>
