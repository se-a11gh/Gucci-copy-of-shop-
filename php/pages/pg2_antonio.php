<!DOCTYPE html>
<html>
<head><title> Gucci </title>
<link rel="shortcut icon" href="../media/guc.ico" type="image/x-icon"> 
<link rel="stylesheet" href="../../Style.css">
<link rel="stylesheet" href="css_page/antonDOP.css">
<meta name="viewport" content="width=device-width"> 
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<body>
<style>
@import '../../css/Adaptiv.css';

.Main{
	height: 1500px;
}
.Block_1_Header{
    width: 100%;
	height: 180px;
}
   .Block_anton{
    width: 100%;
	height: 860px;
	background-image:linear-gradient(35deg,white,#D3D3D3);
   }
</style>
<div class="Main">



<div class="Block_1_Header">
<?php require "pg_hedar.php";?>
</div>








<div class="Block_anton">



<div class="slideX">
<img id="sumAnt" src="../media/antNEWsum.png" width="100%" height="350"/>
<img id="sumAnt2" src="../media/antNEWsum2.png" width="100%" height="350"/>
<button type="submit" name="btnSumkaANT">Подробнее</button>
</div>

<div class="ANTprev"> < </div>
<div class="ANTnext"> > </div>



<div class="text_4dop">сумка "Lapiatio didi".</div>


<div class="block_3_4dop">
<input class="inp1" type="radio" name="clickA" id="inp_click_1" checked />
<input class="inp2" type="radio" name="clickA" id="inp_click_2" />
<div class="panel">
<label for="inp_click_1">Описание</label>
<label for="inp_click_2" name="xc">Характеристика</label>
</div>


<div class="xblock1"> <br/>
Это Изысканная женская модель на 2 отделения, крупная металлическая пряжка в форме 
подковы и канва с традиционным каноническим орнаментом и отделка из замши 
ярко-красного цвета. Она отлично подойдет под
деловой стиль.<br/> А в сочетании с пальто вы будете блестать на любой встрече.</div>

<div class="xblock2">Размер: длина - 28 см., высота - 21 см., глубина - 10 см.<br/>
Внутри: 2 отделения, разделенных отделением на молнии.<br/>
 Вся отделка и подклад выполнены из замши.<br/>
Цвет сумки: серый с темно-красным, цвет фурнитуры: серебро.<br/>
Застегивается сумочка на замочек-защелку, ремешок-цепочка на плечо</div>
</div>


<button class="btn_44" onclick="document.getElementById('i_Number').value++;">купить</button> 

</div>






<div class="Block_6_Footer">
<?php require "pg_footer.php";?>
</div>

</div>

<script type="text/javascript" src="../../gucci.js"></script>
</body>
</html>