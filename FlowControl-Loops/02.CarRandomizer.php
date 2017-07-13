<html>
<title>
    CarRandomizer
</title>
<body>
<form method="get">
    Enter cars:
    <input type="text" name="cars">
    <input type="submit" name="result" value="Show Rezult">
</form>
<table border="1">
    <thead>
    <tr>
        <th>Car</th>
        <th>Color</th>
        <th>Count</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if(!empty($_GET['result']) && isset($_GET['cars'])):
    $carsArray=htmlspecialchars($_GET['cars']);
    $color=["green","blue","Yellow","red"];
    $cars=explode(", ",$carsArray);
    foreach ($cars as $car):
    ?>
    <tr>
        <td><?=$car;?></td>
        <td><?=$color[array_rand($color)];?></td>
        <td><?=rand(1,5);?></td>
    </tr>
    <?php
    endforeach;
    endif;
    ?>
    </tbody>
</table>
</body>
</html>
