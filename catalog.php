<?php

include 'functions/prices.php';
include 'templates/header.php';

$products = [
"Souris" => [
    "name" => "Souris",
    "price" => "800",
    "discount" => "5",
    "photo" => "https://www.grosbill.com/images_produits/fbab70f8-5842-4c66-9a8f-ac6d92543d64.jpg",
    "description" => "Cette magnifique souris est, en plus, très ergonomique.",
],

"Tour" => [
    "name" => "Tour",
    "price" => "56000",
    "discount" => "0",
    "photo" => "https://www.ordi2-0.fr/wp-content/uploads/2021/02/Meilleur-ordinateur-tour-Sedatech-253x300.jpg",
    "description" => "Cette magnifique tour est, en plus, très fonctionnelle.",
],

"Clavier" => [
    "name" => "Clavier",
    "price" => "27000",
    "discount" => "10",
    "photo" => "https://i0.wp.com/sesamepc.com/wp-content/uploads/2021/05/Clavier-US-HP-840-G1-G2-850-G1-G2-dessus.jpg?fit=1200%2C800&ssl=1",
    "description" => "Ce magnifique clavier est, en plus, très pratique.",
],

"Ecran" => [
    "name" => "Ecran",
    "price" => "16700",
    "discount" => "8",
    "photo" => "https://www.cdiscount.com/pdt2/x/e/n/1/700x700/ls24a336nhuxen/rw/ecran-pc-samsung-s24a336nhu-24-fhd-dalle.jpg",
    "description" => "Ce magnifique écran est, en plus, très lumineux.",
],
];
?>

<div class="catalogue">

    <h2> Catalogue des produits </h2>
    
    <?php foreach($products as $product): ?>
        <section class="product">
            <section class="nom_prod">
                <h3><?php echo $product["name"] ?></h2>
            </section>  
            <section class="description_prod">
                <?php echo $product["description"] ?>
            </section>
            <section>
                <img class="photo_prod" src="<?php echo $product["photo"] ?>" alt="photo du produit">
            </section>
            <section class="prix_prod">
                <?php echo formatPrice($product["price"])?> TTC
            </section>
            <section class="discount_prod">
                <p><?php echo "-" . $product["discount"] . "%" ?></p>
            </section>    
            <section class="prixdis_prod">
                <p><?php echo discountedPrice($product["price"], $product["discount"])?> TTC</p>
            </section>    
            <section class="prixHT_prod">
                <p><?php echo priceExcludingVAT($product["price"])?> HT</p>
            </section>
                <section class="formulaire">
                    <form action="cart.php" method="post">
                        <select name="form_quantite">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                        <input type="hidden" name="type_product" value="<?php echo $product['name']?>">
                        <input type="hidden" name="price_product" value="<?php echo discountedPrice($product["price"], $product["discount"])?>">
                            <button type="submit">Ajouter au panier</button>
                    </form>
                </section>
        </section>
    <?php endforeach; ?>

</div>

<?php include 'templates/footer.php'; ?>