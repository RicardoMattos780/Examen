<?php
 
$base = $_GET["base"];
 
$altura = $_GET["altura"];
 
$Hipo = sqrt(pow($base,2) + pow($altura,2));
 
echo "Valor de Hipotenusa: " . $Hipo;
 
?>