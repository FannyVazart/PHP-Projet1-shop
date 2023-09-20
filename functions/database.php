<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=projet1_bdd;charset=utf8', 'FannyVazart', 'Floopy10320..');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$req = $db->query("SELECT * from products");

$customers = $db->query("SELECT * from customers");

// $inscriptions = $db->query("INSERT INTO `inscriptions`(`id`, `fisrt_name`, `last_name`, `e_mail`, `comments`) VALUES ('1',' ',' ',' ',' ')"); 