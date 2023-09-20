<?php 
session_start();
setcookie('PHPSESSID');
 ?>



<!DOCTYPE html>
    <html lang="fr">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="styles.css">
      <title>Wonder elec.</title>
    </head>
    
    <body>
        <header>
            <div class="text_header">
            <img class="logo" src="Icons/ingenieur-informaticien.png" alt="Logo" width="100">   
                <section class="company_name">
                    The wonder electronics
                </section>  
            </div>
            <div class="menu">
                <section class="link_accueil">
                    <a href="index.php">Accueil</a>
                </section>
                <section class="link_catalog">
                    <a href="catalog.php">Catalogue</a>
                </section>
                <section class="link_panier">
                    <a href="cart.php">Mon panier</a>
                </section>
                <section class="link_inscription">
                    <a href="inscription.php">M'inscrire</a>
                </section>
                <section class="link_TEEEEST">
                    <a href="classes/class_Item.php">TEEEEEEESSSTTT</a>
                </section>
            </div>
        </header>
 