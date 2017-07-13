<html>
<title>SquareRootSum</title>
<body>
<table border="1">
    <thead>
    <tr>
        <th>Number</th>
        <th>Square</th>
    </tr>
    </thead>
    <tbody >
    <?php $sum=0;
     for ($i=0;$i<=100;$i+=2):
         $sqrtNumber=number_format(sqrt($i),2);
     ?>
    <tr>

        <td><?=$i;?></td>
        <td><?=$sqrtNumber;$sum+=$sqrtNumber?></td>

    </tr>
    <?php endfor;?>
    <tr>
        <td>Total:</td>
        <td><?=$sum;?></td>
    </tr>
    </tbody>
</table>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: 1234
 * Date: 5.2.2017 г.
 * Time: 15:39 ч.
 */