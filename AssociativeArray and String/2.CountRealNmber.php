<?php
$inputArr=explode(" ",trim(fgets(STDIN)));
$resultArr=[];

foreach ($inputArr as $item){
    if(isset($resultArr[$item])){
        $resultArr[$item]++;
    }else{
        $resultArr[$item]=1;
    }
}
ksort($resultArr);
foreach ($resultArr as $k=>$v){
    echo "$k"." -> "."$v times"."\n";
}