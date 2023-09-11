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

function fraisPortPoste($quantite, $prixtotal, $weight) {
    if ($quantite*$weight < 500) {
        return 500;
    } elseif ($weight >= 500 and $weight < 2000) {
        return 0.1*$prixtotal;
    } else {
        return 0;
    }
}

function fraisPortDPD($quantite,  $weight) {
    if ($quantite*$weight < 1000) {
        return 300;
    } else {
        return 800;
    }
}
