<?php
/*$_GET=array (
    'text' => 'The Milky Way is the galaxy that contains our star system',
    'lineLength' => '10',
);*/
$text=$_GET['text'];
$length=$_GET['lineLength'];

$matrix=[];
$row=0;
$col=0;
for ($i=0;$i<strlen($text);$i++){
    if($i>0 && $i%$length==0){
        $row++;
        $col=0;
    }
    $matrix[$row][$col]=$text[$i];
    $col++;
}
$lastCol=count($matrix[$row]);
for($i=$lastCol; $i<$length ;$i++){
    $matrix[$row][$i]=" ";
}

for($c=0 ;$c< $length ;$c++){
    $spaces=0;
    for($r=$row; $r>=0;$r--){
        if($matrix[$r][$c]==" "){
          $spaces++;
        }else{
           $char=$matrix[$r][$c];
           $matrix[$r][$c]=" ";
           $matrix[$r+$spaces][$c]=$char;
        }
    }
}

echo "<table>";
for ($row = 0; $row < count($matrix); $row++) {
    echo "<tr>";
    for ($col = 0; $col < count($matrix[$row]); $col++) {
        echo "<td>".htmlspecialchars($matrix[$row][$col])."</td>";
    }
    echo "</tr>";
}
echo "<table>";