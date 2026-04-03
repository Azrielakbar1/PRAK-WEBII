<?php 
$celcius = 37.841;
$r_fahreinheit = (9/5 * $celcius) + 32;
$r_reamur = (4/5 * $celcius);
$r_kelvin = $celcius + 273.15;

$fahreinheit = number_format($r_fahreinheit, 4, ',', '.');
$reamur = number_format($r_reamur, 4, ',', '.');
$kelvin = number_format($r_kelvin, 4, ',', '.');

echo "Fahrenheit(F): $fahreinheit <br>";
echo "Reamur(R): $reamur <br>";
echo "Kelvin(K): $kelvin <br>";
?>