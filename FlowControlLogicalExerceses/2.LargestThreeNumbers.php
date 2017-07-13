<?php
$firstNumber=intval(fgets(STDIN));
$secondNumber=intval(fgets(STDIN));
$thredNumber=intval(fgets(STDIN));

$largestFirstSecond=max($firstNumber,$secondNumber);
$largest=max($largestFirstSecond,$thredNumber);
echo "Max: ".$largest;

