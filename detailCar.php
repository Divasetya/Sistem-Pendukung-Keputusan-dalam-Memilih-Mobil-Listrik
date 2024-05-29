<?php
  
  include "connection.php";

  if(isset($_GET['index'])){
    $car_index = $_GET['index'];

    //masukkin semua
    $stmt = mysqli_prepare($conn, "SELECT * FROM car_data WHERE car_index = ?");
    mysqli_stmt_bind_param($stmt, "s", $car_index);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0){
      $data = mysqli_fetch_assoc($result);

    // $query = "SELECT * FROM car_data WHERE car_index = ?";
    // $stmt = $conn -> prepare($query);
    // $stmt->bind_param("s", $car_index);
    // $result = $stmt->execute();

    // $data = $result -> fetch_assoc();

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
            <h1 style="font-weight: 700;"><?php echo $data['tipe'];?></h1>
          </div>
          <img src="<?php echo $data['image'] ?>" style="margin-left: auto; margin-right: auto; width: 430px; height: 300px;">
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
                <td><?php echo $data['harga']; ?></td>
              </tr>
              <tr>
                <td>Kinerja Torsi</td>
                <td><?php echo $data['kinerja_torsi']; ?></td>
              </tr>
              <tr>
                <td>Kapasitas Baterai</td>
                <td><?php echo $data['kapasitas_baterai']; ?></td>
              </tr>
              <tr>
                <td>Kenyamanan</td>
                <td><?php echo $data['kenyamanan']; ?></td>
              </tr>
              <tr>
                <td>Keamanan</td>
                <td><?php echo $data['keamanan']; ?></td>
              </tr>
              <tr>
                <td>Tingkat Penjualan</td>
                <td><?php echo $data['tingkat_penjualan']; ?></td>
              </tr>
            </tbody>
          </table>
        </div>

    <?php              
        }
      }
    ?>
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