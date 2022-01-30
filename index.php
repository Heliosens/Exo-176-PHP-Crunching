<?php
$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
//$dico = explode("\n", $string);

echo "nombre de mots : " . str_word_count($string, 0) . "<br>";

