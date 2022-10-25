<!DOCTYPE html>
<html lang="ru">
<head>
<title>ElzaSpeak</title>
	<link rel="stylesheet" href="../css/Style.css" />
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<meta name="viewport" content="X-UA-Compatible" content="ie=edge"> 
	</head>
<body>
<style>
*{
	margin:0;
	padding:0;
	text-decoration:none;
}
body{
	background-image:linear-gradient(35deg,#F0E68C,#E6E6FA);
}
.hedar_korzina{  
	width:100%;
	height:70px;
	opacity:0.8;	
	background-color:black;
}


.block_reg{
	position: absolute;
	top:120px;
	left:30%;
	border:1px solid;
	width:500px;
	height:600px;
	background-color:white;
padding-left:50px;
}
h1{
	margin:auto 45%;
	color:white;
}

.btn_1{
	background-color:blue;
}
.btn_2{
	position: absolute;
	top:400px;
	left:30%;
	width:220px;
	height:60px;
	border-radius:25px;
	background-color:green;
	border:none;
	color:white;
	font-size:20px;
}
@media (max-width:1000px){
	.block_reg{
	left:20%;
}
}
</style>
<div class="hedar_korzina">

<a href="http://localhost/Portfolio/gucci/php/Main.php"><h1>Корзина</h1></a>
</div>


<div class="Konteiner">



<div class="block_reg">
<br/><h3>Выбраные товары</h3>
<label>Модель:</label> <br/><br/>
<label>Цена:</label> <br/><br/><br/><br/>

<h3>Подскажите нам, кому отправлять заказ.</h3>
<form action="http://localhost/Portfolio/gucci/php/orders/shopBD_prod.php" method="post"> 
<input type="text" name="name" /> <label>имя</label> <br/><br/>
<input type="text" name="phone" /> <label>телефон</label> <br/><br/>
<label>Страна</label> <select>
	<option value="">США</option>
	<option value="">Украина</option>
	<option value="">Италия</option>

</select>


<br/><br/>
<button  type="submit" class="btn_2"> Заказать</button>
</form>
</div>


</div>

</body>
</html>