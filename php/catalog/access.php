<!DOCTYPE html>
<html>
<head>
<title> Gucci </title>
<link rel="shortcut icon" href="../../media/guc.ico" type="image/x-icon">  <!---- Подкл. иконки в title------->
<link rel="stylesheet" href="catalog.css">
<meta name="viewport" content="width=device-width">  <!-- Добавит Адаптивность -->

<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">          <!--Подключение шрифта из Google Fonts-->

</head>
<body>
<style>
    @import 'adapt_catal.css';

</style>
<style>
.hedar{  
	width:100%;
	height:70px;
	opacity:0.8;	
	background-color:black;
}
#btn_menu{
	top:10px;
}
.text_1{ /*gucci*/
	cursor:pointer;	
	font-size:40px;
}

.Main_list {
	display:none;
}



</style>

<div class="Main">


<?php require "catal_supp.php";?>


<div class="kontainer_1">
<div class="element_1">

<?php require "../hedar.php";?>
<!------------------------ боковое меню ------>
<img id="btn_menu" src="../../media/menu.png" alt="" width="40" height="40">
<div class="nav_menu_Main">

<img id="btn_menu_close" src="../../media/wClose.png" width="40" height="40"  alt="">
<div class="list_menu">
    <ul>
        <a href=""><li>Новая коллекция</li></a>
        <a href=""><li>Мужская одежда</li></a>
        <a href=""><li>Женская одежда</li></a>
        <a href=""><li>Аксессуары</li></a>
        <a href=""><li>Магазин</li></a>
        <a href=""><li>История Gucci</li></a>

    </ul>
    <img id="logo_gucci" src="../../media/guc.ico" width="110" height="110"/>
    <div class="gucci_detali">
г.Киев, ул. Палладина 6, 5 этаж.<br/> <br/> 
+38095787860 <img src="../../media/viber.png" width="25" height="25"/>
+38067857860 <img src="../../media/wapp.png" width="25" height="25"/>
<p>Мы в соц. сетях:</p><br/> 
<img src="../../media/card2.png" width="27" height="27"/>
<img src="../../media/card3.png" width="27" height="27"/>
<img src="../../media/card4.png" width="27" height="27"/>

</div>
</div>
</div>
<br/><br/><br/><br/>

<div class="blockShop_Main">  
<h3>хит сезона</h3>
<div class="fotoShop_1">  
<img id="tovar1" src="../../media/tovKollacs.webp" width="75%" height="700" alt="парфюм"/>
<img id="tovar2" src="../../media/tovKollacs_back.webp" width="75%" height="700" alt="парфюм"/>
<div class="prevBTN"> < </div>
<div class="nextBTN"> > </div>
</div>

<div class="textShop_men">
<div class="tx textSh_Name">Солнцезащитные очки в пластиковой оправе</div>
<div class="tx textSh_About">
<b>Описание:</b> <br/>
Пластиковая оправа. Квадратная форма. Прозрачная оправа. Полная УФ-защита с категорией фильтра 3. Эти солнцезащитные очки выполнены из 
переработанных постиндустриальных отходов от производства поликарбонатных очков.<br/>
<br/>
<b>Харктеристики:</b> <br/>
Frame: 98% recycled polycarbonate,2% copper. Glass: 100% polycarbonate
</div>

<div class="btn_group_buy">

<button name="to_go" onclick="document.getElementById('i_Number').value++;">Купить</button>
<a href="http://localhost/Portfolio/gucci/php/shop/shop.php"><button name="shop_go">В магазин</button></a>
</div>

<div class="tx textSh_Price">1999грн<small><sup>45коп.</sup></small></div>

</div>
</div>

</div>
</div>


<div class="kontainer_2">
<div class="element_2">
<div class="menFon">  
<h2>ACCESSORIES</h2>
<img src="../../media/acces.jpeg" width="100%" height="810" />  
</div>
<div class="blockShop">  

<div class="tovar_block"> 
<img src="../../media/sumko1.jpg" width="100%" height="350" />  
<span name="opis">Сумки</span>
<a href="http://localhost/Portfolio/gucci/php/shop/shop.php"><button name="btn_buy_2">подробнее</button></a>
</div>



<div class="tovar_block"> 
<img src="../../media/remen.webp" width="100%" height="350" /> 
<span name="opis">Ремешки</span>
<a href="http://localhost/Portfolio/gucci/php/shop/shop.php"><button name="btn_buy_3">подробнее</button></a>
</div>



<div class="tovar_block">  
<img src="../../media/ochki.jpg" width="100%" height="350" /> 
<span name="opis">Очки</span>
<a href="http://localhost/Portfolio/gucci/php/shop/shop.php"><button name="btn_buy_4">подробнее</button></a>
</div>



<div class="tovar_block">  
<img src="../../media/braslet.jpeg" width="100%" height="350" /> 
<span name="opis">Браслеты</span>
<a href="http://localhost/Portfolio/gucci/php/shop/shop.php"><button name="btn_buy_5">подробнее</button></a>
</div>


</div>













<div class="blockShop2">  

<div class="tovMOD_1">
<img src="../../media/sumko1.jpg" width="100%" height="350" />  
<span name="opis">Сумки</span>
<a href="http://localhost/Portfolio/gucci/php/shop/shop.php"><button name="btn_buy_2 р">подробнее</button></a>
</div>



<div class="tovMOD_2"> 
<img src="../../media/remen.webp" width="100%" height="350" /> 
<span name="opis">Ремешки</span>
<a href="http://localhost/Portfolio/gucci/php/shop/shop.php"><button name="btn_buy_3 p">подробнее</button></a>
</div>



<div class="tovMOD_3">  
<img src="../../media/ochki.jpg" width="100%" height="350" /> 
<span name="opis">Очки</span>
<a href="http://localhost/Portfolio/gucci/php/shop/shop.php"><button name="btn_buy_4 p">подробнее</button></a>
</div>



<div class="tovMOD_4">  
<img src="../../media/braslet.jpeg" width="100%" height="350" /> 
<span name="opis">Браслеты</span>
<a href="http://localhost/Portfolio/gucci/php/shop/shop.php"><button name="btn_buy_5 p">подробнее</button></a>
</div>


</div>
</div>
 </div>

<!---------------------------------------------------------------------------------------------------------->





<!----------------------------------- 6 ЧАСТЬ / ФУТЕР ------------------------------------------------->

<div class="Konteiner_6">
<div class="block_6">

<?php require "footer_catal.php";?>







</div>
<script type="text/javascript" src="../../gucci.js"></script>
</body>
</html>
