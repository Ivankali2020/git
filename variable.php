<?php
echo '<pre>';
$first_name = "Ohmic";
$age = 21;
$arr = ['x','y','z'];
$obj = [
    'name' => 'Ivan'
];
$weight = 23.4;
function run(){
    global $first_name;
    return $first_name;
};
echo  run();
echo " I'm $first_name.$age years Old.This is array : $arr[0]. This is object : {$obj['name']}";
echo  '<br>';
var_dump($age);
var_dump($weight);

$newArray = array('aung','pyae','phyo','ohmic','mhyint',"skill" => array('html','css','js'));


print_r($newArray);
echo $newArray[1];
echo '<br>';
var_dump($newArray);

//$(newObj) = (object) $asignArr 0r obj

$object = (object) $newArray;

print_r($object->skill[5]='vue');

print_r($object->skill)






?>
