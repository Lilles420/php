<?php
echo 'Juhan Liiv, “Ääremärkused”';
echo "<h5>toll: </h5>";

if(isset($_POST['submit'])){
    // Kontrolli, kas kasutaja sisestas väärtuse
    if(!empty($_POST['tollid'])){
        // Sisendist tollide väärtuse saamine
        $tollid = $_POST['tollid'];
        
        // Teisendamine sentimeetriteks
        $sentimeetrid = $tollid * 2.54;
        
        // Ümardamine kahe kohani
        $sentimeetrid_2_kohta = round($sentimeetrid, 2);
        
        // Tulemuse väljastamine
        echo "Teie sisestatud tollid ($tollid) sentimeetrites on: $sentimeetrid_2_kohta cm";
    } else {
        // Kui kasutaja ei sisestanud väärtust
        echo "Palun sisestage tollide väärtus!";
    }
}

?>

<!-- Vorm kasutaja sisendi saamiseks -->
<form method="post">
    <label for="tollid">Sisestage tollid:</label>
    <input type="text" name="tollid" id="tollid">
    <input type="submit" name="submit" value="Teisenda">
</form>
<?php
$num = 10;

while ($num >= 1) {
    echo $num . "<br>";
    $num--;
}
?>
<?php
// Mitmemõõtmeline massiiv ainete ja hinnetega
$hinded = array(
    "Matemaatika" => array(4, 5, 3, 5, 4),
    "Eesti keel" => array(5, 4, 5, 3, 5),
    "Inglise keel" => array(4, 3, 4, 5, 4),
    "Ajalugu" => array(3, 4, 3, 3, 5)
);

// Funktsioon arvutab keskmise hinne
function keskmine_hinne($hinnete_massiiv) {
    $hinnete_summa = array_sum($hinnete_massiiv);
    $hinnete_arv = count($hinnete_massiiv);
    return round($hinnete_summa / $hinnete_arv, 2);
}

// Kuvame hinnetelehe tabelis
echo "<table border='1'>";
echo "<tr><th>Aine</th><th>Hinded</th><th>Keskmine hinne</th></tr>";

foreach ($hinded as $aine => $hinnete_massiiv) {
    echo "<tr>";
    echo "<td>$aine</td>";
    echo "<td>" . implode(", ", $hinnete_massiiv) . "</td>";
    echo "<td>" . keskmine_hinne($hinnete_massiiv) . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
