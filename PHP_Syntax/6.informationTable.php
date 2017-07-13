

<html>
<div>
    <form method="get">
        Name:
        <input type="text" name="name"/><br>
        Phone number:
        <input type="text" name="phone"/><br>
        Age:
        <input type="text" name="age"/><br>
        Address:
        <input type="text" name="address"/><br>
            <input type="submit"><br>
</form>
</div>
    <?php if(isset($_GET["submit"])):?>
    <table border="1">
        <tr>
            <td bgcolor="#ff7f50">Name:</td>
            <td><?php echo $_GET['name'];?></td>
        </tr>
        <tr>
            <td bgcolor="#ff7f50">Phone number:</td>
            <td><?php echo $_GET['phone'];?></td>
        </tr>
        <tr>
            <td bgcolor="#ff7f50">Age:</td>
            <td><?php echo $_GET['age'];?></td>
        </tr>
        <tr>
            <td bgcolor="#ff7f50">Address:</td>
            <td><?php echo $_GET['address'];?></td>
        </tr>
    </table>
    <?php endif;?>
</html>
