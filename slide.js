const boxx1 = document.querySelector(".nextBTN");
  boxx1.addEventListener("click", function(){
  const king11 = document.querySelector(".fotoShop_1"); 
  king11.style.left = "-100%"; 
});
const boxx2 = document.querySelector(".prevBTN");
  boxx2.addEventListener("click", function(){
  const king22 = document.querySelector(".fotoShop_1"); 
  king22.style.left = "0%"; 
});

const bl_input = document.querySelector(".plat_2");
bl_input.addEventListener("click", function(){
  const king1 = document.querySelector(".fotoShop_Slider2");
king1.style.display = "block"; 
  const king4 = document.querySelector(".fotoShop_Slider");
  king4.style.display = "none"; 
});




const bl_input2 = document.querySelector(".plat_1");
bl_input2.addEventListener("click", function(){
  const king1 = document.querySelector(".fotoShop_Slider2");
  king1.style.display = "none"; 
  const king4 = document.querySelector(".fotoShop_Slider");
  king4.style.display = "block"; 
});

const boxx3 = document.querySelector(".nextBTN2");
  boxx3.addEventListener("click", function(){
  const king33 = document.querySelector(".fotoShop_2"); 
  king33.style.left = "-100%"; 
});
const boxx4 = document.querySelector(".prevBTN2");
  boxx4.addEventListener("click", function(){
  const king44 = document.querySelector(".fotoShop_2"); 
  king44.style.left = "0%"; 
});