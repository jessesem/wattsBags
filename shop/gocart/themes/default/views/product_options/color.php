<script>
$(function() {
    var colors = [
        {id: 1, name: 'Black', color: '#0000000', value:'Black' },
        {id: 2, name: 'Red', color: '#FF0000', value:'Red' },
        {id: 3, name: 'Navy Blue', color: '#000080', value:'Navy Blue' },
        {id: 4, name: 'Royal Blue', color: '#4169e1', value:'Royal Blue' },
        {id: 5, name: 'Forest Green', color: '#266A2E', value:'Forest Green' },
        {id: 6, name: 'Grey', color: '#7A7A7A', value:'Grey' },
    ];
    <?php if ($type === 'black_grey_blue'): ?>
        var colors = [
            {id: 1, name: 'Black', color: '#0000000', value:'Black' },
            {id: 2, name: 'Grey', color: '#7A7A7A', value:'Grey' },
            {id: 3, name: 'Blue', color: '#4169e1', value:'Blue' }
        ];
    <?php endif; ?>

    <?php if ($type === 'with_purple'): ?>
        colors.push({id: 7, name: 'Purple', color: '#663399', value: 'Purple'});
    <?php endif; ?>
    
    var colorsList = $('#colors');
    var colorIndicator = $('#color_indicator');

    $.each(colors, function() {
        colorsList.append(
            $('<li>').attr({id: 'color_' + this.id})
                .data('info', this)
                .append(
                    $('<div>').css('background-color', this.color)
                )
        );
    });
    
    colorsList.selectable({
        selected: function(event, ui) {
            var total = $(ui.selected).siblings('li.ui-selected').length + 1;
            if(total > 1) {
                $(ui.selected).removeClass('ui-selected');
            } else {
                var color = $(ui.selected).data('info').name;
                var value = $(ui.selected).data('info').value;
                colorIndicator.data('selected', color).text(color);
                $("#colorname").val(value);
            }
        }
    });
    
    colorsList.children('li').hover(function() {
        colorIndicator.text($(this).data('info').name);
    }, function() {
        colorIndicator.text(colorIndicator.data('selected'));
    });
});
</script>
<div class="control-group">
    <div class="option-header">
        <div class="option-number pull-left"><h3><?php echo $num ?></h3></div>
        <div class="option-title pull-left"><h3>Choose Color *</h3></div>
        <div class="option-indicator pull-right"><h4 id="color_indicator"></h4></div>
        <div class="clear"></div>
    </div>
    <div class="controls">

        <ol id="colors" class='selectable'></ol>

        <input id="colorname" name="option[color]" type="hidden" value="Black" >

        <p class="color-alert">This color may take 2 to 3 weeks longer to manufacture. Please call <strong>801-785-0700</strong> if you would like an exact ETA.</p>

    </div>
</div>