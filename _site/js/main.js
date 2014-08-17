
// AutoFix

$('header').fixTo('body');

$('#menu-products').fixTo('body', {
    mind: 'header',
    zIndex: 1050,
});

$(document).ready(function(){
$('.carousel').carousel({interval: 5000});

    $(document).on('mouseleave', '.carousel', function() {
        $(this).carousel('pause');
    });

  });


  $(function() {
     $("img.lazy").lazyload({
         effect : "fadeIn"
     });

  });
  //Tabs
$('#piggyback a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
});

// AutoFix
    $('header').fixTo('body');
    $('#menu-products').fixTo('#wrapper', {mind: 'header'
    });

    $(window).scroll(function() {
        $('#phone').each(function(){
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+400) {
                $(this).addClass("slideLeft");
            }
        });
});
