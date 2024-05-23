<?php
    $output = shell_exec("jupyter nbconvert --execute --to html ahp_python_spk.ipynb --stdout");
    echo $output;

    header('Location: listCar.php');
    exit();
?>