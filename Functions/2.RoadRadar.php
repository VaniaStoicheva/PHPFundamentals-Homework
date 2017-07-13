<?php
$speed=intval(trim(fgets(STDIN)));
$area=trim(fgets(STDIN));

function inArea($limitSpeed,$currentSpeed){
    $speeds=$currentSpeed-$limitSpeed;
    if($speeds>0) {
        if ($speeds <= 20)
            return "speeding" . "\n";

        if ($speeds <= 40)
            return "excessive speeding" . "\n";


        return "reckless driving" . "\n";
    }
    return false;
};


$motorwayLimit=130;
$interstateLimit=90;
$cityLimit=50;
$residentialLimit=20;


if($area=='motorway'){
inArea($motorwayLimit,$speed);
}
if($area=='interstate'){
    inArea($interstateLimit,$speed);
}
if($area=='residential'){
    inArea($residentialLimit,$speed);
}
if($area=='city'){
    inArea($cityLimit,$speed);
}