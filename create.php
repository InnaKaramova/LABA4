<?php 

require_once 'connect.php';

$title = $_POST['title'];
$price = $_POST['price'];
$description = $_POST['description'];

mysqli_query($connect, "INSERT INTO `items` (`id`, `title`, `price`, `description`) VALUES (NULL, '$title', '$price', '$description')");

echo "Книга успешно добавлена в базу наших товаров";

?>

<br>
<h3>Для возвращение на страницу с просмотром товаров нажмите кнопку ниже</h3>
<form action="index.php" method='post'>
 		<button type="submit">Просмотр данных</button>
 </form>

