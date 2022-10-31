<!DOCTYPE html>
<html>
<head>
<title> Gucci </title>
<link rel="shortcut icon" href="../../media/guc.ico" type="image/x-icon"> 
<link rel="stylesheet" href="../../Style.css">
<link rel="stylesheet" href="catalog.css">
<meta name="viewport" content="width=device-width">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"> 
</head>
<body>
<style>
    @import 'adapt_catal.css';
	@import '../../css/Adaptiv.css';
</style>

<div class="Main_catal">
  <?php require "../pg_hedar.php";?>

 <div class="Block_big">
 <div class="blockShop_Main">

	<h3>хит сезона</h3> 
	<div class="fotoShop_Slider">  
	<div class="fotoShop_1">  
		<img id="tovar1" src="../../media/tovKollacs.webp" width="100%" height="700" alt="парфюм"/>
		<img id="tovar2" src="../../media/tovKollacs_back.webp" width="100%" height="700" alt="парфюм"/>
	</div>
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



 <div class="Block_small">
	  <div class="menFon">  
		<h2>ACCESSORIES</h2>
		<img src="../../media/acces.jpeg" width="100%" height="810" />  
		</div>
	</div>
	<div class="blockShop">  
	  <div class="tovar_block"> 
	  <img src="../../media/antNEWsum.png" width="100%" height="350" />  
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
	<img src="../../media/antNEWsum.png" width="100%" height="300" />  
<span name="opis">Сумки</span>
	<a href="http://localhost/Portfolio/gucci/php/shop/shop.php">
		<button name="btn_buy_2">подробнее</button></a>
	</div>

	<div class="tovMOD_2"> 
	<img src="../../media/remen.webp" width="100%" height="350" /> 
<span name="opis">Ремешки</span>
	<a href="http://localhost/Portfolio/gucci/php/shop/shop.php"><button name="btn_buy_3">подробнее</button></a>
	</div>

	<div class="tovMOD_3">  
	<img src="../../media/ochki.jpg" width="100%" height="350" /> 
<span name="opis">Очки</span>
	<a href="http://localhost/Portfolio/gucci/php/shop/shop.php"><button name="btn_buy_4">подробнее</button></a>
	</div>

	<div class="tovMOD_4">  
	<img src="../../media/braslet.jpeg" width="100%" height="350" /> 
<span name="opis">Браслеты</span>
	<a href="http://localhost/Portfolio/gucci/php/shop/shop.php"><button name="btn_buy_5">подробнее</button></a>
	</div>

	</div>

</div>
 <div class="Block_footer">
	<?php require "../pg_footer.php";?>
 </div>

</div><!------------------------------ END Main ------------------------------------------>


<script type="text/javascript" src="../../gucci.js"></script>
<script type="text/javascript" src="../../slide.js"></script>
</body>
</html>
