<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pildi üleslaadimine ja kuvamine</title>
</head>
<body>

<?php
// Kataloogi nimi, kuhu pildid üles laaditakse
$kataloog = 'uploads';

// Kui vormi submititakse
if(isset($_POST['submit'])){
    // Kontrollime, kas fail on korrektselt üles laetud
    if(isset($_FILES['pilt'])){
        $failinimi = $_FILES['pilt']['name'];
        $ajutine_fail = $_FILES['pilt']['tmp_name'];
        $faili_tyyp = $_FILES['pilt']['type'];
        $faili_suurus = $_FILES['pilt']['size'];

        // Kontrollime, kas fail on JPG või JPEG formaadis
        $lubatud_tyyp = array('image/jpeg', 'image/jpg');
        if(in_array($faili_tyyp, $lubatud_tyyp)){
            // Liigutame üles laetud faili sobivasse kataloogi
            if(move_uploaded_file($ajutine_fail, $kataloog.'/'.$failinimi)){
                echo '<p>Fail '.$failinimi.' on edukalt üles laetud.</p>';
            } else {
                echo '<p>Faili üleslaadimine ebaõnnestus.</p>';
            }
        } else {
            echo '<p>Ainult JPG ja JPEG formaadis faile on lubatud.</p>';
        }
    }
}

// Näitame kõiki üleslaetud pilte
$asukoht = opendir($kataloog);
while($rida = readdir($asukoht)){
    if($rida != '.' && $rida != '..'){
        // Kui fail on pilt
        if(getimagesize($kataloog.'/'.$rida)){
            echo '<a href="'.$kataloog.'/'.$rida.'" target="_blank">'.$rida.'</a><br>';
        }
    }
}
closedir($asukoht);
?>

<!-- Pildi üleslaadimise vorm -->
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="pilt" accept=".jpg, .jpeg"><br>
    <input type="submit" name="submit" value="Lae üles">
</form>

</body>
</html>
