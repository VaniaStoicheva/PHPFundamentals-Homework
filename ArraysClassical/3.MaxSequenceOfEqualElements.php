<?php
$input=trim(fgets(STDIN));
$array=explode(" ",$input);

$count=1;
$bestCount=1;

$resetArray=reset($array);
$best_array=$resetArray;

$count_array=count($array);


for ($i=0;$i<=$count_array-1;$i++){
    if($array[$i]==$array[$i+1]) {

        $count++;
    }else {
        $count=1;
    }
    if($count>$bestCount){
            $bestCount=$count;
            $best_array=$array[$i];
        }
}

for ($j=0;$j<$bestCount;$j++) {
    echo "$best_array".' ';
}