<?php
  include "connection.php";

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    //Receive data from JavaScript JSON
    $data = json_decode(file_get_contents('php://input'), true);

    //retrieve data 
    $data_array = array(
      array("value" => $_POST['radio1'], "leftText" => $data['leftText1'], "rightText" => $data['rightText1']),
      array("value" => $_POST['radio2'], "leftText" => $data['leftText2'], "rightText" => $data['rightText2']),
      array("value" => $_POST['radio3'], "leftText" => $data['leftText3'], "rightText" => $data['rightText3']),
      array("value" => $_POST['radio4'], "leftText" => $data['leftText4'], "rightText" => $data['rightText4']),
      array("value" => $_POST['radio5'], "leftText" => $data['leftText5'], "rightText" => $data['rightText5']),
      array("value" => $_POST['radio6'], "leftText" => $data['leftText6'], "rightText" => $data['rightText6']),
      array("value" => $_POST['radio7'], "leftText" => $data['leftText7'], "rightText" => $data['rightText7']),
      array("value" => $_POST['radio8'], "leftText" => $data['leftText8'], "rightText" => $data['rightText8']),
      array("value" => $_POST['radio9'], "leftText" => $data['leftText9'], "rightText" => $data['rightText9']),
      array("value" => $_POST['radio10'], "leftText" => $data['leftText10'], "rightText" => $data['rightText10']),
      array("value" => $_POST['radio11'], "leftText" => $data['leftText11'], "rightText" => $data['rightText11']),
      array("value" => $_POST['radio12'], "leftText" => $data['leftText12'], "rightText" => $data['rightText12']),
      array("value" => $_POST['radio13'], "leftText" => $data['leftText13'], "rightText" => $data['rightText13']),
      array("value" => $_POST['radio14'], "leftText" => $data['leftText14'], "rightText" => $data['rightText14']),
      array("value" => $_POST['radio15'], "leftText" => $data['leftText15'], "rightText" => $data['rightText15']),
    );

    foreach ($data_array as $item){
      $leftText = $item['leftText'];
      $rightText = $item['rightText'];

      echo $leftText." dan ".$rightText; 
    }

    $stmt = $conn->prepare("INSERT INTO criteria_comparisons(criterion1, criterion2, crit_value) VALUES (?, ?, ?)");

    // foreach ($data_array as $item){
    //   $value = $item['value'];
    //   $leftText = $item['leftText'];
    //   $rightText = $item['rightText'];

    //   $stmt->bind_param("ssd", $leftText, $rightText, $value);
    //   $stmt->execute();

    //   if($stmt->execute()){
    //     echo "New record created succesfully in table criteria_comparisons";
    //   } else {
    //     echo "Error : ".$stmt->error;
    //   }
    // }

    header('Location: listCar.php');
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
        <p style="font-size: 40px; font-weight: 700; margin-bottom: 3.9rem">Preferensi Penilaian</p>
        
        <!-- form input -->
        <form class="col" id="formPenilaian" method="post" style="width: auto;">
          <!-- container slide bar 1 harga-kinerja -->
          <div class="container" style="padding-left: 0; margin-bottom: 10rem">
            <div class="row">
              <div class="col-2 d-flex justify-content-start">
                <p id="leftText1" style="font-size: 40px">Harga</p>
              </div>
              <div class="col-8 d-flex justify-content-between">
                <label class="radioButtonKu">1
                  <input type="radio" name="radio1" value="1" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">2
                  <input type="radio" name="radio1" value="2" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">3
                  <input type="radio" name="radio1" value="3" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">4
                  <input type="radio" name="radio1" value="4" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">5
                  <input type="radio" name="radio1" value="5" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">6
                  <input type="radio" name="radio1" value="6" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">7
                  <input type="radio" name="radio1" value="7" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">8
                  <input type="radio" name="radio1" value="8" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">9
                  <input type="radio" name="radio1" value="9" />
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-2 d-flex justify-content-end">
                <p id="rightText1" style="font-size: 40px">Kinerja</p>
              </div>
            </div>
            <div class="row">
              <div class="col-12 d-flex justify-content-center">
                <button class="buttonTukar" onclick="swapTexts1()" type="button"><i class="bi bi-arrow-left-right"></i> Tukar</button>
              </div>
            </div>
          </div>

          <!-- container slide bar 2 harga-keamanan -->
          <div class="container" style="padding-left: 0; margin-bottom: 10rem">
            <div class="row">
              <div class="col-2 d-flex justify-content-start">
                <p id="leftText2" style="font-size: 40px">Harga</p>
              </div>
              <div class="col-8 d-flex justify-content-between">
                <label class="radioButtonKu">1
                  <input type="radio" name="radio2" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">2
                  <input type="radio" name="radio2" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">3
                  <input type="radio" name="radio2" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">4
                  <input type="radio" name="radio2" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">5
                  <input type="radio" name="radio2" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">6
                  <input type="radio" name="radio2" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">7
                  <input type="radio" name="radio2" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">8
                  <input type="radio" name="radio2" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">9
                  <input type="radio" name="radio2" />
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-2 d-flex justify-content-end">
                <p id="rightText2" style="font-size: 40px">Keamanan</p>
              </div>
            </div>
            <div class="row">
              <div class="col-12 d-flex justify-content-center">
                <button class="buttonTukar" onclick="swapTexts2()" type="button"><i class="bi bi-arrow-left-right"></i> Tukar</button>
              </div>
            </div>
          </div>

          <!-- container slide bar 3 harga-kapasitas baterai -->
          <div class="container" style="padding-left: 0; margin-bottom: 10rem">
            <div class="row">
              <div class="col-2 d-flex justify-content-start">
                <p id="leftText3" style="font-size: 40px">Harga</p>
              </div>
              <div class="col-8 d-flex justify-content-between">
                <label class="radioButtonKu">1
                  <input type="radio" name="radio3" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">2
                  <input type="radio" name="radio3" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">3
                  <input type="radio" name="radio3" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">4
                  <input type="radio" name="radio3" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">5
                  <input type="radio" name="radio3" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">6
                  <input type="radio" name="radio3" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">7
                  <input type="radio" name="radio3" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">8
                  <input type="radio" name="radio3" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">9
                  <input type="radio" name="radio3" />
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-2 d-flex justify-content-end">
                <p id="rightText3" style="font-size: 40px">Baterai</p>
              </div>
            </div>
            <div class="row">
              <div class="col-12 d-flex justify-content-center">
                <button class="buttonTukar" onclick="swapTexts3()" type="button"><i class="bi bi-arrow-left-right"></i> Tukar</button>
              </div>
            </div>
          </div>

          <!-- container slide bar 4 harga-kenyamanan -->
          <div class="container" style="padding-left: 0; margin-bottom: 10rem">
            <div class="row">
              <div class="col-2 d-flex justify-content-start">
                <p id="leftText4" style="font-size: 40px">Harga</p>
              </div>
              <div class="col-8 d-flex justify-content-between">
                <label class="radioButtonKu">1
                  <input type="radio" name="radio4" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">2
                  <input type="radio" name="radio4" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">3
                  <input type="radio" name="radio4" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">4
                  <input type="radio" name="radio4" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">5
                  <input type="radio" name="radio4" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">6
                  <input type="radio" name="radio4" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">7
                  <input type="radio" name="radio4" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">8
                  <input type="radio" name="radio4" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">9
                  <input type="radio" name="radio4" />
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-2 d-flex justify-content-end">
                <p id="rightText4" style="font-size: 40px">Kenyamanan</p>
              </div>
            </div>
            <div class="row">
              <div class="col-12 d-flex justify-content-center">
                <button class="buttonTukar" onclick="swapTexts4()" type="button"><i class="bi bi-arrow-left-right"></i> Tukar</button>
              </div>
            </div>
          </div>

          <!-- container slide bar 5 harga-tingkat penjualan  -->
          <div class="container" style="padding-left: 0; margin-bottom: 10rem">
            <div class="row">
              <div class="col-2 d-flex justify-content-start">
                <p id="leftText5" style="font-size: 40px">Harga</p>
              </div>
              <div class="col-8 d-flex justify-content-between">
                <label class="radioButtonKu">1
                  <input type="radio" name="radio5" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">2
                  <input type="radio" name="radio5" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">3
                  <input type="radio" name="radio5" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">4
                  <input type="radio" name="radio5" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">5
                  <input type="radio" name="radio5" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">6
                  <input type="radio" name="radio5" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">7
                  <input type="radio" name="radio5" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">8
                  <input type="radio" name="radio5" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">9
                  <input type="radio" name="radio5" />
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-2 d-flex justify-content-end">
                <p id="rightText5" style="font-size: 40px">Penjualan</p>
              </div>
            </div>
            <div class="row">
              <div class="col-12 d-flex justify-content-center">
                <button class="buttonTukar" onclick="swapTexts5()" type="button"><i class="bi bi-arrow-left-right"></i> Tukar</button>
              </div>
            </div>
          </div>

          <!-- container slide bar 6 kinerja-keamanan -->
          <div class="container" style="padding-left: 0; margin-bottom: 10rem">
            <div class="row">
              <div class="col-2 d-flex justify-content-start">
                <p id="leftText6" style="font-size: 40px">Kinerja</p>
              </div>
              <div class="col-8 d-flex justify-content-between">
                <label class="radioButtonKu">1
                  <input type="radio" name="radio6" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">2
                  <input type="radio" name="radio6" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">3
                  <input type="radio" name="radio6" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">4
                  <input type="radio" name="radio6" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">5
                  <input type="radio" name="radio6" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">6
                  <input type="radio" name="radio6" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">7
                  <input type="radio" name="radio6" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">8
                  <input type="radio" name="radio6" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">9
                  <input type="radio" name="radio6" />
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-2 d-flex justify-content-end">
                <p id="rightText6" style="font-size: 40px">Keamanan</p>
              </div>
            </div>
            <div class="row">
              <div class="col-12 d-flex justify-content-center">
                <button class="buttonTukar" onclick="swapTexts6()" type="button"><i class="bi bi-arrow-left-right"></i> Tukar</button>
              </div>
            </div>
          </div>

          <!-- container slide bar 7 kinerja-kapasitas baterai -->
          <div class="container" style="padding-left: 0; margin-bottom: 10rem">
            <div class="row">
              <div class="col-2 d-flex justify-content-start">
                <p id="leftText7" style="font-size: 40px">Kinerja</p>
              </div>
              <div class="col-8 d-flex justify-content-between">
                <label class="radioButtonKu">1
                  <input type="radio" name="radio7" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">2
                  <input type="radio" name="radio7" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">3
                  <input type="radio" name="radio7" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">4
                  <input type="radio" name="radio7" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">5
                  <input type="radio" name="radio7" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">6
                  <input type="radio" name="radio7" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">7
                  <input type="radio" name="radio7" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">8
                  <input type="radio" name="radio7" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">9
                  <input type="radio" name="radio7" />
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-2">
                <p id="rightText7" style="font-size: 40px">Baterai</p>
              </div>
            </div>
            <div class="row">
              <div class="col-12 d-flex justify-content-center">
                <button class="buttonTukar" onclick="swapTexts7()" type="button"><i class="bi bi-arrow-left-right"></i> Tukar</button>
              </div>
            </div>
          </div>

          <!-- container slide bar 8 kinerja-kenyamanan -->
          <div class="container" style="padding-left: 0; margin-bottom: 10rem">
            <div class="row">
              <div class="col-2 d-flex justify-content-start">
                <p id="leftText8" style="font-size: 40px">Kinerja</p>
              </div>
              <div class="col-8 d-flex justify-content-between">
                <label class="radioButtonKu">1
                  <input type="radio" name="radio8" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">2
                  <input type="radio" name="radio8" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">3
                  <input type="radio" name="radio8" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">4
                  <input type="radio" name="radio8" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">5
                  <input type="radio" name="radio8" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">6
                  <input type="radio" name="radio8" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">7
                  <input type="radio" name="radio8" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">8
                  <input type="radio" name="radio8" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">9
                  <input type="radio" name="radio8" />
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-2 d-flex justify-content-end">
                <p id="rightText8" style="font-size: 40px">Kenyamanan</p>
              </div>
            </div>
            <div class="row">
              <div class="col-12 d-flex justify-content-center">
                <button class="buttonTukar" onclick="swapTexts8()" type="button"><i class="bi bi-arrow-left-right"></i> Tukar</button>
              </div>
            </div>
          </div>

          <!-- container slide bar 9 kinerja-tingkat penjualan -->
          <div class="container" style="padding-left: 0; margin-bottom: 10rem">
            <div class="row">
              <div class="col-2">
                <p id="leftText9" style="font-size: 40px">Kinerja</p>
              </div>
              <div class="col-8 d-flex justify-content-between">
                <label class="radioButtonKu">1
                  <input type="radio" name="radio9" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">2
                  <input type="radio" name="radio9" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">3
                  <input type="radio" name="radio9" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">4
                  <input type="radio" name="radio9" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">5
                  <input type="radio" name="radio9" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">6
                  <input type="radio" name="radio9" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">7
                  <input type="radio" name="radio9" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">8
                  <input type="radio" name="radio9" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">9
                  <input type="radio" name="radio9" />
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-2 d-flex justify-content-end">
                <p id="rightText9" style="font-size: 40px">Penjualan</p>
              </div>
            </div>
            <div class="row">
              <div class="col-12 d-flex justify-content-center">
                <button class="buttonTukar" onclick="swapTexts9()" type="button"><i class="bi bi-arrow-left-right"></i> Tukar</button>
              </div>
            </div>
          </div>

          <!-- container slide bar 10 keamanan-kapasitas baterai -->
          <div class="container" style="padding-left: 0; margin-bottom: 10rem">
            <div class="row">
              <div class="col-2 d-flex justify-content-start">
                <p id="leftText10" style="font-size: 40px">Keamanan</p>
              </div>
              <div class="col-8 d-flex justify-content-between">
                <label class="radioButtonKu">1
                  <input type="radio" name="radio10" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">2
                  <input type="radio" name="radio10" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">3
                  <input type="radio" name="radio10" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">4
                  <input type="radio" name="radio10" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">5
                  <input type="radio" name="radio10" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">6
                  <input type="radio" name="radio10" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">7
                  <input type="radio" name="radio10" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">8
                  <input type="radio" name="radio10" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">9
                  <input type="radio" name="radio10" />
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-2 d-flex justify-content-end">
                <p id="rightText10" style="font-size: 40px">Baterai</p>
              </div>
            </div>
            <div class="row">
              <div class="col-12 d-flex justify-content-center">
                <button class="buttonTukar" onclick="swapTexts10()" type="button"><i class="bi bi-arrow-left-right"></i> Tukar</button>
              </div>
            </div>
          </div>

          <!-- container slide bar 11 keamanan-kenyamanan -->
          <div class="container" style="padding-left: 0; margin-bottom: 10rem">
            <div class="row">
              <div class="col-2 d-flex justify-content-start">
                <p id="leftText11" style="font-size: 40px">Keamanan</p>
              </div>
              <div class="col-8 d-flex justify-content-between">
                <label class="radioButtonKu">1
                  <input type="radio" name="radio11" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">2
                  <input type="radio" name="radio11" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">3
                  <input type="radio" name="radio11" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">4
                  <input type="radio" name="radio11" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">5
                  <input type="radio" name="radio11" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">6
                  <input type="radio" name="radio11" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">7
                  <input type="radio" name="radio11" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">8
                  <input type="radio" name="radio11" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">9
                  <input type="radio" name="radio11" />
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-2 d-flex justify-content-end">
                <p id="rightText11" style="font-size: 40px">Kenyamanan</p>
              </div>
            </div>
            <div class="row">
              <div class="col-12 d-flex justify-content-center">
                <button class="buttonTukar" onclick="swapTexts11()" type="button"><i class="bi bi-arrow-left-right"></i> Tukar</button>
              </div>
            </div>
          </div>

          <!-- container slide bar 12 keamanan-tingkat penjualan -->
          <div class="container" style="padding-left: 0; margin-bottom: 10rem">
            <div class="row">
              <div class="col-2 d-flex justify-content-start">
                <p id="leftText12" style="font-size: 40px">Keamanan</p>
              </div>
              <div class="col-8 d-flex justify-content-between">
                <label class="radioButtonKu">1
                  <input type="radio" name="radio12" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">2
                  <input type="radio" name="radio12" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">3
                  <input type="radio" name="radio12" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">4
                  <input type="radio" name="radio12" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">5
                  <input type="radio" name="radio12" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">6
                  <input type="radio" name="radio12" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">7
                  <input type="radio" name="radio12" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">8
                  <input type="radio" name="radio12" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">9
                  <input type="radio" name="radio12" />
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-2 d-flex justify-content-end">
                <p id="rightText12" style="font-size: 40px">Penjualan</p>
              </div>
            </div>
            <div class="row">
              <div class="col-12 d-flex justify-content-center">
                <button class="buttonTukar" onclick="swapTexts12()" type="button"><i class="bi bi-arrow-left-right"></i> Tukar</button>
              </div>
            </div>
          </div>

          <!-- container slide bar 13 kapasitas baterai-kenyamanan -->
          <div class="container" style="padding-left: 0; margin-bottom: 10rem">
            <div class="row">
              <div class="col-2 d-flex justify-content-start">
                <p id="leftText13" style="font-size: 40px">Baterai</p>
              </div>
              <div class="col-8 d-flex justify-content-between">
                <label class="radioButtonKu">1
                  <input type="radio" name="radio13" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">2
                  <input type="radio" name="radio13" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">3
                  <input type="radio" name="radio13" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">4
                  <input type="radio" name="radio13" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">5
                  <input type="radio" name="radio13" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">6
                  <input type="radio" name="radio13" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">7
                  <input type="radio" name="radio13" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">8
                  <input type="radio" name="radio13" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">9
                  <input type="radio" name="radio13" />
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-2 d-flex justify-content-end">
                <p id="rightText13" style="font-size: 40px">Kenyamanan</p>
              </div>
            </div>
            <div class="row">
              <div class="col-12 d-flex justify-content-center">
                <button class="buttonTukar" onclick="swapTexts13()" type="button"><i class="bi bi-arrow-left-right"></i> Tukar</button>
              </div>
            </div>
          </div>

          <!-- container slide bar 14 kapasitas baterai-tingkat penjualan -->
          <div class="container" style="padding-left: 0; margin-bottom: 10rem">
            <div class="row">
              <div class="col-2 d-flex justify-content-start">
                <p id="leftText14" style="font-size: 40px">Baterai</p>
              </div>
              <div class="col-8 d-flex justify-content-between">
                <label class="radioButtonKu">1
                  <input type="radio" name="radio14" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">2
                  <input type="radio" name="radio14" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">3
                  <input type="radio" name="radio14" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">4
                  <input type="radio" name="radio14" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">5
                  <input type="radio" name="radio14" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">6
                  <input type="radio" name="radio14" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">7
                  <input type="radio" name="radio14" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">8
                  <input type="radio" name="radio14" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">9
                  <input type="radio" name="radio14" />
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-2 d-flex justify-content-end">
                <p id="rightText14" style="font-size: 40px">Penjualan</p>
              </div>
            </div>
            <div class="row">
              <div class="col-12 d-flex justify-content-center">
                <button class="buttonTukar" onclick="swapTexts14()" type="button"><i class="bi bi-arrow-left-right"></i> Tukar</button>
              </div>
            </div>
          </div>

          <!-- container slide bar 15 kenyamanan-tingkat penjualan -->
          <div class="container" style="padding-left: 0; margin-bottom: 10rem">
            <div class="row">
              <div class="col-2 d-flex justify-content-start">
                <p id="leftText15" style="font-size: 40px">Kenyamanan</p>
              </div>
              <div class="col-8 d-flex justify-content-between">
                <label class="radioButtonKu">1
                  <input type="radio" name="radio15" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">2
                  <input type="radio" name="radio15" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">3
                  <input type="radio" name="radio15" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">4
                  <input type="radio" name="radio15" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">5
                  <input type="radio" name="radio15" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">6
                  <input type="radio" name="radio15" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">7
                  <input type="radio" name="radio15" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">8
                  <input type="radio" name="radio15" />
                  <span class="checkmark"></span>
                </label>
                <label class="radioButtonKu">9
                  <input type="radio" name="radio15" />
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-2 d-flex justify-content-end">
                <p id="rightText15" style="font-size: 40px">Penjualan</p>
              </div>
            </div>
            <div class="row">
              <div class="col-12 d-flex justify-content-center">
                <button class="buttonTukar" onclick="swapTexts15()" type="button"><i class="bi bi-arrow-left-right"></i> Tukar</button>
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

    <script>
      function swapTexts1() {
        const leftText = document.getElementById("leftText1");
        const rightText = document.getElementById("rightText1");

        // Swap the texts
        [leftText.innerText, rightText.innerText] = [rightText.innerText, leftText.innerText];
      }
      function swapTexts2() {
        const leftText2 = document.getElementById("leftText2");
        const rightText2 = document.getElementById("rightText2");

        // Swap the texts
        [leftText2.innerText, rightText2.innerText] = [rightText2.innerText, leftText2.innerText];
      }
      function swapTexts3() {
        const leftText3 = document.getElementById("leftText3");
        const rightText3 = document.getElementById("rightText3");

        // Swap the texts
        [leftText3.innerText, rightText3.innerText] = [rightText3.innerText, leftText3.innerText];
      }
      function swapTexts4() {
        const leftText4 = document.getElementById("leftText4");
        const rightText4 = document.getElementById("rightText4");

        // Swap the texts
        [leftText4.innerText, rightText4.innerText] = [rightText4.innerText, leftText4.innerText];
      }
      function swapTexts5() {
        const leftText5 = document.getElementById("leftText5");
        const rightText5 = document.getElementById("rightText5");

        // Swap the texts
        [leftText5.innerText, rightText5.innerText] = [rightText5.innerText, leftText5.innerText];
      }
      function swapTexts6() {
        const leftText6 = document.getElementById("leftText6");
        const rightText6 = document.getElementById("rightText6");

        // Swap the texts
        [leftText6.innerText, rightText6.innerText] = [rightText6.innerText, leftText6.innerText];
      }
      function swapTexts7() {
        const leftText7 = document.getElementById("leftText7");
        const rightText7 = document.getElementById("rightText7");

        // Swap the texts
        [leftText7.innerText, rightText7.innerText] = [rightText7.innerText, leftText7.innerText];
      }
      function swapTexts8() {
        const leftText8 = document.getElementById("leftText8");
        const rightText8 = document.getElementById("rightText8");

        // Swap the texts
        [leftText8.innerText, rightText8.innerText] = [rightText8.innerText, leftText8.innerText];
      }
      function swapTexts9() {
        const leftText9 = document.getElementById("leftText9");
        const rightText9 = document.getElementById("rightText9");

        // Swap the texts
        [leftText9.innerText, rightText9.innerText] = [rightText9.innerText, leftText9.innerText];
      }
      function swapTexts10() {
        const leftText10 = document.getElementById("leftText10");
        const rightText10 = document.getElementById("rightText10");

        // Swap the texts
        [leftText10.innerText, rightText10.innerText] = [rightText10.innerText, leftText10.innerText];
      }
      function swapTexts11() {
        const leftText11 = document.getElementById("leftText11");
        const rightText11 = document.getElementById("rightText11");

        // Swap the texts
        [leftText11.innerText, rightText11.innerText] = [rightText11.innerText, leftText11.innerText];
      }
      function swapTexts12() {
        const leftText12 = document.getElementById("leftText12");
        const rightText12 = document.getElementById("rightText12");

        // Swap the texts
        [leftText12.innerText, rightText12.innerText] = [rightText12.innerText, leftText12.innerText];
      }
      function swapTexts13() {
        const leftText13 = document.getElementById("leftText13");
        const rightText13 = document.getElementById("rightText13");

        // Swap the texts
        [leftText13.innerText, rightText13.innerText] = [rightText13.innerText, leftText13.innerText];
      }
      function swapTexts14() {
        const leftText14 = document.getElementById("leftText14");
        const rightText14 = document.getElementById("rightText14");

        // Swap the texts
        [leftText14.innerText, rightText14.innerText] = [rightText14.innerText, leftText14.innerText];
      }
      function swapTexts15() {
        const leftText15 = document.getElementById("leftText15");
        const rightText15 = document.getElementById("rightText15");

        // Swap the texts
        [leftText15.innerText, rightText15.innerText] = [rightText15.innerText, leftText15.innerText];
      }

      function sendParagraphtoPhp() {
        const leftText1 = document.getElementById("leftText1").innerText;
        const leftText2 = document.getElementById("leftText2").innerText;
        const leftText3 = document.getElementById("leftText3").innerText;
        const leftText4 = document.getElementById("leftText4").innerText;
        const leftText5 = document.getElementById("leftText5").innerText;
        const leftText6 = document.getElementById("leftText6").innerText;
        const leftText7 = document.getElementById("leftText7").innerText;
        const leftText8 = document.getElementById("leftText8").innerText;
        const leftText9 = document.getElementById("leftText9").innerText;
        const leftText10 = document.getElementById("leftText10").innerText;
        const leftText11 = document.getElementById("leftText11").innerText;
        const leftText12 = document.getElementById("leftText12").innerText;
        const leftText13 = document.getElementById("leftText13").innerText;
        const leftText14 = document.getElementById("leftText14").innerText;
        const leftText15 = document.getElementById("leftText15").innerText;

        const rightText1 = document.getElementById("rightText1").innerText;
        const rightText2 = document.getElementById("rightText2").innerText;
        const rightText3 = document.getElementById("rightText3").innerText;
        const rightText4 = document.getElementById("rightText4").innerText;
        const rightText5 = document.getElementById("rightText5").innerText;
        const rightText6 = document.getElementById("rightText6").innerText;
        const rightText7 = document.getElementById("rightText7").innerText;
        const rightText8 = document.getElementById("rightText8").innerText;
        const rightText9 = document.getElementById("rightText9").innerText;
        const rightText10 = document.getElementById("rightText10").innerText;
        const rightText11 = document.getElementById("rightText11").innerText;
        const rightText12 = document.getElementById("rightText12").innerText;
        const rightText13 = document.getElementById("rightText13").innerText;
        const rightText14 = document.getElementById("rightText14").innerText;
        const rightText15 = document.getElementById("rightText15").innerText;

        fetch(window.location.href, {
          method: 'POST',
          headers: {
            'Content-Type' : 'application/json',
          },
          body: JSON.stringify({
            leftText1: leftText1,
            leftText2: leftText2,
            leftText3: leftText3,
            leftText4: leftText4,
            leftText5: leftText5,
            leftText6: leftText6,
            leftText7: leftText7,
            leftText8: leftText8,
            leftText9: leftText9,
            leftText10: leftText10,
            leftText11: leftText11,
            leftText12: leftText12,
            leftText13: leftText13,
            leftText14: leftText14,
            leftText15: leftText15,
            rightText1: rightText1,
            rightText2: rightText2,
            rightText3: rightText3,
            rightText4: rightText4,
            rightText5: rightText5,
            rightText6: rightText6,
            rightText7: rightText7,
            rightText8: rightText8,
            rightText9: rightText9,
            rightText10: rightText10,
            rightText11: rightText11,
            rightText12: rightText12,
            rightText13: rightText13,
            rightText14: rightText14,
            rightText15: rightText15
          }),
        })
        .then(response => response.text())
        .then(data => {
          console.log(data);
        })
        .catch((error) => {
          console.error('Error: ', error);
        })
      }
    </script>
  </body>
</html>
