<!doctype html>
<html lang="hu">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="<?php print(base_url()); ?>">

    <!-- local CSS -->
    <link rel="stylesheet" href="./assets/css/index.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Burger card</title>
</head>

<body>
    <!-- NavBar -->
    <div class="container navbar justify-content-center">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php/home/index">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php/home/upload">Feltöltés</a>
            </li>
        </ul>
    </div>
    <!-- End of NavBar -->

    <!-- Carousel -->
    <?php
    $this->load->view('header');
    ?>
    <!-- End of Carousel -->


    <!-- BurgerCard -->
    <div class="container">
        <div class="card mb-3 mt-5">
            <img src="assets/img/<?php print($burger['kep_neve']);?>.jpg" class="card-img-top" alt="<?php print($burger['nev']); ?> ">
            <div class="card-body">
                <h2 class="card-title"><?php print($burger['nev']); ?> </h2>
                <h5 class="card-title"> <?php print($burger['hamburger_tipus']); ?> </h5>
                <ul>
                    <?php for($i = 1; $i < 7; $i++)
                    {
              ?>
                    <li> <?php print($burger['hozzavalo'.$i]); ?> </li>
                    <?php
                    }
              ?>
                </ul>
                <p class="card-text"> <?php print($burger['elkeszites']); ?> </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
    <!-- End of Cards -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>
