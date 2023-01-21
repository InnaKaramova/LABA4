<?php 

require_once 'connect.php';

$id = $_POST['id'];
$title = $_POST['title'];
$price = $_POST['price'];
$description = $_POST['description'];
mysqli_query($connect, "UPDATE `items` SET `title` = '$title', `price` = '$price', `description` = '$description' WHERE `items`.`id` = '$id'");

echo "Данные о книге успешно изменены в базе";

?>

<br>
<h3>Для возвращение на страницу с просмотром товаров нажмите кнопку ниже</h3>
<form action="index.php" method='post'>
 		<button type="submit">Просмотр данных</button>
</form>