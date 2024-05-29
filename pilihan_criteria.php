<?php
  include "connection.php";

  if($_SERVER["REQUEST_METHOD"] == "POST"){

    //retrieve data 
    $criteria_data = [
        ['harga', 'kinerja', $_POST['value1']],
        ['harga', 'keamanan', $_POST['value2']],
        ['harga', 'kapasitas baterai', $_POST['value3']],
        ['harga', 'kenyamanan', $_POST['value4']],
        ['harga', 'tingkat penjualan', $_POST['value5']],
        ['kinerja', 'keamanan', $_POST['value6']],
        ['kinerja', 'kapasitas baterai', $_POST['value7']],
        ['kinerja', 'kenyamanan', $_POST['value8']],
        ['kinerja', 'tingkat penjualan', $_POST['value9']],
        ['keamanan', 'kapasitas baterai', $_POST['value10']],
        ['keamanan', 'kenyamanan', $_POST['value11']],
        ['keamanan', 'tingkat penjualan', $_POST['value12']],
        ['kapasitas baterai', 'kenyamanan', $_POST['value13']],
        ['kapasitas baterai', 'tingkat penjualan', $_POST['value14']],
        ['kenyamanan', 'tingkat penjualan', $_POST['value15']]
    ];

    $stmt = $conn->prepare("INSERT INTO criteria_comparisons(criterion1, criterion2, crit_value) VALUES (?, ?, ?)");

    foreach($criteria_data as $row){
        list($criterion1, $criterion2, $value) = $row;
        $stmt->bind_param("ssd", $criterion1, $criterion2, $value);
        $stmt->execute();
    }

    header('Location: pilihan_car_harga.php');
    exit();
    
    $stmt->close();
  }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Powery</title>
        <link rel="stylesheet" href="style_pilihan2.css" />
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
        <!-- google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet" />
        <style>
        body {
            background-color: rgb(255, 255, 255);
            font-family: "Open Sans", sans-serif;
        }
        </style>
    </head>
    <body>
        <nav style="padding-right: 2rem; padding-left: 4.5rem; padding-bottom: 0.7rem; padding-top: 0.7rem">
            <a href="index.php"><img src="image/Powery (2).png" style="width: 11rem; height: 4.5rem" /></a>
        </nav>

        <main>
            <div class="container" style="margin-top: 3.9rem; padding-left: 0px; padding-right: 0px">
                <p style="font-size: 40px; font-weight: 700; margin-bottom: 3.9rem">Preferensi Penilaian Kriteria</p>
                
                <!-- form input -->
                <form class="col" id="formPenilaian" method="post" style="width: auto;">
                <!-- container 1 harga-kinerja -->
                <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                    <div class="row">
                    <div class="col d-flex justify-content-start">
                        <p id="leftText1" style="font-size: 40px">Harga</p>
                    </div>
                    <div class="col d-flex justify-content-start">
                        <input class="form-control" type="text" name="value1">
                    </div>
                    <div class="col d-flex justify-content-end">
                        <p id="rightText1" style="font-size: 40px">Kinerja</p>
                    </div>
                    </div>
                </div>

                <!-- container 2 harga-keamanan -->
                <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                    <div class="row">
                    <div class="col d-flex justify-content-start">
                        <p id="leftText2" style="font-size: 40px">Harga</p>
                    </div>
                    <div class="col d-flex justify-content-start">
                        <input class="form-control" type="text" name="value2">
                    </div>
                    <div class="col d-flex justify-content-end">
                        <p id="rightText2" style="font-size: 40px">Keamanan</p>
                    </div>
                    </div>
                </div>

                <!-- container 3 harga-kapasitas baterai -->
                <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                    <div class="row">
                    <div class="col d-flex justify-content-start">
                        <p id="leftText3" style="font-size: 40px">Harga</p>
                    </div>
                    <div class="col d-flex justify-content-start">
                        <input class="form-control" type="text" name="value3">
                    </div>
                    <div class="col d-flex justify-content-end">
                        <p id="rightText3" style="font-size: 40px">Kapasitas Baterai</p>
                    </div>
                    </div>
                </div>

                <!-- container 4 harga-kenyamanan -->
                <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                    <div class="row">
                    <div class="col d-flex justify-content-start">
                        <p id="leftText4" style="font-size: 40px">Harga</p>
                    </div>
                    <div class="col d-flex justify-content-start">
                        <input class="form-control" type="text" name="value4">
                    </div>
                    <div class="col d-flex justify-content-end">
                        <p id="rightText4" style="font-size: 40px">Kenyamanan</p>
                    </div>
                    </div>
                </div>

                <!-- container 5 harga-tingkat penjualan  -->
                <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                    <div class="row">
                    <div class="col d-flex justify-content-start">
                        <p id="leftText5" style="font-size: 40px">Harga</p>
                    </div>
                    <div class="col d-flex justify-content-start">
                        <input class="form-control" type="text" name="value5">
                    </div>
                    <div class="col d-flex justify-content-end">
                        <p id="rightText5" style="font-size: 40px">Tingkat Penjualan</p>
                    </div>
                    </div>
                </div>

                <!-- container 6 kinerja-keamanan -->
                <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                    <div class="row">
                    <div class="col d-flex justify-content-start">
                        <p id="leftText6" style="font-size: 40px">Kinerja</p>
                    </div>
                    <div class="col d-flex justify-content-start">
                        <input class="form-control" type="text" name="value6">
                    </div>
                    <div class="col d-flex justify-content-end">
                        <p id="rightText6" style="font-size: 40px">Keamanan</p>
                    </div>
                    </div>
                </div>

                <!-- container 7 kinerja-kapasitas baterai -->
                <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                    <div class="row">
                    <div class="col d-flex justify-content-start">
                        <p id="leftText7" style="font-size: 40px">Kinerja</p>
                    </div>
                    <div class="col d-flex justify-content-start">
                        <input class="form-control" type="text" name="value7">
                    </div>
                    <div class="col d-flex justify-content-end">
                        <p id="rightText7" style="font-size: 40px">Kapasitas Baterai</p>
                    </div>
                    </div>
                </div>

                <!-- container 8 kinerja-kenyamanan -->
                <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                    <div class="row">
                    <div class="col d-flex justify-content-start">
                        <p id="leftText8" style="font-size: 40px">Kinerja</p>
                    </div>
                    <div class="col d-flex justify-content-start">
                        <input class="form-control" type="text" name="value8">
                    </div>
                    <div class="col d-flex justify-content-end">
                        <p id="rightText8" style="font-size: 40px">Kenyamanan</p>
                    </div>
                    </div>
                </div>

                <!-- container 9 kinerja-tingkat penjualan -->
                <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                    <div class="row">
                    <div class="col">
                        <p id="leftText9" style="font-size: 40px">Kinerja</p>
                    </div>
                    <div class="col d-flex justify-content-start">
                        <input class="form-control" type="text" name="value9">
                    </div>
                    <div class="col d-flex justify-content-end">
                        <p id="rightText9" style="font-size: 40px">Tingkat Penjualan</p>
                    </div>
                    </div>
                </div>

                <!-- container 10 keamanan-kapasitas baterai -->
                <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                    <div class="row">
                    <div class="col d-flex justify-content-start">
                        <p id="leftText10" style="font-size: 40px">Keamanan</p>
                    </div>
                    <div class="col d-flex justify-content-start">
                        <input class="form-control" type="text" name="value10">
                    </div>
                    <div class="col d-flex justify-content-end">
                        <p id="rightText10" style="font-size: 40px">Kapasitas Baterai</p>
                    </div>
                    </div>
                </div>

                <!-- container 11 keamanan-kenyamanan -->
                <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                    <div class="row">
                    <div class="col d-flex justify-content-start">
                        <p id="leftText11" style="font-size: 40px">Keamanan</p>
                    </div>
                    <div class="col d-flex justify-content-start">
                        <input class="form-control" type="text" name="value11">
                    </div>
                    <div class="col d-flex justify-content-end">
                        <p id="rightText11" style="font-size: 40px">Kenyamanan</p>
                    </div>
                    </div>
                </div>

                <!-- container 12 keamanan-tingkat penjualan -->
                <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                    <div class="row">
                    <div class="col d-flex justify-content-start">
                        <p id="leftText12" style="font-size: 40px">Keamanan</p>
                    </div>
                    <div class="col d-flex justify-content-start">
                        <input class="form-control" type="text" name="value12">
                    </div>
                    <div class="col d-flex justify-content-end">
                        <p id="rightText12" style="font-size: 40px">Tingkat Penjualan</p>
                    </div>
                    </div>
                </div>

                <!-- container 13 kapasitas baterai-kenyamanan -->
                <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                    <div class="row">
                    <div class="col d-flex justify-content-start">
                        <p id="leftText13" style="font-size: 40px">Kapasitas Baterai</p>
                    </div>
                    <div class="col d-flex justify-content-start">
                        <input class="form-control" type="text" name="value13">
                    </div>
                    <div class="col d-flex justify-content-end">
                        <p id="rightText13" style="font-size: 40px">Kenyamanan</p>
                    </div>
                    </div>
                </div>

                <!-- container 14 kapasitas baterai-tingkat penjualan -->
                <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                    <div class="row">
                    <div class="col d-flex justify-content-start">
                        <p id="leftText14" style="font-size: 40px">Kapasitas Baterai</p>
                    </div>
                    <div class="col d-flex justify-content-start">
                        <input class="form-control" type="text" name="value14">
                    </div>
                    <div class="col d-flex justify-content-end">
                        <p id="rightText14" style="font-size: 40px">Penjualan</p>
                    </div>
                    </div>
                </div>

                <!-- container 15 kenyamanan-tingkat penjualan -->
                <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                    <div class="row">
                    <div class="col d-flex justify-content-start">
                        <p id="leftText15" style="font-size: 40px">Kenyamanan</p>
                    </div>
                    <div class="col d-flex justify-content-start">
                        <input class="form-control" type="text" name="value15">
                    </div>
                    <div class="col d-flex justify-content-end">
                        <p id="rightText15" style="font-size: 40px">Tingkat Penjualan</p>
                    </div>
                    </div>
                </div>
        
                <!-- submit button -->
                <div class="row" style="margin-top: 3rem">
                    <div class="col-2">
                    <button class="buttonSelesai" type="submit">Selesai</button>
                    </div>
                </div>

                </form>
                
            </div>
        </main>

        <footer>
            <div class="container d-flex justify-content-between" style="font-size: 25px">
                <a href="index.php">Home</a>
                <div class="contact" style="display: flex">
                <a href="#" style="display: flex; padding-right: 2rem">Contact</a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-whatsapp"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </footer>
    </body>

</html>
