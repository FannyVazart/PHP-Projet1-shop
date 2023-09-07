<?php

function formatPrice($price) {
 return number_format($price/100, 2, ',', ' ') . '€';
}

function priceExcludingVAT($price, $rate = 5.5) {
 return $price/(100 + $rate)*100;  
} 

function discountedPrice($price, $discount) {
 return $price - ($price*$discount)/100;   
}

function totalPrice($price, $quantity) {
 return $price*$quantity;
}

function VAT($priceTTC, $priceHT) {
 return $priceTTC - $priceHT;
}
