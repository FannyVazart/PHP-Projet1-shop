<?php

function formatPrice($price) {
 echo number_format($price/100, 2, ',', ' ') . '€';
}

function priceExcludingVAT($price, $rate = 5.5) {
 echo ($price/100)/(1 + $rate/100);  
} 

function discountedPrice($price, $discount) {
 echo ($price/100 - ($price*$discount)/10000);   
}

function totalPrice($price, $quantity) {
 echo $price*$quantity;
}

function VAT($priceTTC, $priceHT) {
 echo number_format(($priceTTC - $priceHT), 2, ',', ' ') . '€';
}

?>

