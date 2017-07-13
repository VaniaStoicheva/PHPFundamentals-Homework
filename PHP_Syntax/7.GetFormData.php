<html>
<form method="get">
    <div>
    <span>
        <input type="text" name="name" placeholder="Name"/><br>
    </span>
        <span>

        <input type="text" name="age" placeholder="Age"/><br>
    </span>
        <span>
            <input type="radio" name="gender" value="male"/>Male<br>
        <input type="radio" name="gender" value="female"/>Female<br>
    </span>
        <input type="submit"><br>
    </div>
</form>

<?php
if(isset($_GET["submit"])) {
    $name =htmlspecialchars($_GET["name"]);
    $age =htmlspecialchars($_GET["age"]);
    $gender =htmlspecialchars($_GET["gender"]);
    echo "My name is $name.I am $age years old.I am $gender";
}
?>
</html>