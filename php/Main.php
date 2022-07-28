<!DOCTYPE html>
<html>
<head>
<title> Gucci </title>
<link rel="shortcut icon" href="../media/guc.ico" type="image/x-icon">  <!---- Подкл. иконки в title------->
<link rel="stylesheet" href="../css/Style.css">
<meta name="viewport" content="width=device-width">  <!-- Добавит Адаптивность -->
<meta name="viewport" content="X-UA-Compatible" content="ie=edge"> 
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">          <!--Подключение шрифта из Google Fonts-->
</head>
<body>

<div class="Main">
<style>
@import 'css/Adaptiv.css';

</style>
<!------------------------------------------- 1 ЧАСТЬ -------------------------------------------------------------->
<?php require "support.php";?>

<div class="kontainer_1">
<div class="element_1">
<?php require "hedar.php";?>

<?php require "sliderMain.php";?>


</div>
<div class="strela"> <img src="../media/strela.png" width="70" height="55"/> </div>
</div>

<!-------------------------------------------------------------------------------------------------------------------->





<!------------------------------------------- 2 ЧАСТЬ (история гуччи) -------------------------------------------------------------->

<div class="kontainer_2">

<div class="element_2">
<div class="text_3"> История GUCCI </div>

<div class="block_2_1"><img src="../media/founder.jpg" width="250" height="250"/></div>
<div class="block_text_2">
Гуччио Гуччи<br/><p>(основатель)</p>
</div>

<div class="block_2_2"> 
Гуччо родился во Флоренции, 26 марта 1881 г в семье Габриэлло Гуччи, кожевенного мастера из Сан-Миниато.
Подростком он работал в отеле «Савой» в Лондоне, где был очарован элегантными гостями отелей высшего класса и компаниями по производству багажа, 
такими как H. J. Cave & Sons. 
</div>

<div class="block_2_3"> <img src="../media/hist1.webp"  width="250" height="380"/></div>
<div class="block_2_4"> 
Он вернулся во Флоренцию и начал изготавливать дорожные сумки и аксессуары.
В 1921 году он основал модный дом Gucci во Флоренции как небольшой семейный магазин кожгалантереи. 
</div>

<div class="block_2_5"> <img src="../media/famile.jpg" width="438" height="250"/></div>
<div class="block_2_5_1">Его сыновья Васко, Альдо, Уго и Родольфо Гуччи активно участвовали в развитии бренда Gucci, дочь не 
принимала участие в бизнесе. Братья находились в состоянии соперничества и к 1980-м годам это стало 
серьёзной проблемой, вызвавшей конфликт в семье.
</div>

<div class="block_2_7"><img src="../media/hist2.jpg" width="250" height="380"/></div>
<div class="block_2_6">В 1938 году Гуччи открыл бутик в Риме по настоянию своего сына Альдо и бизнес стал семейный.
За две недели до смерти Гуччо его сыновья Альдо, Родольфо и Васко открыли бутик Gucci в Нью-Йорке. 
По наследству бизнес перешёл к его пятерым сыновьям и бренд Gucci расширился, открыв новые маг. по всему миру.
</div>
</div>



<!--------------- Гуччи сейчас  ---------------------->

<div class="text_3_1">GUCCI сейчас</div>
<div class="element_2_2">

<!----------------- Слайдер ---------------->
<div class="RslideX Rmenu">

<div class="Rslides">
<input type="radio" name="Rr" id="Rr1" checked />
<input type="radio" name="Rr" id="Rr2"/>

<div class="Rsled Rs1"><img src="../media/star4.jpg" />
<p name="RgColl">Премьера фильма "Дом Gucci" в Лондоне:<br/>
Леди Гага, Сальма Хайек и Джаред Лето в Gucci, <br/>
и только Адам Драйвер в Burberry</p></div>
<div class="Rsled Rs2"><img src="../media/markB.jpg" /></div>
</div>

<div class="Rnavig">
<label for="Rr1" class="Rbar"></label>
<label for="Rr2" class="Rbar"></label>
</div>

</div>


</div>
</div>
<!----------------------------------------------------------------------------------------------------------->





<!------------------------------------------ ПОКАЗ --------------------------------------------------------------------->

<div class="kont_Pokaz">
<div class="elem_Pokaz">

<?php require "sliderPok.php";?>


</div>
</div>
<!----------------------------------------------------------------------------------------------------------->






<!------------------------------------------- 3 ЧАСТЬ (аксесуары от Антонио Гуччи) -------------------------------------------------------------->

<div class="kontainer_3">
<div class="element_3">
<div class="text_4">Аксессуары от Антонио Гуччи</div>

<div class="block_3_1">
<img src="../media/akses.jpg" width="550" height="850"/>

<span name="about"><span name="about2">"Lapiatio didi" - </span>Отлично подойдет под
деловой стиль.<br/> А в сочетании с пальто вы будете блестать на любой встрече.</span>
</div>


<div class="block_3_2"> 
<img src="../media/alessan.jpg" width="150" height="150"/>
Дом Gucci и я хотел бы<br/> представить вам мой новый<br/> шедевр:
cумка "Lapiatio didi". <br/><br/>Это новый штрих в моде.<br/> 
Это стиль которому не нужно<br/> лишних слов.
<span name="about">Антонио Гуччи / гл. Дизайнер</span>
</div>


<div class="block_3_3"> 
<img src="../media/akses2.jpg" width="350" height="300"/>

<span name="about">сумка "Lapiatio didi"</span>
<a href="http://localhost/Portfolio/gucci/php/antonio.php"><button class="btnAnt">подробнее</button></a> 

</div>

</div>
</div>
<!--------------------------------------------------------------------------------------------------------------->




<!------------------------------------------- 4 ЧАСТЬ (будь на стиле/витрина) -------------------------------------------------------------->
<?php require "vitrina.php";?>

<!--------------------------------------------------------------------------------------------------------------->





<!----------------------------------- 6 ЧАСТЬ / ФУТЕР ------------------------------------------------->
<div class="Konteiner_6">
<div class="block_6">

<?php require "footer.php";?>





</div>
<script type="text/javascript" src="../gucci.js"></script>
</body>
</html>