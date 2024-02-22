// Ülesanne 2
// Markus Lilles
// 07.02
<!DOCTYPE html>
<html lang="et">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h1 class="mt-5">Bootstrapiga Ülesanded</h1>

    <form method="get" action="" class="mt-5">
      <div class="mb-3">
        <label for="arv1" class="form-label">Esimene arv:</label>
        <input type="number" class="form-control" id="arv1" name="arv1">
      </div>
      <div class="mb-3">
        <label for="arv2" class="form-label">Teine arv:</label>
        <input type="number" class="form-control" id="arv2" name="arv2">
      </div>
      <button type="submit" class="btn btn-primary">Jaga</button>
    </form>
    <?php
    if (!empty($_GET['arv1']) && !empty($_GET['arv2'])) {
      $arv1 = $_GET['arv1'];
      $arv2 = $_GET['arv2'];

      if ($arv2 != 0) {
        $tulemus = $arv1 / $arv2;
        echo "<p class='mt-3'>Jagamistulemus: $tulemus</p>";
      } else {
        echo "<p class='mt-3 text-danger'>Nulliga jagamine pole lubatud!</p>";
      }
    }
    ?>

    <form method="get" action="" class="mt-5">
      <div class="mb-3">
        <label for="vanus1" class="form-label">Esimene vanus:</label>
        <input type="number" class="form-control" id="vanus1" name="vanus1">
      </div>
      <div class="mb-3">
        <label for="vanus2" class="form-label">Teine vanus:</label>
        <input type="number" class="form-control" id="vanus2" name="vanus2">
      </div>
      <button type="submit" class="btn btn-primary">Leia vanem</button>
    </form>
    <?php
    if (!empty($_GET['vanus1']) && !empty($_GET['vanus2'])) {
      $vanus1 = $_GET['vanus1'];
      $vanus2 = $_GET['vanus2'];

      if ($vanus1 == $vanus2) {
        echo "<p class='mt-3'>Mõlemad sama vanad.</p>";
      } elseif ($vanus1 > $vanus2) {
        echo "<p class='mt-3'>Esimene isik on vanem.</p>";
      } else {
        echo "<p class='mt-3'>Teine isik on vanem.</p>";
      }
    }
    ?>

    <form method="get" action="" class="mt-5">
      <div class="mb-3">
        <label for="pikkus" class="form-label">Pikkus:</label>
        <input type="number" class="form-control" id="pikkus" name="pikkus">
      </div>
      <div class="mb-3">
        <label for="laius" class="form-label">Laius:</label>
        <input type="number" class="form-control" id="laius" name="laius">
      </div>
      <button type="submit" class="btn btn-primary">Otsusta</button>
    </form>
    <?php
    if (!empty($_GET['pikkus']) && !empty($_GET['laius'])) {
      $pikkus = $_GET['pikkus'];
      $laius = $_GET['laius'];

      if ($pikkus == $laius) {
        echo "<p class='mt-3'>ruut.</p>";
      } else {
        echo "<p class='mt-3'>ristkülik.</p>";
      }
    }
    ?>

    <form method="get" action="" class="mt-5">
      <div class="mb-3">
        <label for="sunniaasta" class="form-label">Sünniaasta:</label>
        <input type="number" class="form-control" id="sunniaasta" name="sunniaasta">
      </div>
      <button type="submit" class="btn btn-primary">Kontrolli</button>
    </form>
    <?php
    if (!empty($_GET['sunniaasta'])) {
      $sunniaasta = $_GET['sunniaasta'];
      $hetkeaasta = date('Y');

      if (($hetkeaasta - $sunniaasta) % 5 == 0) {
        echo "<p class='mt-3'>Tegemist on juubeliaastaga.</p>";
      } else {
        echo "<p class='mt-3'>See pole juubeliaasta.</p>";
      }
    }
    ?>

    <form method="get" action="" class="mt-5">
      <div class="mb-3">
        <label for="punktid" class="form-label">KT punktid:</label>
        <input type="number" class="form-control" id="punktid" name="punktid">
      </div>
      <button type="submit" class="btn btn-primary">Hinda</button>
    </form>
    <?php
    if (!empty($_GET['punktid'])) {
      $punktid = $_GET['punktid'];

      switch (true) {
        case $punktid > 10:
          echo "<p class='mt-3'>SUPER!</p>";
          break;
        case $punktid >= 5 && $punktid <= 9:
          echo "<p class='mt-3'>TEHTUD!</p>";
          break;
        case $punktid < 5:
          echo "<p class='mt-3'>KASIN!</p>";
          break;
        default:
          echo "<p class='mt-3 text-danger'>SISESTA OMA PUNKTID!</p>";
      }
    }
    ?>
  </div>
</body>
</html>
