<?php
include 'functions/database.php';
include 'functions/prices.php';
include 'functions/products.php';
include 'templates/header.php';

?>

<div class="formulaire_inscription">

    <h2> Inscription </h2>

    <section class="formulaire_ins">
                    <form action="page-ins.php" method="post">
                            <label for="fname">Prénom:</label>
                            <input type="text" id="fname" name="fname"><br><br>
                            <label for="lname">Nom:</label>
                            <input type="text" id="lname" name="lname"><br><br>
                            <label for="email">Adresse e-mail:</label>
                            <input type="text" id="email" name="email"><br><br>
                            <label for="comments">Commentaires:</label>
                            <input type="text" id="comments" name="comments"><br><br>
                            <button type="submit" name="insc" value="INSCRIPTION !">INSCRIPTION </button>
                    </form>
                </section>


</div>


<?php include 'templates/footer.php'; ?>