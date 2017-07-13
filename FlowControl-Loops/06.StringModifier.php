<html>
<title>
    String Modifier
</title>
<body>
<form method="get">
    <input type="text" name="string">
    <input type="radio" name="modifier" value="palindrome" id="palindrome">
    Check Palindrome
    <input type="radio" name="modifier" value="reverse">
    Reverse String
    <input type="radio" name="modifier" value="split">
    Split
    <input type="radio" name="modifier" value="hashString">
    Hash String
    <input type="radio" name="modifier" value="shufleString">
    Shufle sting:
    <input type="submit" name="result">
</form>
</body>
</html>
<?php
if(isset($_GET['result']) && !empty($_GET['modifier']) && isset($_GET['string'])) {
    $string = htmlspecialchars($_GET['string']);
    $modifier = htmlspecialchars($_GET['modifier']);

    switch ($modifier) {
        case "palindrome":
            echo isPalindrome($string);
            break;
        case "reverse":
            echo strrev($string);
            break;
        case "split":
            echo splitString($string);
            break;
        case "hashString":
            echo hashString($string);
            break;
        case "shufleString":
            echo shufleString($string);
            break;
    }
}
    function isPalindrome($string){
        $str=strtolower($string);
        $reversedString=strrev($str);
        if($str==$reversedString){
            return $string." is a palindrom";
        }else{
            return $string." is not a palindrome";
        }
    }
    function splitString($string){
        $str=strtolower($string);
        $splitedArray=str_split($str);
        return implode(", ",$splitedArray);

    }
function shufleString($string){
        $arraySplited=str_split($string);
        shuffle($arraySplited);
        return implode(", ",$arraySplited);
}
function hashString($string)
{
    $crypted = crypt($string,CRYPT_EXT_DES);
    return $crypted;
}