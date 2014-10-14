<p>&nbsp;</p>
<div class="page-header">
    <h2>Payment</h2>
</div>
<div class="form_wrap">
    <div>
        Full Name <span>(as shown on card)</span><b class="r"> *</b><br/>
        <input type="text" name="CardHolder" value="" id="CardHolder" class="pmt_required textfield input-xlarge"  />
    </div>
    <div>
        Card Type<b class="r"> *</b><br/>
        <select name="CardType" class="input">
            <option value="MASTERCARD">MasterCard</option>
            <option value="VISA">VISA Credit</option>
        </select>        </div>
    <div>
        Card Number<b class="r"> *</b><br/>
        <input type="text" name="CardNumber" value="" id="CardNumber" class="pmt_required textfield input-xlarge" size="30"  />        </div>
</div>
<?php 
$thisYear = (int)date("Y");
$fromStartYear = abs($thisYear - 6);
$fromEndYear = $thisYear;

$endStartYear = $thisYear;
$endEndYear = $thisYear + 8;
?>
<div class="form_wrap">
    <div>
        Valid From<br/>
        <select name="StartDate_mm" class="input-small">
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>/<select name="StartDate_yy" class="input-small">
            <?php for($i = $fromEndYear; $i >= $fromStartYear; $i--): ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php endfor; ?>
        </select>        </div>
    <div>
        Expires On<b class="r"> *</b><br/>
        <select name="ExpiryDate_mm" class="input-small">
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>/<select name="ExpiryDate_yy" class="input-small">
            <?php for($i = $endStartYear; $i <= $endEndYear; $i++): ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php endfor; ?>
        </select>		</div>
    <div>
        CVV Code<b class="r"> *</b><br/>
        <input type="text" name="CV2" value="" id="CV2" max_length="3" class="pmt_required textfield input-small" size="5"  />		</div>
</div>
<p>&nbsp;</p>