<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.06 - Arrays, vetores e pilhas");

/**
 * [ arrays ] https://php.net/manual/pt_BR/language.types.array.php
 */
fullStackPHPClassSession("index array", __LINE__);


$arrayIndex = [
    "Brian",
    "Angus",
    "Malcom"

];
$arrayIndex[] = "Cliff";
$arrayIndex[] = "Phil";

var_dump($arrayIndex);

/**
 * [ associative array ]  "key" => "value"
 */
fullStackPHPClassSession("associative array", __LINE__);

$arrayAssoc = [
    "vocal" => "Brian",
    "Vocal" => "Myles",
    "solo_guitar" => "Angus",
    "base_guitar" => "Malcom",
    "bass_guitar" => "cliff"
];
$arrayAssoc["drums"] = "Phil";
$arrayAssoc["rock_bands"] = "AC/DC";
var_dump($arrayAssoc);


/**
 * [ multidimensional array ] "key" => ["key" => "value"]
 */
fullStackPHPClassSession("multidimensional array", __LINE__);

$brian = ["Brian", "Mic"];
$angus = ["name" => "Angus", "instruments" => "Guitar"];
$instruments = [
    $brian,
    $angus
];
var_dump($instruments);




/**
 * [ array access ] foreach(array as item) || foreach(array as key => value)
 */
fullStackPHPClassSession("array access", __LINE__);

