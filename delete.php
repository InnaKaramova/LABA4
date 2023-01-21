<?php
	require_once 'connect.php';
	echo "Вы удалили товар с id=";
	print_r($_GET['id']);
	$products_id = $_GET['id'];
	mysqli_query($connect, "DELETE FROM items WHERE `items`.`id` = '$products_id' ");
?>

<br>
<h3>Для возвращение на страницу с просмотром товаров нажмите кнопку ниже</h3>
<form action="index.php" method='post'>
 		<button type="submit">Просмотр данных</button>
</form>

