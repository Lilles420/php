<?php

echo date("d.m.Y H:i") . "<br>";


$sünnikuupäev = strtotime("1990-05-15"); 
$nüüd = strtotime("now");
$vanus = floor(($nüüd - $sünnikuupäev) / (365.25 * 24 * 60 * 60));
echo "vanus on: $vanus aastat.<br>";


$sünnipäevSelAastal = strtotime(date('Y') . '-05-15');
if ($nüüd < $sünnipäevSelAastal) {
    $vanusSelAastal = $vanus - 1;
} else {
    $vanusSelAastal = $vanus;
}
echo "Kui vanaks saab sel aastal: $vanusSelAastal aastat.<br>";


$kooliaastaLõpp = strtotime(date('Y') . '-06-30');
$päeviKooliaastaLõpuni = ceil(($kooliaastaLõpp - $nüüd) / (60 * 60 * 24));
echo "Käesoleva kooliaasta lõpuni  $päeviKooliaastaLõpuni päeva!<br>";


$aastaajaPilt = "";
$käesolevKuupäev = date("m-d");
if ($käesolevKuupäev >= "03-21" && $käesolevKuupäev <= "06-20") {
    $aastaajaPilt = "kevad.jpg";
} elseif ($käesolevKuupäev >= "06-21" && $käesolevKuupäev <= "09-22") {
    $aastaajaPilt = "suvi.jpg";
} elseif ($käesolevKuupäev >= "09-23" && $käesolevKuupäev <= "12-21") {
    $aastaajaPilt = "sugis.jpg";
} else {
    $aastaajaPilt = "talv.jpg";
}
echo "<img src='$aastaajaPilt' alt='Aastaaja pilt'>";
?>
