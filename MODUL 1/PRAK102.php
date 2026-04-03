<?php 
$jari_jari = 4.2;
$tinggi = 5.4;
$volume_tabung = M_PI * $jari_jari * $jari_jari * $tinggi;
$volume_tabung = number_format($volume_tabung, 3);


echo "$volume_tabung m3";
?>