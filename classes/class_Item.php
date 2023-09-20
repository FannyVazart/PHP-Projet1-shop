<?php
include '../functions/prices.php';

class Item 
{ 
   protected int $id;
   protected string $name;
   protected int $price;
   protected int $weight;
   protected string $description;
   protected string $image_url;
   protected bool $available;
   protected int $quantity;
   
public function getName(){
    return $this->name;
}

public function getId(){
    return $this->id;
}

public function getDescription(){
    return $this->description;
}

public function getImage_url(){
    return $this->image_url;
}

public function getPrice(){
    return $this->price;
}

   public function __construct(int $id, string $name, int $price, int $weight, string $description, string $image_url, bool $available, int $quantity)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
        $this->description = $description;
        $this->image_url = $image_url;
        $this->available = $available;
        $this->quantity = $quantity;
    }
    
}


$item = new Item(7, 'coucou', 32, 568, 'blablou', 'http', 1, 17);

function displayItem($item) {
    echo $item->getName();
    echo $item->getDescription(); ?>
    <img class="photo_prod" src="<?php echo $item->getImage_url() ?>" alt="photo du produit"> <?php 
    echo formatPrice($item->getPrice());
    echo formatPrice(priceExcludingVAT($item->getPrice()));
     }

// echo displayItem($item);