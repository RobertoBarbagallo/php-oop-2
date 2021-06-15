<?php 

require("./Classes/users.php");
require("./Classes/users-premium.php");

$user = new User("Roberto", "Barbagallo", "roby@roby.it");

if($user->primoaccesso)

var_dump($user)
?>