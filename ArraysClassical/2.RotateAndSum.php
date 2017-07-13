<?php
$input=explode(' ',trim(fgets(STDIN)));
$k=intval(fgets(STDIN));
$countInput=count($input);
$sumArrays=array();

for ($i=1;$i<=$k;$i++) {
    $lastElement=$input[$countInput-1];
    for ($j=$countInput-1;$j>0;$j--){
        $input[$j]=$input[$j-1];
    }
    $input[0]=$lastElement;
    for ($l=0;$l<count($input);$l++){
        $sumArrays[$l]+=$input[$l];
    }
}

for ($i=0;$i<count($sumArrays);$i++){
    echo $sumArrays[$i].' ';
}
