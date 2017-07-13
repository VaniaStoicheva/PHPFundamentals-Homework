<?php if(!empty($error)): ?>
    <h1><?= $error; ?></h1>
<?php endif; ?>
<form method="get">
    <div>
        Delimeter:
        <select name="delimeter">
            <option value=",">,</option>
            <option value="|">|</option>
            <option value="&">&</option>
        </select>
    </div>
    <div>
        Names:
        <input type="text" name="names"/>
    </div>
    <div>
        Ages:
        <input type="text" name="ages"/>
    </div>
    <div>
        <input type="submit" name="filter" value="Filter"/>
    </div>
</form>

<?php if(isset($_GET['filter'])):?>
<table border="1" cellpadding="0">
    <thead>
    <th>Name</th>
    <th>Age</th>
    </thead>
    <tbody>
    <?php for ($i=0;$i<count($names);$i++):?>
        <tr>
            <td><?=$names[$i]; ?></td>
            <td><?=$ages[$i];?></td>
        </tr>
    <?php endfor;?>
    </tbody>
</table>
<?php endif;?>
