<?php
// Ülesanne 2
// Markus Lilles
// 07.02


$arv1 = 15;
$arv2 = 7;


$summa = $arv1 + $arv2;
echo "$arv1 + $arv2 = $summa<br>";


$vahe = $arv1 - $arv2;
echo "$arv1 - $arv2 = $vahe<br>";


$korrutis = $arv1 * $arv2;
echo "$arv1 * $arv2 = $korrutis<br>";


$jagatis = $arv1 / $arv2;
echo "$arv1 / $arv2 = $jagatis<br>";


$jaak = $arv1 % $arv2;
echo "$arv1 % $arv2 = $jaak<br>";

echo "<br>";


$millimeetrid = 2500;
$sentimeetrid = $millimeetrid / 10;
$meetrid = $sentimeetrid / 100;

echo "$millimeetrid mm = $sentimeetrid cm = $meetrid m\n";

echo "\n";


$a = 3;
$b = 4;
$c = sqrt($a*$a + $b*$b);

$umbermoot = $a + $b + $c;
$pindala = ($a * $b) / 2;

echo "Täisnurkse kolmnurga ümbermõõt: " . round($umbermoot) . " ja pindala: " . round($pindala);
?>
