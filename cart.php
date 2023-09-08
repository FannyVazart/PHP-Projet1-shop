<?php

include 'functions/prices.php';
include 'functions/products.php';
include 'templates/header.php';

$nom = $_POST["type_product"];
$prix = $_POST["price_product"];
$quantite = $_POST['form_quantite'];
$transporteur = $_POST["form_transporteur"];

$prix_unit = formatPrice($prix);
$prix_total = formatPrice(totalPrice($prix, $quantite));
$prix_HT = formatPrice(priceExcludingVAT(totalPrice($prix, $quantite)));
$TVA = formatPrice((totalPrice($prix, $quantite)) - (priceExcludingVAT(totalPrice($prix, $quantite))))



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
                <td><?php echo htmlspecialchars($nom) ?></td>
                <td><?php echo $prix_unit ?></td>
                <td><?php echo htmlspecialchars((int)$quantite)?></td>
                <td><?php echo $prix_total ?></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <th>Prix HT</th>
                <td><?php echo $prix_HT ?></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <th>TVA 5.5%</th>
                <td><?php echo $TVA ?></td>
            </tr>
            <tr>
                <th colspan="3">Choix du transporteur et frais de port</th>
            </tr>
            <tr>
                <td></td>
                <th colspan="2"> <form action="cart.php" method="post">
                        <select name="form_transporteur">
                            <option value="La_poste">La Poste</option>
                            <option value="DPD">DPD</option>
                            <option value="Colissimo_suivi">Colissimo Suivi</option>
                        </select></th>
                <td> <button type="submit">Choisir ce transporteur</button>
                    </form></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <th>Frais de port</th>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <th colspan="2">Prix total, frais de port inclus</th>
                <td></td>
            </tr>
         </tbody>
    </table>

</div>

<?php include 'templates/footer.php'; ?>