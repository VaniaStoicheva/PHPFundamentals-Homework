<html>
<title>
    Sum of Digits
</title>
<body>
<form method="get">
    Input string:
    <input type="text" name="numbers">
    <input type="submit" name="result" value="Submit">
</form>
<table border="1">
    <thead>
    <tr>
        <th>Number</th>
        <th>Sum of Digits</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if(!empty($_GET['result']) && isset($_GET['numbers'])):
        $numbersArray=htmlspecialchars($_GET['numbers']);
        $number=explode(", ",$numbersArray);
        $sum=0;
        foreach ($number as $num):
            ?>
            <tr>
                <td><?=$num;?></td>
                <?php if(ctype_digit($num)) {
                    echo '<td>' . array_sum(str_split($num)) . '</td>';
                }else{
                    echo '<td>'."I cannot sum that".'</td>';
                }
                ?>
            </tr>
            <?php
        endforeach;
    endif;
    ?>
    </tbody>
</table>
</body>
</html>
