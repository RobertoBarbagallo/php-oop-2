<?php 

require_once("./Classes/users.php");
require_once("./Classes/users-premium.php");

$user = new User("Roberto", "Barbagallo", "roby@roby.it");
$PremiumUser = new PremiumUser();



var_dump($user);
var_dump($PremiumUser)
?>