// Ülesanne 2
// Markus Lilles
// 07.02


<?php

$tudrukud = ["Anna", "Liisa", "Laura", "Kadri", "Maria", "Kairi", "Helena", "Kristiina"];


sort($tudrukud);


echo "<h2>Tüdrukud:</h2>";
foreach ($tudrukud as $tudruk) {
    echo "$tudruk <br>";
}


echo "<h2>Eraldi esimesed 3 nime:</h2>";
for ($i = 0; $i < 3; $i++) {
    echo $tudrukud[$i] . "<br>";
}


echo "<h2>Eraldi viimane nimi:</h2>";
echo end($tudrukud) . "<br>";


echo "<h2>Eraldi suvaline nimi:</h2>";
$random_index = rand(0, count($tudrukud) - 1);
echo $tudrukud[$random_index] . "<br>";
//tydrukud siin yleval

// Auto
$autode_markid = ["Subaru","BMW","Acura","Mercedes-Benz","Lexus","GMC","Volvo","Toyota","Volkswagen","Volkswagen","GMC","Jeep","Saab","Hyundai","Subaru","Mercedes-Benz",
"Honda","Kia","Mercedes-Benz","Chevrolet","Chevrolet","Porsche","Buick","Dodge","GMC","Dodge","Nissan","Dodge","Jaguar","Ford","Honda","Toyota","Jeep",
"Kia","Buick","Chevrolet","Subaru","Chevrolet","Chevrolet","Pontiac","Maybach","Chevrolet","Plymouth","Dodge","Nissan","Porsche","Nissan","Mercedes-Benz",
"Suzuki","Nissan","Ford","Acura","Volkswagen","Lincoln","Mazda","BMW","Mercury","Mitsubishi","Ram","Audi","Kia","Pontiac","Toyota","Acura","Toyota","Toyota",
"Chevrolet","Oldsmobile","Acura","Pontiac","Lexus","Chevrolet","Cadillac","GMC","Jeep","Audi","Acura","Acura","Honda","Dodge","Hummer","Chevrolet","BMW",
"Honda","Lincoln","Hummer","Acura","Buick","BMW","Chevrolet","Cadillac","BMW","Pontiac","Audi","Hummer","Suzuki","Mitsubishi","Jeep","Buick","Ford"];

$VIN_koodid = ["1GKS1GKC8FR966658", "1FTEW1C87AK375821", "1G4GF5E30DF760067", "1FTEW1CW9AF114701", "WAUGGAFC8CN433989", "3G5DA03E83S704506", "4JGDA2EB0DA207570", 
"1FTEW1E88AK070552", "SAJWA0F77F8732763", "JHMFA3F21BS660717", "JTHBP5C29C5750730", "WA1LFAFP9DA963060", "3D7TT2CT6BG521976", "WVWN7EE961049", 
"2C3CA5CG3BH341234", "YV4952CFXC162587", "KNALN4D71F5805172", "JN1CV6EK7BM903692", "5FRYD3H84EB186765", "WAUL64B83N441878", "WDDGF4HBXCF845665", 
"WAUKF78E45A133973", "JN1BY0AR2AM022612", "WA1EY74L69D931520", "3GYFNGEYXBS290465", "1D7CW2GK4AS059336", "JN8AZ1FY5EW087447", "WAUBF78E57A343355", 
"SCFFBCCD8AG695133", "WBAWC73548E143482", "3GYFNGE38DS093883", "SCBCP73WC348460", "JN8AE2KPXE9353316", "2C3CDXDT2EH018229", "1G6AH5SX7D0325662", 
"WVWED7AJ7DW431402", "1FTKR1AD3AP316066", "WBAKF5C52CE612586", "1FTNX2A57AE16083", "WAUCFAFR1AA166821", "SCFFDAAM3EG486065", "1G4PR5SK5F4821043", 
"1C3CDFCB4ED858321", "1N6AD0CW8EN722090", "1NXBU4EE0AZ438077", "2T1BPRHE7FC131594", "JH4KB1637C451183", "1C4NJCBA7ED747024", "WAUHF68P86A736691", 
"3D7TT2HT1AG96429", "5GADX23L96D250838", "5FRYD3H25FB985936", "1G4GG5E30DF126304", "KNADH5A38B6072755", "WAUBFAFL1BA477979", "3C63DRL4CG674293", 
"1G6AR5SX0E0834815", "1NXBU4EE2AZ309838", "WAUKGBFB4AN797783", "JN1AJ0HP8AM801887", "WAUPL68E25A448831", "WA1C8BFP3FA535374", "WAUHE78P78A019744", 
"TRURD38J081400551", "1G4HP52K95428171", "5N1CR2MN1EC607241", "5UMDU93417L322773", "1G6AJ5S35F09585", "JN1CV6AP3BM234743", "SCBCR63W66C842051", 
"SCFFDCBD2AG509467", "WBA3C1C58CA664091", "1D7RW2BK6BS922303", "WAUDH98E67A546009", "2HNYB1H46CH683844", "3VW467AT4DM257275", "WDDGF4HB7CA515172", 
"2G61W5S88E9666199", "5GADV33W17D256205", "2C3CDXDT9CH683075", "2G4GU5X0E9989574", "WAUJC58E53A641651", "WDDEJ7KB3CA053774", "3D73M3CL6AG890452", 
"5GAER13D19J026924", "1G4HC5EM1BU329204", "3VWML7AJ6CM772736", "3C6TD4HT2CG011211", "JTDZN3EU2FJ023675", "JN8AZ1MU4CW041721", "KNAFX5A82F5991024", 
"1N6AA0CJ1D57470", "WAUEG98E76A780908", "WAUAF78E96A920706", "1GT01XEG8FZ268942", "1FTEW1CW4AF371278", "JN1AZ4EH8DM531691", "WAUEKAFBXAN294295", 
"1N6AA0EDXFN868772", "WBADW3C59DJ422810"];


