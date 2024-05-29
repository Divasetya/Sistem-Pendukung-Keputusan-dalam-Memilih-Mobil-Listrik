<?php
    $command = escapeshellcmd('python C:\xampp\htdocs\Sistem-Pendukung-Keputusan-dalam-Memilih-Mobil-Listrik\ahp_python_spk.py 2>&1');

    // shell_exec($convert);
    $output = shell_exec($command);

    if(strpos($output, 'An error occurred:') === false){
        sleep(5);
        // echo "<pre>$output</pre>";
        header('Location: listCar.php');
        exit();
    } else {
        echo "Terjadi kesalahan saat menjalankan skrip Python.";
        echo "<pre>$output</pre>";
    }

?>