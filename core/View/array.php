<?php

$cars = Array("Volvo", "BMW", "Toyota");
$newArr = Array(1,5,3,2,4);

$cars1 = array (
    "Toyota" => 4,
    "BMW" => 2,
    "Honda" => 3,
    "Volvo" => 4,

);

$cars2 = array (
    "Toyota" => 1,
    "Tesla" => 2,
    "Mitsubishi" => 3,
    "Volvo" => 4,

);

/*foreach ($cars as $car){
    echo $car;
}*/

echo "<pre>";
print_r(array_intersect_key($cars1, $cars2));
echo "</pre>";