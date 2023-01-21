<?php 
    //CRUD
    //create/read/update/delete
    //подключение к базе данных
    $connect = new mysqli('localhost', 'root', '', 'myfirstsite');

	if(mysqli_connect_errno()){
		prinf("Соединение не установлено", mysqli_connect_error());
			exit();
	}