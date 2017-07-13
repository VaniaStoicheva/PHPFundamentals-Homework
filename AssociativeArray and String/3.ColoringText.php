<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coloring Text</title>
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
if(isset($_GET['input'])){
    $inputText=htmlspecialchars(trim($_GET['input']));
    $input=explode(" ",$inputText);
    $letters=[];

    $even=array(0,2,4,6,8);
    for ($i=0;$i<count($input);$i++) {
        $word = $input[$i];
        for ($j = 0; $j < strlen($word); $j++) {
            $char=$word[$j];
            $charAssci = ord($char);
            if (in_array(substr($charAssci, -1), $even)) {
                echo "<font color='red'>$char </font>";
            } else {
                echo "<font color='blue'>$char </font>";
            }
        }
    }
    }