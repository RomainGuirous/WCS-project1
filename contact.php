<?php 

$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$description = $_POST['description'];


$valueToAdd = array($lastname,$firstname,$email,$description);

$fp = fopen('contact.csv','a+');

    fputcsv($fp, $valueToAdd);
    
fclose($fp);

header('Location: /index.html' );

//replace " ' vers \" \'