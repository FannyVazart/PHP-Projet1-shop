<?php

include 'functions/prices.php';
include 'templates/header.php';

?>


<div class= "panier_global"> 

    <h2>Votre panier</h2>

    <table class="resume_commande">
        <tbody>
            <tr>
                <th>Produit</th>
                <th>Prix unitaire</th>
                <th>Quantité</th>
                <th>Total</th>
            </tr>
            <tr>
                <td><?php echo htmlspecialchars((string)$_POST["type_product"]);?></td>
                <td><?php echo formatPrice($_POST["price_product"]);?></td>
                <td><?php echo htmlspecialchars((int)$_POST['form_quantite'])?></td>
                <td><?php echo formatPrice(totalPrice($_POST["price_product"], $_POST['form_quantite']));?></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <th>Prix HT</th>
                <td><?php echo formatPrice(priceExcludingVAT(totalPrice($_POST["price_product"], $_POST['form_quantite']))) ?></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <th>TVA 5.5%</th>
                <td><?php echo formatPrice(VAT(totalPrice($_POST["price_product"], $_POST['form_quantite']), priceExcludingVAT(totalPrice($_POST["price_product"], $_POST['form_quantite'])))) ?></td>
            </tr>
         </tbody>
    </table>

</div>

<?php include 'templates/footer.php'; ?>