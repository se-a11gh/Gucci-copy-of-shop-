<!DOCTYPE html>
<html>
<head><title> Gucci </title>
<link rel="shortcut icon" href="../media/guc.ico" type="image/x-icon">  <!---- Подкл. иконки в title------->
<link rel="stylesheet" href="catalog.css">
<meta name="viewport" content="width=device-width">  <!-- Добавит Адаптивность -->
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">          <!--Подключение шрифта из Google Fonts-->
</head>
<body>
<style>
.kontainer_4{
	display:flex;
}

.element_4{  /*холст*/
	position:absolute;
	left:0px;
	top:800px;
	width:99.7%;
	height:700px;
	z-index:1;
}

.hedar{  
	width:100%;
	height:70px;
	opacity:0.8;	
	background-color:black;
}
.text_1{ /*gucci*/
	cursor:pointer;	
	font-size:40px;
}
.poiskovik input{
	position:relative;
	left:1200px;
	top:15px;
	border-radius:40px;
	height:25px;
	width:150px;
	padding-left:10px;
}

.Main_list {
	display:none;
}

.korzina{
	position:absolute;
	right:30px;
	top:-25px;
	width:130px;
	height:100px;
	background-image:url('../../media/korzina.png');
	background-size:230px 150px;
	background-repeat:no-repeat;
	z-index:10;
}


#tovAcs2{
	display:none;
}

.prevAcs{
	display:none;
	position:absolute;
	left:5%;	
	top:370px;
	font-size:45px;
	cursor:pointer;
}
.nextAcs{
	position:absolute;
	left:70%;
	top:370px;
	font-size:45px;
		cursor:pointer;
}






    @import '../css/Adaptiv.css';
    @import '../css/mobile.css';
</style>
<?php require "../support.php";?>
<div class="kontainer_1">
<div class="element_1">
<?php require "../hedar.php";?>





<div class="block_22">
<div class="pokText">
<p name="CollPok-1">
Очередной показ в Милане представил одежду для мужчин и женщин, 
юбки длины макси, жакеты и пиджаки из прошлого, украшенные перьями,
разнообразные пальто и плащи с ярким А-силуэтом.
</p>
<p name="CollPok-2">
Креативный директор представил смелые идеи дизайнеров.
Изюминкой коллекции стали вещи, которые бренд предлагал еще в 60-70-х годах. Именно в эту пору пришелся пик популярности и славы известного Gucci.
</p>
</div>
<img id="gaga" src="../../media/pok1.jpg" width="43%" height="800"/>
<img id="Dodiki" src="../../media/pok3.jpg" width="60%" height="800"/>
</div>






<div class="block_33">
<img id="pokaz" src="../../media/pokaz.jpg" width="1525" height="800"/>
<p>Были представлены новые туфли от итал. дизайнера Альфредо Датти
Они выполнены из натуральной кожи и украшены культовой
фурнитурой как напоминание об истории создания бренда Gucci.
<a href="" ><button name="btn_Pokaz">подробнее</button></a>
</p>
<img id="tufls" src="../../media/pokaz2.jpg" width="350" height="350"/>
</div>




<!----------------------------------- 6 ЧАСТЬ / ФУТЕР

<script type="text/javascript" src="../gucci.js"></script>


------------------------------------------------->
<div class="Konteiner_6">
<div class="block_6">

<?php require "footer.php";?>

</body>
</html>