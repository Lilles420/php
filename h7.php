

<?php
function tervitus($nimi) {
    return "Tere $nimi!";
}


$nimi = "päiksekesekene";
echo tervitus($nimi);



function uudiskirjaga_liitumise_vorm() {
    $form = '
        <form action="#" method="post">
            <div class="form-group">
                <label for="email">Sisesta oma e-posti aadress:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Liitu uudiskirjaga</button>
        </form>
    ';
    return $form;
}


echo uudiskirjaga_liitumise_vorm();



function loo_email_kasutajanimega($kasutajanimi) {

    $kasutajanimi_vaiksed_tahed = strtolower($kasutajanimi);

    $kood = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'), 0, 7);


    $email = $kasutajanimi_vaiksed_tahed . "@hkhk.edu.ee";

    return array('kasutajanimi' => $kasutajanimi_vaiksed_tahed, 'email' => $email, 'kood' => $kood);
}


$kasutajanimi = "Kasutaja123";
$andmed = loo_email_kasutajanimega($kasutajanimi);
echo "Kasutajanimi: " . $andmed['kasutajanimi'] . "<br>";
echo "Email: " . $andmed['email'] . "<br>";
echo "Kood: " . $andmed['kood'] . "<br>";



function genereeri_arvud_vahemikus($algus, $lopp, $samm = 1) {
    $arvud = array();
    for ($i = $algus; $i <= $lopp; $i += $samm) {
        $arvud[] = $i;
    }
    return $arvud;
}


$algus = 2;
$lopp = 8;
$samm = 1;
$arvud_vaikimisi_sammuga = genereeri_arvud_vahemikus($algus, $lopp);
$arvud_iga_kolmandaga = genereeri_arvud_vahemikus($algus, $lopp, 3);

echo "Vaikimisi sammuga arvud: " . implode(", ", $arvud_vaikimisi_sammuga) . "<br>";
echo "Iga kolmanda sammuga arvud: " . implode(", ", $arvud_iga_kolmandaga) . "<br>";



function ristkylikuPindala($pikkus, $laius) {

    $pindala = $pikkus * $laius;
    return $pindala;
}


$pikkus = 5; 
$laius = 10; 
$pindala = ristkylikuPindala($pikkus, $laius);
echo "Ristküliku pindala on: " . $pindala;



echo "<h5>pider: </h5>";

function kontrolliIsikukoodi($isikukood) {

    $pikkus = strlen($isikukood);
    if ($pikkus !== 11) {
        return "Vigane isikukood: Vale pikkus!";
    }


    $sugu = ($isikukood[0] % 2 == 0) ? "Naine" : "Mees";
    $sunniaeg = substr($isikukood, 5, 2) . "." . substr($isikukood, 3, 2) . "." . substr($isikukood, 1, 2);

    return "Sugu: $sugu\nSünniaeg: $sunniaeg";
}

$isikukood = "37501234567"; 
$tulemus = kontrolliIsikukoodi($isikukood);
echo $tulemus;


echo "<h5>pider: </h5>";

function genereeriLause() {

    $alused = array("Ilus", "Hea", "Armastav", "Hooliv", "Rõõmus");
    $öeldised = array("teeb", "toetab", "austab", "hoiab", "jagab");
    $sihitised = array("sõpru", "perekonda", "kaaslasi", "loodust", "unistusi");


    $valitud_alus = $alused[array_rand($alused)];
    $valitud_öeldis = $öeldised[array_rand($öeldised)];
    $valitud_sihitis = $sihitised[array_rand($sihitised)];


    $lause = "$valitud_alus $valitud_öeldis $valitud_sihitis.";


    return $lause;
}


$lause = genereeriLause();
echo $lause;
?>







