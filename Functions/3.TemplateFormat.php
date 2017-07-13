<?php
$input=explode(", ",trim(fgets(STDIN)));

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<quiz>";
for ($i=0;$i<count($input);$i+=2){
    $question=$input[$i];
    $answer=$input[$i+1];

 echo "\n"."<question>";
  echo "\t"."\n".$question."\r\n";
echo "</question>"."\n";
echo  "<answer>";
    echo "\r\n".$answer."\r\n";
echo "</answer>";
}
echo "\n"."</quiz>";