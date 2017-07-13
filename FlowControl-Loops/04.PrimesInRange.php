<html>
<title>
    Sum of Digits
</title>
<body>
<form method="get">
    Start:
    <input type="text" name="start">
    End:
    <input type="text" name="end">
    <input type="submit" name="result" value="Submit">
</form>
</body>
</html>
<?php
if(isset($_GET['result'])) {
    $start = htmlspecialchars($_GET['start']);
    $end = htmlspecialchars($_GET['end']);

    if ($start < $end) {
        $resultArray=array();
        for ($i = $start; $i < $end; $i++) {
            if(isPrime($i)){
                $resultArray[]='<strong>'.$i.'</strong>';
            }else{
                $resultArray[]=$i;
            }
        }
        echo implode(", ", $resultArray);
    }else{
        echo "Invalid data";
    }
}
function isPrime($number){
    if($number==1){
        return false;
    }
    if($number==2){
        return true;
    }
    if($number%2==0){
        return false;
    }
    for($i = 3; $i <= sqrt($number); $i = $i + 2) {
        if($number % $i == 0)
            return false;
    }
    return true;
}