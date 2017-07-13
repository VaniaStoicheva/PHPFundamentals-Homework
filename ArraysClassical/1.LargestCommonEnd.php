<?php
$firstText=explode(' ',fgets(STDIN));
$secondText=explode(' ',fgets(STDIN));

$minCount=min(count($firstText),count($secondText));
$maxCount=max(count($firstText),count($secondText));
$difCount=$maxCount-$minCount;
$leftCount=0;
$rightCount=0;

if(count($firstText)>count($secondText)){
    $bigText=$firstText;
    $smallText=$secondText;
}else{
    $bigText=$secondText;
    $smallText=$firstText;
}

for ($i=0;$i<$minCount;$i++){
    if($firstText[$i]==$secondText[$i]){
        $leftCount++;
    }else{
        break;
    }
}
for ($i=$maxCount;$i>=0;$i--){

   if($bigText[$i-1]==$smallText[$i-$difCount-1]){
        $rightCount++;
    }else{
        break;
    }
}
$count=max($leftCount,$rightCount);
echo $count;