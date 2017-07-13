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
if(isset($_GET['input'])) {
    $inputString = trim($_GET['input']);
    $words = [];
    $inputString = strtolower($inputString);
    $wordsArray = str_word_count($inputString, 1);


    foreach ($wordsArray as $item) {
        if (isset($words[$item])) {
            $words[$item]++;
        } else {
            $words[$item] = 1;
        }
    }
    echo "<table border='2'>";
    foreach ($words as $k => $v) {
        echo "<tr><td>$k</td><td>$v</td></tr>";
    }
    echo "</table>";
}
