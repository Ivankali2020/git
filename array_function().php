<?php
    $arr = array("Apple","Orange","Mango","PineApple","Banana");
    $fruit = array('Orange','banana','joker','nothing');
    $associate = array(
        "name" => 'AungKo',
        'age' => 32,
        'skill' => array('html' => 'Good','css','js'),
    );

    echo count($arr);
    echo '<br>';


    echo  current($arr);
    echo '<br>';

    echo end($arr);
    echo '<br>';

    echo $arr[array_rand($arr)];
    echo '<br>';

    echo  array_sum([1,4,3,5,3]);
    echo '<br>';

    $range = range(0,60,5);
    echo '<pre>';
    print_r($range) ;

    echo in_array($fruit[array_rand($fruit)],$arr) ? "Shi tal" : "Ma Shi BU";
    echo '<br>';

    echo array_key_exists("age",$associate);
    echo '<br>';

    echo in_array('AungKo',$associate) ? 'shi tal' : 'ma shi bu';
    echo '<br>';

    print_r(array_keys($associate)) ;
    echo '<br>';

    print_r(array_values($associate));
    echo '<br>';

    echo implode(',',$arr);
    echo  '<br>';

    $fruit[count($fruit)] = 'COUNT';
    print_r($fruit);
    echo '<br>';

    rsort($arr);
    print_r($arr);
    echo '<br>';

    krsort($associate); // asort is value sort k is key ar is value reverse kr is key reverse
    print_r($associate);


    shuffle($arr);  //လေျာက်စီတာ ပါ
    print_r($arr);

