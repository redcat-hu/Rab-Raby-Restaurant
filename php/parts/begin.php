<!doctype html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $local; ?>css/style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $local; ?>img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $local; ?>img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $local; ?>img/favicon-16x16.png">

    <title>Rab Ráby Vendéglő, Szentendre | +36 26 310 819</title>
</head>

<header class="fixed-top text-uppercase">
  <div class="topbar">
    <div class="py-1 container-xxl d-flex justify-content-between">
      <div><a href="#"><i class="bi bi-geo-alt-fill"></i> 2000 Szentendre, Kucsera Ferenc u. 1/a</a></div>
      <div><a href="tel:+3626310819"><i class="bi bi-telephone-fill"></i> +3626310819</a></div>
    </div>
  </div>

  <nav class="navbar navbar-expand-md navbar-dark">
    <div class="container-md px-4">
        <a class="navbar-brand" href="#">
            <div class="logo"><span class="rr">Rab Ráby</span><br>Restaurant</div>
          </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="home"><?= $lang_data[$lang_number]["menu"]["home"]; ?></a></li>
          <li class="nav-item"><a class="nav-link" href="menu"><?= $lang_data[$lang_number]["menu"]["menu"]; ?></a></li>
          <li class="nav-item"><a class="nav-link" href="groups"><?= $lang_data[$lang_number]["menu"]["groups"]; ?></a></li>
          <li class="nav-item"><a class="nav-link" href="about"><?= $lang_data[$lang_number]["menu"]["about"]; ?></a></li>
          <li class="nav-item"><a class="nav-link" href="contact"><?= $lang_data[$lang_number]["menu"]["contact"]; ?></a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<main>