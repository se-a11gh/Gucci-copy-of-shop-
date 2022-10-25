<!DOCTYPE html>
<html lang="ru">
<head>
<title>Speak app</title>
		<link rel="stylesheet" href="educ.css" />
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
		<meta name="viewport" content="X-UA-Compatible" content="ie=edge"> 
	</head>
<body>

<h1>Товар заказан</h1>

<?php			// ПОДКЛЮЧЕНИЕ К БД И СИНТАКСИС MySQL
$abc = "Документ загружен"; // Благодаря require переменная и ее вывод находятся в папке: slon100.php
	$prod = filter_var(trim($_POST['nameProd']), FILTER_SANITIZE_STRING);
	$price = filter_var(trim($_POST['priceProd']), FILTER_SANITIZE_STRING);
	$nCl = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
	$aCl = filter_var(trim($_POST['age']), FILTER_SANITIZE_STRING);
	$cCl = filter_var(trim($_POST['country']), FILTER_SANITIZE_STRING);

	$newOrder_nameCl = $nCl;
	$newOrder_nameProd = $prod;

 // Подключение к БД:
$activBase = new mysqli('localhost','root','root','gucci_shop_2');  // mysqli -- где i - это inpruf //  ПОДКЛЮЧЕНИЕ К БД
$activBase->query("INSERT INTO `products` (`nameProd`,`priceProd`) VALUES('$prod','$price')");  // ->(обращение к методу:) query(некие SQL команды); 
$activBase->query("INSERT INTO `klients` (`name`,`age`,`country`) VALUES('$nCl','$aCl', '$cCl')");  // ->(обращение к методу:) query(некие SQL команды); 


// Попробывать Массивы
$activBase->query("INSERT INTO `orders` (`klientid`,`prodid`) VALUES('$newOrder_nameCl','$newOrder_nameProd')");  // ->(обращение к методу:) query(некие SQL команды); 

$activBase->close();   // закрытие соединения с БД

?>






 








</body>
</html>         