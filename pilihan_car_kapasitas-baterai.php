<?php
  include "connection.php";

  if($_SERVER["REQUEST_METHOD"] == "POST"){

    //retrieve data 
    $criteria_data = [
        ['Hyundai Ioniq 5 Prime Standard', 'Wuling Air EV Standard', $_POST['value1']],
        ['Hyundai Ioniq 5 Prime Standard', 'Toyota BZ4X Panoramic Roof (One Tone Color)', $_POST['value2']],
        ['Hyundai Ioniq 5 Prime Standard', 'Nissan Leaf One Toned', $_POST['value3']],
        ['Hyundai Ioniq 5 Prime Standard', 'Lexus UX 300e', $_POST['value4']],
        ['Hyundai Ioniq 5 Prime Standard', 'Kia EV6 GT Line', $_POST['value5']],
        ['Hyundai Ioniq 5 Prime Standard', 'Mercedes-Benz EQA 250', $_POST['value6']],
        ['Hyundai Ioniq 5 Prime Standard', 'BMW iX', $_POST['value7']],
        ['Hyundai Ioniq 5 Prime Standard', 'Citroen E-C4', $_POST['value8']],
        ['Hyundai Ioniq 5 Prime Standard', 'Tesla Model Y Long Range', $_POST['value9']],
        ['Wuling Air EV Standard', 'Toyota BZ4X Panoramic Roof (One Tone Color)', $_POST['value10']],
        ['Wuling Air EV Standard', 'Nissan Leaf One Toned', $_POST['value11']],
        ['Wuling Air EV Standard', 'Lexus UX 300e', $_POST['value12']],
        ['Wuling Air EV Standard', 'Kia EV6 GT Line', $_POST['value13']],
        ['Wuling Air EV Standard', 'Mercedes-Benz EQA 250', $_POST['value14']],
        ['Wuling Air EV Standard', 'BMW iX', $_POST['value15']],
        ['Wuling Air EV Standard', 'Citroen E-C4', $_POST['value16']],
        ['Wuling Air EV Standard', 'Tesla Model Y Long Range', $_POST['value17']],
        ['Toyota BZ4X Panoramic Roof (One Tone Color)', 'Nissan Leaf One Toned', $_POST['value18']],
        ['Toyota BZ4X Panoramic Roof (One Tone Color)', 'Lexus UX 300e', $_POST['value19']],
        ['Toyota BZ4X Panoramic Roof (One Tone Color)', 'Kia EV6 GT Line', $_POST['value20']],
        ['Toyota BZ4X Panoramic Roof (One Tone Color)', 'Mercedes–Benz EQA 250', $_POST['value21']],
        ['Toyota BZ4X Panoramic Roof (One Tone Color)', 'BMW iX', $_POST['value22']],
        ['Toyota BZ4X Panoramic Roof (One Tone Color)', 'Citroen E-C4', $_POST['value23']],
        ['Toyota BZ4X Panoramic Roof (One Tone Color)', 'Tesla Model Y Long Range', $_POST['value24']],
        ['Nissan Leaf One Toned', 'Lexus UX 300e', $_POST['value25']],
        ['Nissan Leaf One Toned', 'Kia EV6 GT Line', $_POST['value26']],
        ['Nissan Leaf One Toned', 'Mercedes–Benz EQA 250', $_POST['value27']],
        ['Nissan Leaf One Toned', 'BMW iX', $_POST['value28']],
        ['Nissan Leaf One Toned', 'Citroen E-C4', $_POST['value29']],
        ['Nissan Leaf One Toned', 'Tesla Model Y Long Range', $_POST['value30']],
        ['Lexus UX 300e', 'Kia EV6 GT Line', $_POST['value31']],
        ['Lexus UX 300e', 'Mercedes–Benz EQA 250', $_POST['value32']],
        ['Lexus UX 300e', 'BMW iX', $_POST['value33']],
        ['Lexus UX 300e', 'Citroen E-C4', $_POST['value34']],
        ['Lexus UX 300e', 'Tesla Model Y Long Range', $_POST['value35']],
        ['Kia EV6 GT Line', 'Mercedes–Benz EQA 250', $_POST['value36']],
        ['Kia EV6 GT Line', 'BMW iX', $_POST['value37']],
        ['Kia EV6 GT Line', 'Citroen E-C4', $_POST['value38']],
        ['Kia EV6 GT Line', 'Tesla Model Y Long Range', $_POST['value39']],
        ['Mercedes–Benz EQA 250', 'BMW iX', $_POST['value40']],
        ['Mercedes–Benz EQA 250', 'Citroen E-C4', $_POST['value41']],
        ['Mercedes–Benz EQA 250', 'Tesla Model Y Long Range', $_POST['value42']],
        ['BMW iX', 'Citroen E-C4', $_POST['value43']],
        ['BMW iX', 'Tesla Model Y Long Range', $_POST['value44']],
        ['Citroen E-C4', 'Tesla Model Y Long Range', $_POST['value45']]
    ];

    $stmt = $conn->prepare("INSERT INTO alternative_comparisons(criterion, alternative1, alternative2, alt_value) VALUES ('kapasitas baterai', ?, ?, ?)");

    foreach($criteria_data as $row){
        list($alternative1, $alternative2, $value) = $row;
        $stmt->bind_param("ssd", $alternative1, $alternative2, $value);
        $stmt->execute();
    }

    header('Location: pilihan_car_kenyamanan.php');
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
                <p style="font-size: 40px; font-weight: 700; margin-bottom: 3.9rem">Preferensi Penilaian Kapasitas Baterai</p>
                
                <!-- form input -->
                <form class="col" id="formPenilaian" method="post" style="width: auto;">
                    <!-- container 1 Ioniq-Air EV -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Hyundai Ioniq 5 Prime Standard</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value1">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Wuling Air EV Standard</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 2 Ioniq-BZ4X -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Hyundai Ioniq 5 Prime Standard</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value2">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Toyota BZ4X Panoramic Roof (One Tone Color)</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 3 Ioniq-Nissan Leaf -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Hyundai Ioniq 5 Prime Standard</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value3">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Nissan Leaf One Toned</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 4 Ioniq-Lexus UX 300e -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Hyundai Ioniq 5 Prime Standard</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value4">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Lexus UX 300e</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 5 Ioniq-Kia EV6 GT Line -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Hyundai Ioniq 5 Prime Standard</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value5">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Kia EV6 GT Line</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 6 Ioniq-Mercedes–Benz EQA 250 -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Hyundai Ioniq 5 Prime Standard</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value6">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Mercedes–Benz EQA 250</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 7 Ioniq-BMW iX -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Hyundai Ioniq 5 Prime Standard</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value7">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">BMW iX</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 8 Ioniq-Citroen E-C4 -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Hyundai Ioniq 5 Prime Standard</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value8">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Citroen E-C4</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 9 Ioniq-Tesla Model Y Long Range-->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Hyundai Ioniq 5 Prime Standard</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value9">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Tesla Model Y Long Range</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 10 Air EV-BZ4X -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Wuling Air EV Standard</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value10">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Toyota BZ4X Panoramic Roof (One Tone Color)</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 11 Air EV-Nissan Leaf One Toned -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Wuling Air EV Standard</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value11">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Nissan Leaf One Toned</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 12 Air EV-Lexus UX 300e -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Wuling Air EV Standard</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value12">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Lexus UX 300e</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 13 Air EV-Kia EV6 GT Line -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Wuling Air EV Standard</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value13">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Kia EV6 GT Line</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 14 Air EV-Mercedes–Benz EQA 250 -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Wuling Air EV Standard</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value14">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Mercedes–Benz EQA 250</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 15 Air EV-Mercedes–BMW iX -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Wuling Air EV Standard</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value15">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">BMW iX</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 16 Air EV-Citroen E-C4 -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Wuling Air EV Standard</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value16">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Citroen E-C4</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 17 Air EV-Mercedes–Tesla Model Y Long Range -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Wuling Air EV Standard</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value17">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Tesla Model Y Long Range</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 18 BZ4X-Nissan Leaf One Toned -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Toyota BZ4X Panoramic Roof (One Tone Color)</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value18">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Nissan Leaf One Toned</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 19 BZ4X-Lexus UX 300e -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Toyota BZ4X Panoramic Roof (One Tone Color)</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value19">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Lexus UX 300e</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 20 BZ4X-Kia EV6 GT Line -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Toyota BZ4X Panoramic Roof (One Tone Color)</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value20">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Kia EV6 GT Line</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 21 BZ4X-Mercedes–Benz EQA 250 -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Toyota BZ4X Panoramic Roof (One Tone Color)</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value21">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Mercedes–Benz EQA 250</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 22 BZ4X-BMW iX -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Toyota BZ4X Panoramic Roof (One Tone Color)</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value22">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">BMW iX</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 23 BZ4X-Citroen E-C4 -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Toyota BZ4X Panoramic Roof (One Tone Color)</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value23">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Citroen E-C4</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 24 BZ4X-Tesla Model Y Long Range -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Toyota BZ4X Panoramic Roof (One Tone Color)</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value24">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Tesla Model Y Long Range</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 25 Nissan Leaf One Toned-Lexus UX 300e -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Nissan Leaf One Toned</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value25">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Lexus UX 300e</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 26 Nissan Leaf One Toned-Kia EV6 GT Line -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Nissan Leaf One Toned</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value26">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Kia EV6 GT Line</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 27 Nissan Leaf One Toned-Mercedes–Benz EQA 250 -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Nissan Leaf One Toned</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value27">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Mercedes–Benz EQA 250</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 28 Nissan Leaf One Toned-BMW iX -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Nissan Leaf One Toned</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value28">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">BMW iX</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 29 Nissan Leaf One Toned-Citroen E-C4 -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Nissan Leaf One Toned</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value29">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Citroen E-C4</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 30 Nissan Leaf One Toned-Tesla Model Y Long Range -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Nissan Leaf One Toned</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value30">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Tesla Model Y Long Range</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 31 Lexus UX 300e-Kia EV6 GT Line -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Lexus UX 300e</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value31">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Kia EV6 GT Line</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 32 Lexus UX 300e-Mercedes–Benz EQA 250 -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Lexus UX 300e</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value32">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Mercedes–Benz EQA 250</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 33 Lexus UX 300e-BMW iX -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Lexus UX 300e</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value33">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">BMW iX</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 34 Lexus UX 300e-Citroen E-C4 -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Lexus UX 300e</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value34">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Citroen E-C4</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 35 Lexus UX 300e-Tesla Model Y Long Range -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Lexus UX 300e</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value35">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Tesla Model Y Long Range</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 36 Kia EV6 GT Line-Mercedes–Benz EQA 250 -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Kia EV6 GT Line</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value36">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Mercedes–Benz EQA 250</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 37 Kia EV6 GT Line-BMW iX -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Kia EV6 GT Line</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value37">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">BMW iX</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 38 Kia EV6 GT Line-Citroen E-C4 -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Kia EV6 GT Line</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value38">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Citroen E-C4</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 39 Kia EV6 GT Line-Tesla Model Y Long Range -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Kia EV6 GT Line</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value39">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Tesla Model Y Long Range</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 40 Mercedes–Benz EQA 250-BMW iX -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Mercedes–Benz EQA 250</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value40">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">BMW iX</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 41 Mercedes–Benz EQA 250-Citroen E-C4 -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Mercedes–Benz EQA 250</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value41">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Citroen E-C4</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 42 Mercedes–Benz EQA 250-Tesla Model Y Long Range -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Mercedes–Benz EQA 250</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value42">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Tesla Model Y Long Range</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 43 BMW iX-Citroen E-C4 -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">BMW iX</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value43">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Citroen E-C4</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 44 BMW iX-Tesla Model Y Long Range -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">BMW iX</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value44">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Tesla Model Y Long Range</p>
                        </div>
                        </div>
                    </div>

                    <!-- container 45 Citroen E-C4-Tesla Model Y Long Range -->
                    <div class="container" style="padding-left: 0; margin-bottom: 10rem">
                        <div class="row">
                        <div class="col d-flex justify-content-start">
                            <p id="leftText" style="font-size: 40px">Citroen E-C4</p>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <input class="form-control" type="text" name="value45">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <p id="rightText" style="font-size: 40px">Tesla Model Y Long Range</p>
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