$autode_arv = count($autode_markid);
echo "Autode arv: $autode_arv <br>";


if (count($autode_markid) == count($VIN_koodid)) {
    echo "Massiivid on ühepikkused <br>";
} else {
    echo "Massiivid ei ole ühepikkused <br>";
}


$toyota_arv = 0;
$audi_arv = 0;

foreach ($autode_markid as $mark) {
    if ($mark == "Toyota") {
        $toyota_arv++;
    } elseif ($mark == "Audi") {
        $audi_arv++;
    }
}

echo "Toyota autode arv: $toyota_arv <br>";
echo "Audi autode arv: $audi_arv <br>";

echo "VIN koodid, mille märkide arv on väiksem kui 17: <br>";
foreach ($VIN_koodid as $vin) {
    if (strlen($vin) < 17) {
        echo "$vin <br>";
    }
}


// Palk

$palgad = [1220,1213,1295,1312,1298,1354,1296,1286,1292,1327,1369,1455];
$palgade_summa = array_sum($palgad);
$palgade_arv = count($palgad);
$keskmine_palk = $palgade_summa / $palgade_arv;
echo "<h5>palk: </h5>";
echo "Keskmine palk: " . round($keskmine_palk, 2);








$ettevotted = ["Kimia","Mynte","Voomm","Twiyo","Layo","Talane","Gigashots","Tagchat","Quaxo","Voonyx","Kwilith","Edgepulse","Eidel","Eadel","Jaloo","Oyope","Jamia"];

sort($ettevotted);


echo "<h5>Ettevõtete nimed:</h5>\n";
foreach ($ettevotted as $ettevott) {
    echo "$ettevott<br>";
}


function eemaldaEttevott($nimetus, &$ettevotted) {
    $index = array_search($nimetus, $ettevotted);
    if ($index !== false) {
        unset($ettevotted[$index]);
        return true;
    }
    return false;
}


$eemaldatav_nimi = "Jamia";
if (eemaldaEttevott($eemaldatav_nimi, $ettevotted)) {
    echo "\n'$eemaldatav_nimi' on eemaldatud.\n";
    echo "\nUus ettevõtete nimekiri:\n";
    foreach ($ettevotted as $ettevott) {
        echo "$ettevott<br>";
    }
} else {
    echo "\n'$eemaldatav_nimi' ei leitud nimekirjast.\n";
}



// Riik
echo "<h5>riik: </h5>";
$riigid = [
    "Indonesia", "Canada", "Kyrgyzstan", "Germany", "Philippines",
    "Philippines", "Canada", "Philippines", "South Sudan", "Brazil",
    "Democratic Republic of the Congo", "Indonesia", "Syria", "Sweden",
    "Philippines", "Russia", "China", "Japan", "Brazil", "Sweden", "Mexico", "France",
    "Kazakhstan", "Cuba", "Portugal", "Czech Republic"
];


$pikim_pikkus = 0;
foreach ($riigid as $riik) {
    $pikkus = strlen($riik);
    if ($pikkus > $pikim_pikkus) {
        $pikim_pikkus = $pikkus;
    }
}

echo "Kõige pikema riigi nime  arv: $pikim_pikkus";

// chingchang

$hiina_nimed = [
    "瀚聪","月松","雨萌","展博","雪丽","哲恒","慧妍","博裕","宸瑜","奕漳",
    "思宏","伟菘","彦歆","睿杰","尹智","琪煜","惠茜","晓晴","志宸","博豪",
    "璟雯","崇杉","俊誉","军卿","辰华","娅楠","志宸","欣妍","明美"
];


sort($hiina_nimed);

echo "<h5>tra: </h5>";
echo "Esimene nimi: " . $hiina_nimed[0] . "<br>";
echo "Viimane nimi: " . end($hiina_nimed) . "<br>";

// Google
$google_nimed = [
    "Feake","Bradwell","Dreger","Bloggett","Lambole","Daish","Lippiett",
    "Blackie","Stollenbeck","Houseago","Dugall","Sprowson","Kitley","Mcenamin",
    "Allchin","Doghartie","Brierly","Pirrone","Fairnie","Seal","Scoffins",
    "Galer","Matevosian","DeBlase","Cubbin","Izzett","Ebi","Clohisey",
    "Prater","Probart","Samwaye","Concannon","MacLure","Eliet","Kundt","Reyes"
];


$otsitav_nimi = "Seal";


if (in_array($otsitav_nimi, $google_nimed)) {
    $message = "Nimi '$otsitav_nimi' on olemas Google nimede massiivis.";
    $alert_class = "success";
} else {
    $message = "Nime '$otsitav_nimi' ei leitud Google nimede massiivist.";
    $alert_class = "danger";
}

echo "<div class=\"alert alert-$alert_class\" role=\"alert\">";
echo $message;
echo "</div>";



?>















