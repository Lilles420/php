
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
<form action="" method="get">
        Toode 1 <input type="text" name="t1"><br>
        Toode 2 <input type="text" name="t2"><br>
        Toode 3 <input type="text" name="t3"><br>
        <input type="submit" value="Saada">
    </form>


<?php
if (!empty($_GET["t1"])&&!empty($_GET["t2"])&&!empty($_GET["t3"])) {
    $toode1 = $_GET['t1'];
    $toode2 = $_GET['t2'];
    $toode3 = $_GET['t3'];
   
   var_dump("sdgfdsg2");
    echo 'Toode 1: '.$toode1.'tk<br>';
    echo 'Toode 2: '.$toode2.'tk<br>';
    echo 'Toode 3: '.$toode3.'tk<br>';
}


?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
