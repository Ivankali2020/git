<?php

    $no = 123.245;
    $weigth = 58.72;
    $height = 5.6;
    $money = 9999;

    echo is_int($money);//true false return
    echo '<br>';

    echo round($weigth);//ပိုယူတယ် နော်..... ၅ ကျော်ရင် တိုးယူတယ်
    echo '<br>';

    echo pow(5,5);
    echo '<br>';

    echo sqrt(88);
    echo '<br>';

    echo abs($no);
    echo '<br>';

    echo ceil($no);//.အနောက် မှ ၅ မကျော်လည်း တိုးယူတယ်
    echo '<br>';

    echo floor($no);
    echo '<br>';

    echo rand(1,6);//(start,end) between 1 to 6
    echo '<br>';

    echo sin(90);
    echo '<br>';

    echo max(0,3,45,100,-0,-40);
    echo '<br>';

    echo min(0,3,45,100,-0,-40);
    echo '<br>';

    echo number_format($money,2,',',' ');




