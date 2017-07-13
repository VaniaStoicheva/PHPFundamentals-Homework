<?php
$text=trim(fgets(STDIN));
$banlist=explode(", ",trim(fgets(STDIN)));

foreach ($banlist as $banword){

    $text=str_replace($banword,str_repeat("*",strlen($banword)),$text);

    }


echo $text;