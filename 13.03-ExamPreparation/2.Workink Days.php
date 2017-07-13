<?php
/*$_GET=array (
    'dateOne' => '17-12-2014',
    'dateTwo' => '31-12-2014',
    'holidays' => '31-12-2014
24-12-2014
08-12-2014',
);*/
$dateOne=new DateTime($_GET['dateOne']);
$dateTwo=new DateTime($_GET['dateTwo']);
$holidays=explode(PHP_EOL,$_GET['holidays']);

$output='';
for($date=$dateOne;$date<=$dateTwo;$date=$date->add(new DateInterval('P1D'))){
    if($date->format('l')=='Saturday'
        ||$date->format('l')=='Sunday'
        || in_array($date->format('d-m-Y'),$holidays)){
        continue;
    }


    $output.="<li>".$date->format('d-m-Y')."</li>";
}
if(!$output){
    echo "<h2>No workdays</h2>";
}else{
    echo '<ol>'.$output.'</ol>';
}

