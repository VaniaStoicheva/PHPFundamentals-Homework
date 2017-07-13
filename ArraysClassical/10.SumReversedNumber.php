<?php
$array=explode('',fgets(STDIN));
$sum=0;
foreach ($array as $arr){
    $reversed=strrev($arr);
    $sum+=$reversed;
}
echo $sum;