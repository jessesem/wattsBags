$(document).ready(function() {
    /* Show Password*/
    $('#txthdnPassword').hide();
    $('#txthdnPassword').attr('readonly','readonly');
    $('#txtPassword').blur(function() {
        $('#txthdnPassword').val($(this).val());
    });

    $('#chkShow').change(function() {
        var isChecked = $(this).prop('checked');
        if (isChecked) {
            $('#txtPassword').hide();
            $('#txthdnPassword').show();
        }
        else {
            $('#txtPassword').show();
            $('#txthdnPassword').hide();
        }
    });


    /* Fixed Help Scroll */
    var elementPosition = $('#help').offset();

    $(window).scroll(function(){
        if($(window).scrollTop() > elementPosition.top){
            $('#help').css('position','fixed').css('right','0');
        } else {
            $('#help').css('position','inherit');
        }
    });





 $('.slidingDiv').hide();
 $(".show_hide").addClass("plus").show();
 $('.show_hide').click( function() {
		$(this).next().slideToggle(this);
		$(this).addClass("minus");
    $(this).removeClass("plus");
	});

    /* Slide Down */



/* Help Hover on Input */

$('.help').on("focus", 'input', function(event){
    var self = this;
    var fadeTime = 100;

    var helpBox = $('#help');

    helpBox.fadeOut(fadeTime, function(){
        var helpId = $(self).attr('id-help');
        if(helpId){
            $.jsonp({
                url:$helpUrl+'/'+helpId+'.js',
                callback: 'helpMessage',
                cache:true,
                pageCache: true,
                success:function (data, textStatus, xhr) {
                    $('#helpContent').html(data.help);
                    helpBox.fadeIn(500);
                },
                error: function(xOptions, textStatus){
                }

            });
        }
    });

});
  
});


