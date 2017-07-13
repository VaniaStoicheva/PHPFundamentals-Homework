<?php
$text=trim(fgets(STDIN));
$word=trim(fgets(STDIN));

$sentece=explode("",$text);
preg_match_all("/([^.?!]*\\b" . $word . "\\b[^.?!]*[.?!])/", $text, $res);

foreach ($res[0] as $item) {
    echo trim($item) . "\n";
}