
<?php
$error = !empty($_GET['error']) ? $_GET['error'] : null;

if(isset($_GET['filter'])) {
    $stringNames = $_GET['names'];
    $stringAges = $_GET['ages'];
    $delimiters = array(",", "|", "&");

    function multiexplode($delimiters, $stringNames)
    {
        $ready = str_replace($delimiters, $delimiters[0], $stringNames);
        $launch = explode($delimiters[0], $ready);
        return $launch;
    }

    $names = multiexplode($delimiters, $stringNames);
    $ages = multiexplode($delimiters, $stringAges);

    if(count($names)!=count($ages)){
        header("Location: 1.2Web-StudentInfo.php?error=Names and ages mismatch");
        exit;
    }
}
    include "students-frontend.php";






