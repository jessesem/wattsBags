<div class="control-group">
    <div class="option-header">
        <div class="option-number pull-left"><h3><?php echo $num ?></h3></div>
        <div class="option-title"><h3>Choose Size *</h3></div>
    </div>
    <div class="controls">
        <?php if ($type === 'default'): ?>
            <input type="radio" id="40inch" name="option[size]" value="40" checked="yes" >
            <label for="40inch">40 <br/>Inches</label>
            <input type="radio" id="30inch" name="option[size]" value="40" >
            <label for="30inch">30 <br/>Inches</label>
        <?php elseif ($type === 'large_small'): ?>
            <input type="radio" id="size-large" name="option[size]" value="Large" checked="yes" >
            <label for="size-large">Large</label>
            <input type="radio" id="size-small" name="option[size]" value="Small" >
            <label for="size-small">Small</label>
        <?php endif; ?>
    </div>
</div>