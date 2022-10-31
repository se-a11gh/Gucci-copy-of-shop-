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
	.text_1{ /*gucci*/
	font-size:35px;
}
</style>

<div class="Main_catal">
  <?php require "../pg_hedar.php";?>

 <div class="Block_big">
 <div class="blockShop_Main">

	<h3>хит сезона</h3> 
	<div class="fotoShop_Slider">  
	<div class="fotoShop_1">  
		<img id="tovar1" src="../../media/tovKoll.webp" width="100%" height="700" alt="парфюм"/>
		<img id="tovar2" src="../../media/tovKoll_back.webp"  width="100%" height="700" alt="парфюм"/>
	</div>
		<div class="prevBTN"> < </div>
		<div class="nextBTN"> > </div>
	</div>


	<div class="fotoShop_Slider2">  
	<div class="fotoShop_2">  
		<img id="tovar3" src="../../media/tovKoll_2.webp" width="100%" height="700" alt="парфюм"/>
		<img id="tovar4" src="../../media/tovKoll_back2.webp"  width="100%" height="700" alt="парфюм"/>
	</div>
			<div class="prevBTN2"> < </div>
			<div class="nextBTN2"> > </div>
	</div>
			
			
	<div class="textShop_men">
	<div class="tx textSh_Name">Костюмный пиджак slim fit</div>
	
	<div class="tx textSh_About">
	<b>Описание:</b> <br/>
	Slim fit. Фактурная выделка. Узор в клетку. Подплечники. Воротник с лацканами. <br/>
	На груди прорезной карман. Длинные рукава с пуговицами на манжетах. <br/>
	По бокам два кармана с клапанами. Сзади разрезы. Подкладка. <br/>
	Внутри карманы. Застежка на две пуговицы. <br/>
	<br/>
	<b>Харктеристики:</b> <br/>
	38% polyester;<br/>
	30% recycled polyester;<br/>
	29% viscose;<br/>
	3% elastane.
	</div>

	<div class="color_input">
	<div class="plat_1" style="background-color:#1a204d;"></div>
	<div class="plat_2" style="background-color:#cba05c;"></div> 
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
		<h2>for MEN</h2>
		<img src="../../media/fotoLink1.png" width="100%" height="810" />  
		</div>
	</div>
	<div class="blockShop">  
	  <div class="tovar_block"> 
			<img src="../../media/curtka.jpg" width="100%" height="350" />  
			<span name="opis">Куртки</span>
			<a href="http://localhost/Portfolio/gucci/php/shop/shop.php"><button name="btn_buy_2">подробнее</button></a>
	  </div>
	<div class="tovar_block"> 
	<img src="../../media/tov_44.webp" width="100%" height="350" /> 
	<span name="opis">Свитера</span>
	<a href="http://localhost/Portfolio/gucci/php/shop/shop.php"><button name="btn_buy_3">подробнее</button></a>
	</div>
	<div class="tovar_block">  
	<img src="../../media/tov1.webp" width="100%" height="350" /> 
	<span name="opis">Кроссовки</span>
	<a href="http://localhost/Portfolio/gucci/php/shop/shop.php"><button name="btn_buy_4">подробнее</button></a>
	</div>
	<div class="tovar_block">  
	<img src="../../media/tov3.jpg" width="100%" height="350" /> 
	<span name="opis">Штаны</span>
	<a href="http://localhost/Portfolio/gucci/php/shop/shop.php"><button name="btn_buy_5">подробнее</button></a>
	</div>
	</div>
	

	<div class="blockShop2">  

	<div class="tovMOD_1"> 
	<img src="../../media/curtka.jpg" width="100%" height="350" />  
	<span name="opis">Куртки</span>
	<a href="http://localhost/Portfolio/gucci/php/shop/shop.php">
		<button name="btn_buy_2">подробнее</button></a>
	</div>

	<div class="tovMOD_2"> 
	<img src="../../media/tov_44.webp" width="100%" height="350" /> 
	<span name="opis">Свитера</span>
	<a href="http://localhost/Portfolio/gucci/php/shop/shop.php"><button name="btn_buy_3">подробнее</button></a>
	</div>

	<div class="tovMOD_3">  
	<img src="../../media/tov1.webp" width="100%" height="350" /> 
	<span name="opis">Кроссовки</span>
	<a href="http://localhost/Portfolio/gucci/php/shop/shop.php"><button name="btn_buy_4">подробнее</button></a>
	</div>

	<div class="tovMOD_4">  
	<img src="../../media/tov3.jpg" width="100%" height="350" /> 
	<span name="opis">Штаны</span>
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
