<?php

//andmete lugemine
$tootajad = [];
if (($handle = fopen("tootajad.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $tootajad[] = $data;
    }
    fclose($handle);

    // Meeste ja naiste palkade keskmise arvutamine
    $maleSalaries = [];
    $femaleSalaries = [];
    foreach ($tootajad as $tootaja) {
        if (isset($tootaja[1]) && isset($tootaja[2])) {
            if ($tootaja[1] == 'M') {
                $maleSalaries[] = $tootaja[2];
            } elseif ($tootaja[1] == 'N') {
                $femaleSalaries[] = $tootaja[2];
            }
        }
    }

    $avgMaleSalary = !empty($maleSalaries) ? array_sum($maleSalaries) / count($maleSalaries) : 0;
    $avgFemaleSalary = !empty($femaleSalaries) ? array_sum($femaleSalaries) / count($femaleSalaries) : 0;

    // Kõrgeimad palgad
    $maxMaleSalary = !empty($maleSalaries) ? max($maleSalaries) : 0;
    $maxFemaleSalary = !empty($femaleSalaries) ? max($femaleSalaries) : 0;
} else {
    die('Faili avamine ebaõnnestus!');
}

?>
<!doctype html>
<html lang="et">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Harjutused</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.5.0/css/all.css">
</head>
<body>
    <h1>Ülesanne 11 - Sõiduaeg ja palkade võrdlus</h1>

    <h2>Sõiduaeg</h2>
    <form action="" method="post">
        Start: <input type="text" name="start" placeholder="HH:MM"><br>
        End: <input type="text" name="end" placeholder="HH:MM"><br>
        <input type="submit" value="Arvuta">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['start']) && isset($_POST['end'])) {
            $start = $_POST['start'];
            $end = $_POST['end'];
            if (strlen($start) >= 5 && strlen($end) >= 5) {
                echo "Auto sõiduaeg: " . arvutaSoiduaeg($start, $end);
            } else {
                echo "Vigased andmed!";
            }
        }
    }
    ?>

    <h2>Palkade võrdlus</h2>
    <p>Keskmine meeste palk: <?= $avgMaleSalary ?> €</p>
    <p>Keskmine naiste palk: <?= $avgFemaleSalary ?> €</p>
    <p>Kõrgeim meeste palk: <?= $maxMaleSalary ?> €</p>
    <p>Kõrgeim naiste palk: <?= $maxFemaleSalary ?> €</p>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
