<?php 
    //CRUD
    //create+/read+/update+/delete+
    //подключение к базе данных
   require_once 'connect.php';
   //подключение к базе данных
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>LABA</title>
 </head>

 <!--Стиль-->
 <style>
 	td {
 		border: 2px solid grey;
 		padding: 10px;
 	}
 	th {
 		border: 2px solid pink;
 		padding: 10px;
 	}
 	h1 {
 		color: grey;
 	}
 	h2 {
 		color: pink;
 	}
 	a {
 		text-decoration: none;
 	}
 </style>
  <!--Стиль-->

 <body>
 	<h1>
 		Таблица с товарами
 	</h1>
 	<table>
 		<tr>
 			<th>ID</th>
 			<th>Название</th>
 			<th>Цена</th>
 			<th>Описание</th>
 		</tr>
 		<tr>
 			<?php
 				$products = mysqli_query($connect, "SELECT * FROM items");
 				$products = mysqli_fetch_all($products);
 				foreach ($products as $products) {
 					?>
 					<tr>
 						<td><?= $products[0]?></td>
 						<td><?= $products[1]?></td>
 						<td><?= $products[2]?></td>
 						<td><?= $products[3]?></td>
 						<td><a href="list.php?id=<?= $products[0]?>">Просмотр</a></td>
 						<td><a href="update.php?id=<?= $products[0]?>">Изменить</a></td>
 						<td><a style="color:deeppink;" href="delete.php?id=<?= $products[0]?>">Удалить</a></td>
 					</tr>
 					<?php	
 				}
 			?>
 		</tr>
 	</table>

 	<h2>
 		Добавить новую книгу в таблицу
 	</h2>
 	  <!--Action пересылает нас на другую страничку - create.php-->
 	<form action="create.php" method='post'>
 		<p>Название книги</p>
 		<input type="text" name="title">
 		<p>Цена книги</p>
 		<input type="number" name="price">
 		<p>Описание книги</p>
 		<input type="text" name="description">
 		<br>
 		<br>
 		<button type="submit">Отправить данные</button>
 	</form>


 </body>
 </html>