<?php
$input=explode(", ",trim(fgets(STDIN)));
$x1=$input[0];
$y1=$input[1];
$x2=$input[2];
$y2=$input[3];

$distance1=sqrt(pow($x1-$y1,2));
$distance2=sqrt(pow($x2-$y2,2));
$distance3=sqrt(pow($x1-$y1,2)+pow($x2-$y2,2));

if(is_numeric($distance1)){
    echo "{".$x1.", ".$y1."} to {0, 0} is valid"."\n";
}
else{
    echo "{".$x1.", ".$y1."} to {0, 0} is invalid"."\n";
}
if(is_numeric($distance2)){
    echo "{".$x2.", ".$y2."} to {0, 0} is valid"."\n";
}
else{
    echo "{".$x2.", ".$y2."} to {0, 0} is invalid"."\n";
}
if(is_numeric($distance3)){
    echo "{".$x1.", ".$y1."} to {".$x2.", ".$y2."} is valid"."\n";
}
else{
    echo "{".$x1.", ".$y1."} to {".$x2.", ".$y2."} is invalid"."\n";
}
//echo $distance1."; ".$distance2."; ".$distance3;