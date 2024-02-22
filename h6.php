// Ülesanne 2
// Markus Lilles
// 07.02

<?php
echo "<h6>genereeri: </h6>";
for ($i = 1; $i <= 100; $i++) {
    echo "$i. ";
    if ($i % 10 == 0) {
        echo "\n";
    }
}


$rida = str_repeat("*", 150);
echo $rida;



for ($i = 0; $i < 10; $i++) {
    echo "*<br>";
}

function drawSquare($sideLength) {
    for ($i = 0; $i < $sideLength; $i++) {
        for ($j = 0; $j < $sideLength; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}


$sideLength = 5;


drawSquare($sideLength);



for ($i = 10; $i >= 1; $i--) {
    if ($i % 2 == 0) { 
        echo $i . "  <br>";
    }
}


for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) { 
        echo $i . " ";
    }
}




$tudrukud = ["Anna", "Maria", "Laura", "Liis", "Kati"];
$poisid = ["Mark", "Martin", "Andres", "Jaan", "Karl"];


if (count($tudrukud) == count($poisid)) {
 
    echo "<h4>Poiste ja tüdrukute paarid:</h4>\n";
    for ($i = 0; $i < count($tudrukud); $i++) {
        echo $poisid[$i] . " ja " . $tudrukud[$i] . "<br>";
    }
} else {
    echo "Viga: Massiivid peavad olema võrdsed!";
}



$tudrukud = ["Anna", "Maria", "Laura", "Liis", "Kati"];
$poisid = ["Mark", "Martin", "Andres", "Jaan", "Karl"];


$tudrukud_koopia = $tudrukud;
$poisid_koopia = $poisid;


$koopia = [];
for ($i = 0; $i < count($tudrukud); $i++) {
    $random_tudruk = array_rand($tudrukud_koopia);
    $random_pois = array_rand($poisid_koopia);
    $koopia[] = $tudrukud_koopia[$random_tudruk] . " ja " . $poisid_koopia[$random_pois];
    unset($tudrukud_koopia[$random_tudruk]);
    unset($poisid_koopia[$random_pois]);
}


echo "<h4>Suvalistest tüdrukutest ja poistest koopia :</h4>\n";
foreach ($koopia as $paar) {
    echo $paar . "<br>";
}
?>










