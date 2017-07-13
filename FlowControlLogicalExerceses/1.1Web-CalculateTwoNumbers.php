<form method="get">
    <div>
        Operation:
        <select name="operation">
            <option value="sum">Sum</option>
            <option value="subtract">Subtract</option>
        </select>
    </div>
    <div>
        Number1:
        <input type="text" name="numberOne"/>
    </div>
    <div>
        Number2:
        <input type="text" name="numberTwo"/>
    </div>
    <div>
        <input type="submit" name="calculate" value="Calculate!">
    </div>
</form>
<?php
if(isset($_GET['calculate'])){
    $operation=$_GET['operation'];
    $numberOne=$_GET['numberOne'];
    $numberTwo=$_GET['numberTwo'];

    echo "<ul>";
    echo "Result: ";
    if($operation=="sum"){
        echo "<li style='color:red'>".($numberTwo+$numberTwo)."</li>";
    }else if($operation=="subtract"){
        echo "<li style='color: #ff1510'>".($numberOne-$numberTwo)."</li>";
    }else{
        echo "<li style='color: chartreuse'> Invalid operation supplied!";
    }
    echo "</div>";
}
