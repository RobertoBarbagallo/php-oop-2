<?php 

require_once("./classes/users.php");
require_once("./classes/users-premium.php");
require_once("./classes/products-food.php");


$user = new User("Roberto", "Barbagallo", "roby@roby.it");
$PremiumUser = new PremiumUser($user);

$spalmabile = new Food("Nutella", "3000", 6);



var_dump($user);
var_dump($PremiumUser);

var_dump($spalmabile);
?>