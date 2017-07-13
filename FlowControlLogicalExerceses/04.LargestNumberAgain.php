<?php
$largest=0;
while($number=intval(fgets(STDIN))){
    if($number<0){
        $largest=min($largest,$number);
    }
    $largest=max($largest,$number);
}
echo "Max: ".$largest;