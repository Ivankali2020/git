<?php

//    header('Location:../math.php');

    $name = "IVan";


    echo md5($name);
    echo "<br>";

    echo sha1($name);
    echo "<br>";
    echo "<br>";

    echo crypt($name);
    $hash = password_hash($name,PASSWORD_BCRYPT);
    $allP = array('car','aungko','ohmic','japan','IVan');


    echo '<br>';
    echo  password_verify($allP[array_rand($allP)],$hash) ? "YOUR Password iS Correct " : "Fuck This IS not your password";
    echo '<br>';
    echo '<br>';
    echo '<br>';

    date_default_timezone_set("Asia/Yangon");
    $Today = date_create(date('d-m-Y'));

    date_sub($Today,date_interval_create_from_date_string('22 year'));
    echo date_format($Today,"d-m-y");
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo $Today;

    echo '<br>';
$number = cal_days_in_month(CAL_GREGORIAN, 8, 2003); // 31
echo "There were {$number} days in August 2003";