<?php
class Fibonacci{

    function getFibNumber($number){
        return round(pow((sqrt(5) + 1) / 2, $number) / sqrt(5));
    }

    public function getNumbersInRange(int $start,int $end) {
        $newArray=[];
        for ($i=$start;$i<$end;$i++){
            array_push($newArray,self::getFibNumber($i));
        }
        return implode(', ',$newArray);
    }

}
$fib=new Fibonacci();
$start=trim(fgets(STDIN));
$end=trim(fgets(STDIN));
echo  $fib->getNumbersInRange($start,$end);