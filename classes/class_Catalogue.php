<?php
include_once '../functions/database.php';
include_once '../functions/products.php';
include_once '../classes/class_Item.php';

class Catalogue 
{ 
    public $items = [];

    public function getItems(){
        return $this->items;
    }

    public function __construct($db) {

        $products= getProducts($db);
        
        foreach ($products as $product) {
            $this->items[] = new Item ($product['id'], $product['name'], $product['price'], $product['weight'], $product['description'], $product['image_url'], $product['available'], $product['quantity']);
        }
    }
}

function displayCatalogue(Catalogue $catalogue) {
    foreach ($catalogue->items as $item) {
        displayItem($item);
    }
}

// $catalogue = new Catalogue(new Item ($id, $name, $price, $weight, $description, $image_url, $available, $quantity));

// displayCatalogue($catalogue)