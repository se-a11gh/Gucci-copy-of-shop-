<!DOCTYPE html>
<html>
<head>
<title> Gucci </title>
<link rel="shortcut icon" href="../media/guc.ico" type="image/x-icon">  <!---- Подкл. иконки в title------->
<link rel="stylesheet" href="../css/antonDop.css">
<meta name="viewport" content="width=device-width">  <!-- Добавит Адаптивность -->
<meta name="viewport" content="X-UA-Compatible" content="ie=edge"> 
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">          <!--Подключение шрифта из Google Fonts-->
</head>
<body>
<div class="Main">
<!------------------------------------------- 1 ЧАСТЬ -------------------------------------------------------------->
<?php require "support.php";?>
<div class="kontainer_1">
<div class="element_1">
<?php require "hedar.php";?>

</div>
</div>







<div class="kontainer_3dop">
<div class="element_3dop">
<div class="text_4dop">Аксессуары/ дополнительно</div>


<!----------------- Слайдер --------------------------------->
<div class="slideX2 menu2">


<div class="slides2">
<input type="radio" name="rr" id="q1" checked />
<input type="radio" name="rr" id="q2"/>
<input type="radio" name="rr" id="q3"/>

<div class="sled2 s12"><img  src="../media/sumko1.jpg"/></div>
<div class="sled2 s22"><img  src="../media/sumko2.jpg" /></div>
<div class="sled2 s32"><img  src="../media/sumko3.jpg" /></div>
</div>



<div class="navigS2">
<label for="q1" class="bar2"></label>
<label for="q2" class="bar2"></label>
<label for="q3" class="bar2"></label>
</div>

</div>
<div class="block_3_4dop">
<div class="panel_1">
<a href="#x1" class="pn_1">Описание</a>
<a href="#x2" class="pn_2">Характеристика</a>
</div>



<div class="panel_2">
<div id="x1" checked>Изысканная женская сумка "Lapiatio didi".<br/>
Это классическая модель на 2 отделения, крупная металлическая пряжка в форме 
подковы и канва с традиционным каноническим орнаментом и отделка из замши 
ярко-красного цвета.
</div>




<div id="x2">Размер: длина - 28 см., высота - 21 см., глубина - 10 см.<br/>
Внутри: 2 отделения, разделенных отделением на молнии.<br/>
 Вся отделка и подклад выполнены из замши.<br/>
Цвет сумки: серый с темно-красным, цвет фурнитуры: серебро.<br/>
Застегивается сумочка на замочек-защелку, ремешок-цепочка на плечо</div>

</div>




<a href="http://localhost/Portfolio/gucci/php/shop.php"><button class="btn_44">перейти в маг.</button> 
</a>


</div>
</div>
</div>






<!----------------------------------- 6 ЧАСТЬ / ФУТЕР ------------------------------------------------->
<div class="Konteiner_6">
<div class="block_6">

<?php require "footer.php";?>
</div>

<script type="text/javascript" src="../gucci.js"></script>
</body>
</html>