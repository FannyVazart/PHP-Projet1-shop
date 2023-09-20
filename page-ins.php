

<?php

include 'functions/database.php';
include 'functions/prices.php';
include 'functions/products.php';
include 'templates/header.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$comments = $_POST['comments']; 

$sql = 'INSERT INTO inscriptions(`fisrt_name`, `last_name`, `e_mail`, `comments`) VALUES (:fname, :lname, :email, :comments)'; 
$sth = $db->prepare ($sql);
$sth->execute(['fname'=>$fname, 'lname'=>$lname, 'email'=>$email, 'comments'=>$comments]);

echo 'Merci de votre inscription !';



// echo $fname . "<br />";
// echo $lname . "<br />";
// echo $email . "<br />";
// echo $comments . "<br />";