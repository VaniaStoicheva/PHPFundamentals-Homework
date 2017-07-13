<?php
/*$_GET=array (
    'data' => 'mine bobovDol gold 10, mine medenRudnik silver 22, mine chernoMore shrimps 24, gold 50',
);*/



$input=explode(", ",$_GET['data']);
$typeOfElements=[
    "Gold"=>0,
    "Silver"=>0,
    "Diamonds"=>0];
$output='';
$result=[];
//var_dump($input);

foreach ($input as $item){
    $data=explode(" ",$item);

    if($data[0]!="mine"){
        continue;
    }

    if(count($data)!=4){
        continue;
    }



    if(!is_numeric($data[3])){
        continue;
    }

    $elements=ucfirst(strtolower($data[2]));
    if(!array_key_exists($elements,$typeOfElements)){
        continue;
    }
    $typeOfElements[$elements]+=$data[3];

    }


    foreach ($typeOfElements as $type=>$quantity){
    $output.="<p>*".$type.': '.$quantity.'</p>';
    }
echo $output;

