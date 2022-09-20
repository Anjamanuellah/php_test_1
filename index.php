<?php

//exo1:
$legumes = ["anana", "ovy", 8, 9, "karoty"];
foreach($legumes as $key => $value) {
    if(is_int($value)) {
        unset($legumes[$key]);
    };
}
var_dump($legumes);

//exo2:
//euro = 4500ar
//dol = 4600ar
$devise = [
    "euro" => [15, 32, 25, 22, 5], 
    "dol" => [36, 42, 28,35, 8]
];
$devise["euroar"][]=[];
$devise["dolar"][]=[];

$euroar = [];
$dolar = [];
foreach($devise as $key => $values) {
    foreach($values as $value) {
        if($key === "euro") {
        array_push($devise["euroar"] , $value * 4500);
        }
        elseif($key === "dol") {
        array_push($devise["dolar"] , $value * 4600);
        }
    }
}
print_r($devise);

//exo3:
$person = [
    ["rakoto", "rasoa"],["rabe", "koto"]
];
$person1 = ($person[0][0].$person[0][1]);
$person2 = ($person[1][0].$person[1][1]);
$person = [$person1,$person2];
var_dump($person);
