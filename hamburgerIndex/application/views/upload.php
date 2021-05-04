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

    <title>Hello, world!</title>
</head>

<body>
    <!-- NavBar -->
    <div class="container navbar justify-content-center">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php/home/index">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Feltöltés</a>
            </li>
        </ul>
    </div>
    <!-- End of NavBar -->

    <!-- Carousel -->
    <?php
$this->load->view('header');
 ?>
    <!-- End of Carousel -->

    <!-- Form -->
    <div class="container mb-3 mt-5 d-flex justify-content-center">
        <form method="POST" action="index.php/home/upload" enctype="multipart/form-data">
            <div class="row mb-3">
                <label for="nev" class="col-sm-3 col-form-label">Hamburger neve</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="nev" name="nev" placeholder="Hamburger neve">
                </div>
            </div>
            <div class="row mb-3">
                <label for="hozzavalo1" class="col-sm-3 col-form-label">Hozzávaló #1</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="hozzavalo1" name="hozzavalo1" placeholder="Hozzávaló">
                </div>
            </div>
            <div class="row mb-3">
                <label for="hozzavalo2" class="col-sm-3 col-form-label">Hozzávaló #2</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="hozzavalo2" name="hozzavalo2" placeholder="Hozzávaló">
                </div>
            </div>
            <div class="row mb-3">
                <label for="hozzavalo3" class="col-sm-3 col-form-label">Hozzávaló #3</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="hozzavalo3" name="hozzavalo3" placeholder="Hozzávaló">
                </div>
            </div>
            <div class="row mb-3">
                <label for="hozzavalo4" class="col-sm-3 col-form-label">Hozzávaló #4</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="hozzavalo4" name="hozzavalo4" placeholder="Hozzávaló">
                </div>
            </div>
            <div class="row mb-3">
                <label for="hozzavalo5" class="col-sm-3 col-form-label">Hozzávaló #5</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="hozzavalo5" name="hozzavalo5" placeholder="Hozzávaló">
                </div>
            </div>
            <div class="row mb-3">
                <label for="hozzavalo6" class="col-sm-3 col-form-label">Hozzávaló #6</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="hozzavalo6" name="hozzavalo6" placeholder="Hozzávaló">
                </div>
            </div>
            <div class="row mb-3">
                <label for="hozzavalo7" class="col-sm-3 col-form-label">Hozzávaló #7</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="hozzavalo7" name="hozzavalo7" placeholder="Hozzávaló">
                </div>
            </div>
            <div class="row mb-3">
                <label for="rovid_leiras" class="col-sm-3 col-form-label">Rövid leírás</label>
                <div class="col-sm-5">
                    <textarea type="text" cols="5" rows="3" class="form-control" id="rovid_leiras" name="rovid_leiras" placeholder="Recept rövid leírása"></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label for="elkeszites" class="col-sm-3 col-form-label">Eklészítés</label>
                <div class="col-sm-5">
                    <textarea type="text" cols="5" rows="8" class="form-control" id="elkeszites" name="elkeszites" placeholder="Recept leírása"></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label for="kategoria" class="col-sm-3 col-form-label">Kategória</label>
                <div class="col-sm-5 mb-3">
                    <select class="form-select col-5" aria-label="Default select example" name="kategoria" id="kategoria">
                        <option value="1">Ranchero burger</option>
                        <option value="2">Diablo burger</option>
                        <option value="3">Colorado</option>
                </div>
                </select>
            </div>

            <div class="row mb-3">
                <label for="kepfeltoltes" class="col-sm-3 col-form-label">Képfeltöltés</label>
                <div class="col-sm-5">
                    <input type="file" class="form-control" id="kepfeltoltes" name="kepfeltoltes">
                </div>
            </div>
        </form>
    </div>
    <!-- End of Form -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>
