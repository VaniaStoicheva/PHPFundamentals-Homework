<?php
$input_string=trim(fgets(STDIN));
$lower_array=strtolower($input_string);
$char_array=str_split($lower_array);
$array_letters=range('a','z');
foreach ($char_array as $input_key=>$input_value){
    foreach ($array_letters as $letters_key=>$letters_value){
        if($input_value==$letters_value){
            echo $input_value.' -> '.$letters_key."\n";
        }
    }
}

