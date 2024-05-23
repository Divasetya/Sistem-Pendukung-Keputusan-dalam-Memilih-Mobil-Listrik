<?php
  
  include "connection.php";

  //masukkin semua
  $query = "SELECT car_data.image AS photo, car_data.harga AS price, car_data.tipe AS brand, ahp_results.score AS ahp_score FROM car_data JOIN ahp_results ON car_data.tipe = ahp_results.alternative ORDER BY ahp_results.score DESC";
  
  $result = $conn->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Powery - HOME</title>
    <link rel="stylesheet" href="style-hyundai.css" />
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
        <nav> 
          <a href="#"><img src="image/Powery (2).png" style="width: 5rem; height: 2.5rem; margin-right: 2rem; margin-left: 20px; margin-bottom: 10px; margin-top: 10px;"></a>
        </nav>
        <div class="jumbotron">
          <div class="bg-text">
            <h1 style="font-weight: 700;">Hyundai Ioniq 5 Prime Standard Range</h1>
          </div>
          <img src="image/hyundai ioniq.jpg" style="margin-left: auto; margin-right: auto; width: 430px; height: 300px;">
        </div>
        
    </header>
    <main> 
        <div class="table"> 
          <table class="specs-table">
            <thead>
              <tr>
                <th colspan="2" style="text-align: center; background-color: #B42B3F;">Kriteria</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Harga</td>
                <td>Rp. 748.000.000</td>
              </tr>
              <tr>
                <td>Kinerja Torsi</td>
                <td>350 Nm</td>
              </tr>
              <tr>
                <td>Kapasitas Baterai</td>
                <td>58 kWh</td>
              </tr>
              <tr>
                <td>Kenyamanan</td>
                <td>5/5</td>
              </tr>
              <tr>
                <td>Keamanan</td>
                <td>5/5</td>
              </tr>
              <tr>
                <td>Tingkat Penjualan</td>
                <td>33918</td>
              </tr>
            </tbody>
          </table>
        </div>
    </main>
    <footer>
        <p style="font-size: 25px;">
          <a href="index.php" style="margin-left: 25px;">Home</a> 
          
          <div class="contact">
            <a href="#">Contact Us</a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-whatsapp"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
           
        </p> 
      </footer>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>