<?php
$array=explode(" ",fgets(STDIN));


$counts_array = array_count_values($array);
arsort($counts_array);


$max = 0; $key = 0;
foreach($counts_array as $k=>$v){

        if ($v > $max) {
            $max = $v;
            $key = $k;
        }

}
echo $key;