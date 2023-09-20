<?php

include 'functions/database.php';
include 'functions/prices.php';
include 'functions/products.php';
include 'templates/header.php';

?>

<div class="catalogue">

    <h2> Catalogue des produits </h2>
    
    <?php foreach($req -> fetchall() as $res): ?>
        <section class="product">
            <section class="nom_prod">
                <h3><?php echo $res["name"] ?></h2>
            </section>  
            <section class="description_prod">
                <?php echo $res["description"] ?>
            </section>
            <section>
                <img class="photo_prod" src="<?php echo $res["image_url"] ?>" alt="photo du produit">
            </section>
            <section class="prix_prod">
                <?php echo formatPrice($res["price"])?> TTC
            </section>   
            <section class="prixHT_prod">
                <p><?php echo formatPrice(priceExcludingVAT($res["price"]))?> HT</p>
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
                        <input type="hidden" name="weight_product" value="<?php echo $res['weight']?>">
                        <input type="hidden" name="type_product" value="<?php echo $res["name"]?>">
                        <input type="hidden" name="id_product" value="<?php echo $res['id']?>">
                        <input type="hidden" name="price_product" value="<?php echo $product["price"]?>">
                        <input class = "button" type="submit" name="addToCart" value="Ajouter au panier">
                    </form>
                </section>
        </section>
    <?php endforeach; ?>

</div>

<?php 
if(isset($_REQUEST["addToCart"])) {
    
    if (isset($_SESSION['panier'])) {
        
        $product = array (
            'id' => $_POST["id"],
            'quantite' => $_POST['form_quantite'],
        );
        
        $_SESSION["panier"][0] = $product;
    } else {
        $numberProducts = count($_SESSION['panier']);
        $product = array (
            'id' => $_POST["id"],
            'quantite' => $_POST['form_quantite'],
        );
        $_SESSION['panier'][$numberPoducts] = $product;
    }

}

?>

<?php include 'templates/footer.php'; ?>