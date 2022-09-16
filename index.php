<?php
/*
$leg = ["anana", "ovy", 8, 9, "karoty"];
foreach($leg as $value) {
    if($value ==  ) {
 unset($leg);}
}
var_dump($leg);
*/
//euro = 4500ar
//dol = 4600ar

$dev = [
    "euro" => [15, 32, 25, 22, 5], "dol" => [36, 42, 28,35, 8]
];
foreach($dev as $euro => $value) {
return $dev["euro"] * 4500;
}
var_dump($dev);

//$dol = $dev["dol"] * 4600;


$person = [
    ["rakoto", "rasoa"],["rabe", "koto"]
];
$person1 = ($person[0][0].$person[0][1]);
$person2 = ($person[1][0].$person[1][1]);
$person = [$person1,$person2];
var_dump($person);
