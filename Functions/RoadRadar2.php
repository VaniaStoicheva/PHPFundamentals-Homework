<?php
$currentSpeed=trim(fgets(STDIN));
$area=explode(", ",trim(fgets(STDIN)));

function getLimit($area){
    switch ($area){
        case 'motorway':$limit=130;break;
        case 'interstate':$limit=90;break;
        case 'city':$limit=50;break;
        case 'residential':$limit=20;break;
        default: echo "'Not a valid value";$limit=1000;
    }
    return $limit;
}
function getInfraction($speed,$limit){
    $overSpeed=$speed-$limit;
    if($overSpeed<=0){
        $result=false;
    }
    if($overSpeed<=20){
        $result='speeding';
    }
    if($overSpeed<=40){
        $result='excessive speeding';
    }
    if($overSpeed>40){
        $result='reckless driving';
    }
    return $result;
}

$limit=getLimit($area);
$infraction=getInfraction($currentSpeed,$limit);
if($infraction){
    return $infraction;
}else{
    return false;
}