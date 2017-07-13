<html>
<title>
    Anual Expenses
</title>
<body>
<form method="get">
    Enter number of years:
    <input type="text" name="years">
    <input type="submit" name="result" value="Show costs">
</form>
<table border="1">
    <thead>
    <tr>
        <th>Year</th>
        <th>January</th>
        <th>February</th>
        <th>March</th>
        <th>April</th>
        <th>May</th>
        <th>June</th>
        <th>July</th>
        <th>August</th>
        <th>September</th>
        <th>Octomber</th>
        <th>November</th>
        <th>Decemver</th>
        <th>Total:</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if(isset($_GET['result']) && !empty($_GET['years'])):
        $years=htmlspecialchars($_GET['years']);

        for ($year=2016;$year>2016-$years;$year--):?>
            <tr>
                <td><?=$year;?></td>
                <?php
                $total=0;
                for ($mounts=1;$mounts<=12;$mounts++):
                    $currentCost=rand(0,999);
                    ?>
                    <td><?=$currentCost;$total+=$currentCost;?></td>
                <?php endfor;?>
                <td><?=$total;?></td>
            </tr>
            <?php
        endfor;
    endif;
    ?>
    </tbody>
</table>
</body>
</html>
