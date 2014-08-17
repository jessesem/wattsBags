
// AutoFix
$('header').fixTo('body');

$('#menu-products').fixTo('body', {
    mind: 'header',
    zIndex: 1050,
});

//Carousel
$(document).ready(function(){
$('.carousel').carousel({interval: 5000});

    $(document).on('mouseleave', '.carousel', function() {
        $(this).carousel('pause');
    });

  });

//lazyload
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