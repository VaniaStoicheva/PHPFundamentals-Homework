<?php
if(isset($_GET['calculate'])){
    $operation=$_GET['operation'];
    $numberOne=$_GET['numberOne'];
    $numberTwo=$_GET['numberTwo'];
    $output="";

    if($operation=="sum"){
        $output=$numberTwo+$numberTwo;
    }else if($operation=="subtract"){
        $output=$numberTwo+$numberTwo;
    }else{
        $output= "Invalid operation supplied!";
    }
}
include "calculator_frontend.php";