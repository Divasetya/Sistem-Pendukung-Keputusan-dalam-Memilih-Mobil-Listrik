<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Powery</title>
    <link rel="stylesheet" href="style_index.css" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet" />
    <style>
      body {
        background-color: #b42b3f;
      }
    </style>
  </head>
  <body>
    <!-- jumbotron -->
    <div class="jumbotron styleJmbtrn">
      <img src="image/cropLogo.jpeg" alt="" style="width: 35%; border-radius: 20px" />
    </div>
    <!-- filter -->
    <div class="container d-flex justify-content-center">
      <a href="pilihan_criteria.php" style="text-decoration: none;">
        <button class="btn btn-secondary text-bg-light d-flex justify-content-center" type="button" style="width: 46vw; padding: 0% 2%; border: none; border-radius: 50px">
          <span class="fontFilter">Mulai</span>
        </button>
      </a>
    </div>
    <!-- <div class="dropdown d-flex justify-content-center">
      <button class="btn btn-secondary text-bg-light d-flex justify-content-between" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 46vw; padding: 0% 2%; border: none; border-radius: 50px">
        <span class="fontFilter">Filter</span>
        <span class="fontFilter"><i class="bi bi-caret-down"></i></span>
      </button>
      <ul class="dropdown-menu" style="width: 46vw; border: none; border-radius: 50px; font-size: 40px">
        <li>
          <a class="dropdown-item" href="#">Harga</a>
          <hr class="hrStyle" />
        </li>
        <li>
          <a class="dropdown-item" href="#">Kinerja Torsi</a>
          <hr class="hrStyle" />
        </li>
        <li>
          <a class="dropdown-item" href="#">Kapasitas Baterai</a>
          <hr class="hrStyle" />
        </li>
        <li>
          <a class="dropdown-item" href="#">Kenyamanan</a>
          <hr class="hrStyle" />
        </li>
        <li>
          <a class="dropdown-item" href="#">Keamanan</a>
          <hr class="hrStyle" />
        </li>
        <li>
          <a class="dropdown-item" href="#">Tingkat Penjualan</a>
        </li>
      </ul>
    </div> -->
    <!-- logo mobil -->
    <div class="container-fluid" style="margin-top: 10%; margin-bottom: 13%">
      <div class="row d-flex justify-content-center">
        <div class="col-2 marginMerk">
          <img src="image/image 1.png" alt="" class="styleMerk" />
        </div>
        <div class="col-2 marginMerk">
          <img src="image/image 2.png" alt="" class="styleMerk" />
        </div>
        <div class="col-2 marginMerk">
          <img src="image/image 3.png" alt="" class="styleMerk" />
        </div>
        <div class="col-2 marginMerk">
          <img src="image/image 4.png" alt="" class="styleMerk" />
        </div>
        <div class="col-2">
          <img src="image/image 5.png" alt="" class="styleMerk" />
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
