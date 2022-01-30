<?php
//$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
//$dico = explode("\n", $string);
//
//echo "nombre de mots : " . str_word_count($string, 0) . "<br>";
//
//$i = 0;
//foreach ($dico as $word){
//    if(strlen($word) === 15){
//        $i++;
//    }
//}
//
//echo $i . " mots ont 15 caractéres<br>";
//
//$i=0;
//foreach ($dico as $word){
//    if(strpos($word,"w") !== false){
//        $i++;
//    }
//}
//
//echo $i . " mots contiennent un w<br>";
//
//$i=0;
//foreach ($dico as $word){
//    if(is_int(strpos($word, "q"))){
//        $len = strlen($word) - 1;
//        if(strpos($word, "q") === $len){
//            $i++;
//        }
//    }
//}
//
//echo $i . " mots finissent par q";

$string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);
$top = $brut["feed"]["entry"];

echo "<pre>";
var_dump($top[0]);
echo "<pre>";

for($i = 0 ; $i < 10 ; $i++){
    echo $i +1 . " " . $top[$i]['im:name']["label"] . "<br>";
}

foreach ($top as $item => $film){
    if($film['im:name']["label"] === "Gravity"){
        echo "classement de Gravity : " . ($item + 1) . "<br>";
    }
}

foreach ($top as $item => $film){
    if($film['im:name']["label"] === "The LEGO Movie"){
        echo "« The LEGO Movie » réalisé par : " . $film['im:artist']["label"] . "<br>";
    }
}

$i = 0;
foreach ($top as $item => $film){
    $year = explode("-", $film['im:releaseDate']["label"]);
    if($year[0] < 2000){
        $i++;
    }
}
echo $i . " sont sortie avant 2000";

