<?php

include 'functions/prices.php';
include 'functions/products.php';
include 'templates/header.php';

$nom = $_POST["type_product"];
$prix = $_POST["price_product"];
$quantite = $_POST['form_quantite'];
$transporteur = $_POST["form_transporteur"];
$weight = $_POST['weight_product'];

$prix_unit = formatPrice($prix);
$prix_total = formatPrice(totalPrice($prix, $quantite));
$prix_HT = formatPrice(priceExcludingVAT(totalPrice($prix, $quantite)));
$TVA = formatPrice((totalPrice($prix, $quantite)) - (priceExcludingVAT(totalPrice($prix, $quantite))))

?>

<div class= "panier_global"> 

    <h2>Votre panier</h2>

    <?php 
          if(isset($_COOKIE['PHPSESSID'])){
              echo 'ID (via $_COOKIE) : <br>'
              .$_COOKIE['PHPSESSID'];
          }
     ?>

    <?php 
        if (isset($_SESSION['panier'])) {

          foreach($_SESSION['panier'] as $donnee);

          $item = getProduct($donnee['id']);
        }
    ?>

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
                <th colspan="4"><u>Choix du transporteur et frais de port</u></th>
            </tr>
            <tr>
                <td></td>
                <th colspan="2"> <form action="cart.php" method="post">
                        <select name="form_transporteur" label="transporteurs">
                            <option value=" "> </option>
                            <option value="La Poste">La Poste</option>
                            <option value="DPD">DPD</option>
                        </select></th>
                 <input type="hidden" name="weight_product" value="<?php echo $_POST['weight_product']?>">
                 <input type="hidden" name="type_product" value="<?php echo $_POST["type_product"]?>">
                 <input type="hidden" name="form_quantite" value="<?php echo $_POST['form_quantite']?>">
                 <input type="hidden" name="id_product" value="<?php echo $_POST['id_product']?>">
                 <input type="hidden" name="price_product" value="<?php echo $_POST["price_product"]?>">
                <td> <button type="submit">Choisir ce transporteur</button>
                    </form></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <th>Transporteur
                </th>
                <td> <?php 
              if ($transporteur=="La Poste") {
                 echo "La Poste";
              } elseif ($transporteur=="DPD") {
                 echo "DPD";
              } else {
              }
              ?> </td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <th>Frais de port</th>
                <td> <?php 
              if ($transporteur=="La Poste") {
                echo formatPrice(fraisPortPoste($quantite, $prix, $weight));
              } elseif ($transporteur=="DPD") {
                echo formatPrice(fraisPortDPD($quantite, $weight));
              } else {
              }
              ?> </td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <th>Prix total</th>
                <td> <?php 
              if ($transporteur=="La Poste") {
                echo formatPrice(totalPrice($prix, $quantite)+fraisPortPoste($quantite, $prix, $weight));
              } elseif ($transporteur=="DPD") {
                echo formatPrice(totalPrice($prix, $quantite)+fraisPortDPD($quantite, $weight));
              } else {
              }
              ?> </td> 
            </tr>
         </tbody>
    </table>
</div>

<?php include 'templates/footer.php'; ?>