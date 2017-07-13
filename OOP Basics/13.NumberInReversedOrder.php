<?php
class DecimalNumber{
    private $number;
    function __construct( $number)
    {
        $this->number=$number;
    }
    function reversedNumber(){

        return strrev($this->number);
    }
}
$input=trim(fgets(STDIN));
$number=new DecimalNumber($input);
echo $number->reversedNumber();
