<?php
if (!empty($_GET['leht'])) {
    $leht = htmlspecialchars($_GET['leht']);
    $lubatud = array('10. 1', '10.2', '10.3');
    if (in_array($leht, $lubatud)) {
        include($leht . '.php');
    } else {
        echo 'Valitud lehte ei eksisteeri!';
    }
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leht</title>
</head>
<body>
    <ul>
        <li><a href="?leht=10.1">Portfoolio</a></li>
        <li><a href="?leht=10.2">Kaart</a></li>
        <li><a href="?leht=10.3">Kontakt</a></li>
    </ul>
</body>
</html>
<?php
}
?>
