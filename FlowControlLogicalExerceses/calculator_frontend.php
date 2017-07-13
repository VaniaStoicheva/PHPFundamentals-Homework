
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
    <?php if(isset($output)):?>
          <div>
              Result:
              <input type="text" disabled="disabled" readonly="readonly" value="<?= $output;?>"

          </div>
    <?php endif;?>
    <div>
        <input type="submit" name="calculate" value="Calculate!">
    </div>
</form>