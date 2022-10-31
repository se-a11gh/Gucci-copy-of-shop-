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
		<img id="tovar1" src="../../media/tovKollwom.webp" width="100%" height="700" alt="парфюм"/>
		<img id="tovar2" src="../../media/tovKollwom_back.webp" width="100%" height="700" alt="парфюм"/>
	</div>
		<div class="prevBTN"> < </div>
		<div class="nextBTN"> > </div>
	</div>

	<div class="fotoShop_Slider2">  
	<div class="fotoShop_2">  
		<img id="tovar3" src="../../media/tovKollwom2.webp" width="100%" height="700" alt="парфюм"/>
		<img id="tovar4" src="../../media/tovKollwom_back2.webp" width="100%" height="700" alt="парфюм"/>
	</div>
			<div class="prevBTN2"> < </div>
			<div class="nextBTN2"> > </div>
	</div>
	<div class="textShop_men">
	<div class="tx textSh_Name">Платье с макси-воланами</div>
<div class="tx textSh_About">
<b>Описание:</b> <br/>
Коллекция Committed. 100% хлопок. Длинный фасон. Макси-платье. 
Американская пройма.
 Без рукавов. Горловина с присборенной деталью. <br/>
 Внизу волан.На шее завязки.
<br/><br/>
<b>Харктеристики:</b> <br/>
Composition: 100% cotton
</div>

	<div class="color_input">
	<div class="plat_1"></div>
	<div class="plat_2"></div> 
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
	  <h2>for WOMEN</h2>
	  <img src="../../media/fotoLink2.jpg" width="100%" height="810" />  
		</div>
	</div>
	<div class="blockShop">  
	  <div class="tovar_block"> 
	  <img src="../../media/kofta.jpg" width="100%" height="350" />  
<span name="opis">Кофты</span>
			<a href="http://localhost/Portfolio/gucci/php/shop/shop.php"><button name="btn_buy_2">подробнее</button></a>
	  </div>
	<div class="tovar_block"> 
	<img src="../../media/zel.webp" width="100%" height="350" /> 
<span name="opis">Свитера</span>
	<a href="http://localhost/Portfolio/gucci/php/shop/shop.php"><button name="btn_buy_3">подробнее</button></a>
	</div>
	<div class="tovar_block">  
	<img src="../../media/pokaz2.jpg" width="100%" height="350" /> 
<span name="opis">Туфли</span>
	<a href="http://localhost/Portfolio/gucci/php/shop/shop.php"><button name="btn_buy_4">подробнее</button></a>
	</div>
	<div class="tovar_block">  
	<img src="../../media/pokaz3.jpg" width="100%" height="350" /> 
<span name="opis">Платья</span>
	<a href="http://localhost/Portfolio/gucci/php/shop/shop.php"><button name="btn_buy_5">подробнее</button></a>
	</div>
	</div>
	

	<div class="blockShop2">  
	<div class="tovMOD_1"> 
	<img src="../../media/kofta.jpg" width="100%" height="350" />  
<span name="opis">Кофты</span>
	<a href="http://localhost/Portfolio/gucci/php/shop/shop.php">
		<button name="btn_buy_2">подробнее</button></a>
	</div>

	<div class="tovMOD_2"> 
	<img src="../../media/zel.webp" width="100%" height="350" /> 
<span name="opis">Свитера</span>
	<a href="http://localhost/Portfolio/gucci/php/shop/shop.php"><button name="btn_buy_3">подробнее</button></a>
	</div>

	<div class="tovMOD_3">  
	<img src="../../media/pokaz2.jpg" width="100%" height="350" /> 
<span name="opis">Туфли</span>
	<a href="http://localhost/Portfolio/gucci/php/shop/shop.php"><button name="btn_buy_4">подробнее</button></a>
	</div>

	<div class="tovMOD_4">  
	<img src="../../media/pokaz3.jpg" width="100%" height="350" /> 
<span name="opis">Платья</span>
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
