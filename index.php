<?php

include 'functions/database.php';
include 'functions/prices.php';
include 'templates/header.php';

?>

<div class= "blabla"> 
<h1> The wonder electronics : votre spécialiste en électronique.</h1>
</div>

<?php 
foreach ($req -> fetchall() as $res) :?>
    
<?php echo $res['id'] . '. ' . $res['description'] . ' ->' . $res['price'] . '€' ."<br />";
endforeach ; 

echo "<br />";

?>

<?php 
foreach ($customers -> fetchall() as $customer) :?>
    
<?php echo $customer['first_name'] . " " . $customer['last_name'] . "<br />";
endforeach ; 

?>

<?php include 'templates/footer.php'; ?>