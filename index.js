var amountG = 0;
var amountC = 0;
var priceOfGpu1 = 118990;
var priceOfCpu1 = 24990;
var totalPriceG;
var totalPriceC;

$(".addToCar-btn1").click(function(){
  amountG++;
  totalPriceG = priceOfGpu1 * amountG;
  $(".addToCar-num").text(amountG);
  $(".price-pos2").text("Total Price: " + totalPriceG + " ₸");
});

$(".addToCar-btn2").click(function(){
  amountG--;
  totalPriceG = priceOfGpu1 * amountG;
  $(".addToCar-num").text(amountG);
  $(".price-pos2").text("Total Price: " + totalPriceG + " ₸");

});

$(".addToCar-btn1").click(function(){
  amountC++;
  totalPriceC = priceOfCpu1 * amountC;
  $(".addToCar-num").text(amountC);
  $(".price-pos2").text("Total Price: " + totalPriceC + " ₸");
});

$(".addToCar-btn2").click(function(){
  amountC--;
  totalPriceC = priceOfCpu1 * amountC;
  $(".addToCar-num").text(amountC);
  $(".price-pos2").text("Total Price: " + totalPriceC + " ₸");

});


$("h1").click(function(){
  $(".payment-link").slideUp().slideDown().animate({opacity:0.9});
})
