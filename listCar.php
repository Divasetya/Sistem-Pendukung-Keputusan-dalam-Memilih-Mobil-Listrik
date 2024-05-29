<?php
  
  include "connection.php";

  function koneksi(){
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "electric_car";

    $koneksi = mysqli_connect($hostname, $username, $password, $database) or die (mysqli_error(koneksi()));

    return $koneksi;
  }

  function ambilCarData(){
    $query = "SELECT car_data.car_index, car_data.image AS photo, car_data.harga AS price, car_data.tipe AS brand, ahp_results.score AS ahp_score FROM car_data JOIN ahp_results ON car_data.tipe = ahp_results.alternative ORDER BY ahp_results.score DESC";
    $tabel_car = mysqli_query(koneksi(), $query) or die(mysqli_error(koneksi()));
    while($row = mysqli_fetch_assoc($tabel_car)){
      $daftarCar[] = $row;
    }

    return $daftarCar;
  }

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Powery</title>
    <link rel="stylesheet" href="style-home.css" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet" />
    <style>
      body {
        background-color: #ffffff;
      }
    </style>
</head>
<body>
    <header class="nav-bar"> 
        <nav style="padding-right: 2rem; padding-left: 4.5rem; padding-bottom: 0.7rem; padding-top: 0.7rem">
            <a href="index.php"><img src="image/Powery (2).png" style="width: 11rem; height: 4.5rem" /></a>
        </nav>
        <div class="jumbotron">
          <div class="bg-text">
            <h1 style="font-weight: 700;">Peringkat Alternatif</h1>
          </div>
        </div>
    </header>
    
    <main> 
        <div class="container-fluid" style="margin-top: 5%;">
          <div class="row d-flex justify-content-center">

            <?php
              $listCar = ambilCarData();
              foreach($listCar as $car){

            ?>
            
            <div class="col-3 mobilPage" >
              <img src="<?php echo $car['photo'] ?>" alt="" class="styleMerk">       
              <h4><a href="detailCar.php?index=<?php echo $car['car_index']; ?>" class="link" style="text-decoration: none; color: black;"><?php echo $car['brand'] ?></a></h4>
              <h5><?php echo $car['price'] ?></h5>
            </div>
            
            <?php
              }
            ?>
          </div>
        </div>
    </main>
    
    <footer>
        <p style="font-size: 25px;">
          <a href="index.php">Home</a> 
          
          <div class="contact" style="display: flex;">
            <a href="#" style="display: flex;">Contact</a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-whatsapp"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
           
        </p> 
      </footer>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>