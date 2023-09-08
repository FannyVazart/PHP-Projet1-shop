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

function fraisPortPoste($prixtotal, $weight) {
    if ($weight < 500) {
        return 5;
    } else if (500 <= $weight <= 2000) {
        return 0.1*$prixtotal;
    } else {
        return 0;
    }
}

function fraisPortDPD($prixtotal, $weight) {
    if ($weight < 1000) {
        return 3;
    } else {
        return 8;
    }
}
