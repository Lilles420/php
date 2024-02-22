<?php
// Kataloogi nimi, kus pildid asuvad
$kataloog = 'pildid';

// Funktsioon suvalise pildi valimiseks kataloogist
function valiSuvalinePilt($kataloog) {
    // Kontrollime, kas kataloog eksisteerib
    if (is_dir($kataloog)) {
        // Loeme kõik kataloogi failid massiivi
        $pildifailid = glob($kataloog . '/*.jpg');
        
        // Valime suvalise pildi massiivist
        $suvaline_pilt = $pildifailid[array_rand($pildifailid)];
        
        // Tagastame suvalise pildi nime
        return $suvaline_pilt;
    } else {
        // Kui kataloogi ei eksisteeri, tagastame tühja stringi
        return '';
    }
}

// Funktsioon pildi parameetrite kuvamiseks
function kuvapildiParameetrid($pilt) {
    // Kontrollime, kas pilti eksisteerib
    if (file_exists($pilt)) {
        // Kuvame pildi parameetrid
        $pildi_andmed = getimagesize($pilt);
        $laius = $pildi_andmed[0];
        $korgus = $pildi_andmed[1];
        $formaat = $pildi_andmed[2];
        
        echo '<h3>Pildi andmed</h3>';
        echo "Fail: $pilt<br>";
        echo "Laius: $laius px<br>";
        echo "Kõrgus: $korgus px<br>";
        echo "Formaat: $formaat<br>";
    } else {
        // Kui pilti ei eksisteeri, kuvame vastava teate
        echo "Pilti ei leitud.";
    }
}

// Valime suvalise pildi
$suvaline_pilt = valiSuvalinePilt($kataloog);

// Kui suvaline pilt on valitud, kuvame selle parameetrid ja loome pisipildid
if (!empty($suvaline_pilt)) {
    // Kuvame suure pildi
    echo '<div style="float:left; margin-right:10px;"><h2>Suvaline Pilt</h2>';
    echo "<img src='$suvaline_pilt' style='max-width:300px; max-height:300px;' />";
    kuvapildiParameetrid($suvaline_pilt);
    echo '</div>';
    
    // Loome pisipildid kolmes veerus
    echo '<div style="float:left;"><h2>Pisipildid</h2>';
    $pildifailid = glob($kataloog . '/*.jpg');
    foreach (array_slice($pildifailid, 0, 3) as $pisipilt) {
        echo "<a href='$pisipilt' target='_blank'><img src='$pisipilt' style='max-width:100px; max-height:100px; margin-right:5px; margin-bottom:5px;' /></a>";
    }
    echo '</div>';
} else {
    echo "Pilte kataloogis ei leitud.";
}
?>
