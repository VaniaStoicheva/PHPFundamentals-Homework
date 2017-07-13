<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Word Mapping</title>
</head>
<body>
<form method="get">
<textarea name="input">
</textarea>
    </br>
<input type="submit" name="submit" value="Counts words">
</form>

</body>
</html>
<?php
if(isset($_GET['input']) && isset($_GET['submit'])) {
    $inputText = htmlspecialchars($_GET['input']);
    $inputText = strtolower(trim($inputText));

    function multiexplode ($delimiters,$string) {

        $ready = str_replace($delimiters, $delimiters[0], $string);
        $launch = explode($delimiters[0], $ready);
        return  $launch;
    }
    $delimiters=array('.','!','/',' ');
    $inputArray=multiexplode($delimiters,$inputText);

    foreach ($inputArray as $k=>$v){
        if(strlen($v)==0){
            unset($inputArray[$k]);
        }
    }
    $array=array_count_values($inputArray);

    echo "<table border='2'>";
    foreach ($array as $k => $v) {
        echo "<tr><td>$k</td><td>$v</td></tr>";
    }
    echo "</table>";



}