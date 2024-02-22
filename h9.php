<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kaga</title>
</head>
<body>
    <h2>Tere tulemast!</h2>
    <form action="" method="post">
        <label for="nimi">Sisesta oma nimi:</label><br>
        <input type="text" id="nimi" name="nimi"><br><br>
        <input type="submit" value="Tervita">
    </form>

    <?php
    function tervita($nimi) {
        $puhastatudNimi = ucfirst(strtolower($nimi)); 
        echo "Tere, $puhastatudNimi!";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nimi = $_POST["nimi"];
        tervita($nimi);
    }
    ?>
</body>
</html>

