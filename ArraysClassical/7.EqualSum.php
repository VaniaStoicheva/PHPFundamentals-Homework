<?php
$input=explode(" ",trim(fgets(STDIN)));
//$input=array(1,2,3,3);



$count_input=count($input);

for ($i=0;$i<$count_input;$i++) {
    $leftSum=0;
    for ($j = 0; $j <$i; $j++) {

        $leftSum += $input[$j];
    }

    $rightSum=0;
    if($i!=($count_input-1)) {
        for ($k = $i + 1; $k < $count_input; $k++) {

            $rightSum += $input[$k];
        }
    }

        if ($leftSum == $rightSum) {
            $index = $i;
            break;

        }

}
if(isset($index)) {
    echo $index;
}else{
    echo "no";
}