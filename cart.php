<?php

include 'functions/prices.php';
include 'templates/header.php';

?>


<div class= "panier_global"> 

    <h2>Votre panier</h2>



    <table>
        <tbody>
            <tr>
                <th>Produit</th>
                <th>Prix unitaire</th>
                <th>Quantité</th>
                <th>Total</th>
            </tr>
            <tr>
                <td><?php echo htmlspecialchars((string)$_POST["type_product"]);?></td>
                <td><?php echo $_POST["price_product"];?></td>
                <td><?php echo htmlspecialchars((int)$_POST['form_quantite'])?></td>
                <td><?php echo totalPrice($_POST["price_product"], $_POST['form_quantite']);?></td>
            </tr>
         </tbody>
    </table>



<p><?php echo htmlspecialchars((int)$_POST['form_quantite'])?></p>


</div>

<?php include 'templates/footer.php'; ?>